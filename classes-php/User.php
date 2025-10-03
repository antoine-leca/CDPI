<?php
    class User {

        private $id = null;
        public $login = '';
        public $email = '';
        public $firstname = '';
        public $lastname = '';

        public function __construct($id, $login, $email, $firstname, $lastname) {
            $this->id = $id;
            $this->login = $login;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        private function connect_db() {
            $bdd = mysqli_connect("localhost", "root", "root", "classes");
            if (!$bdd) {
                die("Erreur de connexion : " . mysqli_connect_error());
            }
            return $bdd;
        }

        public function register($login, $password, $email, $firstname, $lastname) {
            $bdd = mysqli_connect("localhost", "root", "root", "classes");
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Utiliser des requêtes préparées
            $req = "INSERT INTO users (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($bdd, $req);
            mysqli_stmt_bind_param($stmt, "sssss", $login, $hashedPassword, $email, $firstname, $lastname);
            
            $result = mysqli_stmt_execute($stmt);
            
            if ($result) {
                $userId = mysqli_insert_id($bdd);
                
                $selectReq = "SELECT * FROM users WHERE id = ?";
                $selectStmt = mysqli_prepare($bdd, $selectReq);
                mysqli_stmt_bind_param($selectStmt, "i", $userId);
                mysqli_stmt_execute($selectStmt);
                
                $userArray = mysqli_fetch_assoc(mysqli_stmt_get_result($selectStmt));
                
                mysqli_close($bdd);
                return $userArray;
            }
            
            mysqli_close($bdd);
            return false;
        }

        public function connect($login, $password) {
            $bdd = mysqli_connect("localhost", "root", "root", "classes");

            $req = "SELECT * FROM users WHERE login = ?";
            $stmt = mysqli_prepare($bdd, $req);
            mysqli_stmt_bind_param($stmt, "s", $login);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) === 1) {
                $user = mysqli_fetch_assoc($result);
                if (password_verify($password, $user['password'])) {
                    $this->id = $user['id'];
                    $this->login = $user['login'];
                    $this->email = $user['email'];
                    $this->firstname = $user['firstname'];
                    $this->lastname = $user['lastname'];
                    mysqli_close($bdd);
                    return true;
                }
            }

            mysqli_close($bdd);
            return false;
        }

        public function disconnect() {
            session_start();
            session_unset();
            session_destroy();
        }

        public function delete() {
            $bdd = $this->connect_db();

            if ($this->id !== null) {
                // Utiliser une requête préparée pour la sécurité
                $req = "DELETE FROM users WHERE id = ?";
                $stmt = mysqli_prepare($bdd, $req);
                mysqli_stmt_bind_param($stmt, "i", $this->id);
                mysqli_stmt_execute($stmt);
            }

            mysqli_close($bdd);
            $this->disconnect();
        }

        public function update($login, $email, $firstname, $lastname, $password = null) {
            if ($this->id === null) {
                return false;
            }

            $bdd = $this->connect_db();

            if ($password !== null && $password !== '') {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $req = "UPDATE users SET login = ?, email = ?, firstname = ?, lastname = ?, password = ? WHERE id = ?";
                $stmt = mysqli_prepare($bdd, $req);
                mysqli_stmt_bind_param($stmt, "sssssi", $login, $email, $firstname, $lastname, $hashedPassword, $this->id);
            } else {
                $req = "UPDATE users SET login = ?, email = ?, firstname = ?, lastname = ? WHERE id = ?";
                $stmt = mysqli_prepare($bdd, $req);
                mysqli_stmt_bind_param($stmt, "ssssi", $login, $email, $firstname, $lastname, $this->id);
            }

            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                $this->login = $login;
                $this->email = $email;
                $this->firstname = $firstname;
                $this->lastname = $lastname;
            }

            mysqli_close($bdd);
            return $result;
        }

        public function isConnected() {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            return isset($_SESSION['user_id']) && $_SESSION['user_id'] == $this->id;
        }

        public function getAllInfos() {
            return [
                'id' => $this->id,
                'login' => $this->login,
                'email' => $this->email,
                'firstname' => $this->firstname,
                'lastname' => $this->lastname
            ];
        }

        public function getLogin() {
            return [
                'login' => $this->login
            ];
        }

        public function getEmail() {
            return [
                'email' => $this->email
            ];
        }

        public function getFirstname() {
            return [
                'firstname' => $this->firstname
            ];
        }
        
        public function getLastname() {
            return [
                'lastname' => $this->lastname
            ];
        }
    }
?>