<?php
    class UserPdo {

        private $id = null;
        public $login = '';
        public $email = '';
        public $firstname = '';
        public $lastname = '';
        private $pdo;

        // Constructeur identique à User (paramètres obligatoires)
        public function __construct($id, $login, $email, $firstname, $lastname) {
            $this->id = $id;
            $this->login = $login;
            $this->email = $email;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->initDB();
        }

        private function initDB() {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=classes;charset=utf8", "root", "root");
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }

        public function register($login, $password, $email, $firstname, $lastname) {
            try {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                $stmt = $this->pdo->prepare("INSERT INTO users (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)");
                $result = $stmt->execute([$login, $hashedPassword, $email, $firstname, $lastname]);
                
                if ($result) {
                    $userId = $this->pdo->lastInsertId();
                    
                    $selectStmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
                    $selectStmt->execute([$userId]);
                    
                    $userArray = $selectStmt->fetch(PDO::FETCH_ASSOC);
                    
                    return $userArray;
                }
                
                return false;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function connect($login, $password) {
            try {
                $stmt = $this->pdo->prepare("SELECT * FROM users WHERE login = ?");
                $stmt->execute([$login]);

                if ($stmt->rowCount() === 1) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($password, $user['password'])) {
                        // Pas de gestion de session comme dans User original
                        $this->id = $user['id'];
                        $this->login = $user['login'];
                        $this->email = $user['email'];
                        $this->firstname = $user['firstname'];
                        $this->lastname = $user['lastname'];
                        return true;
                    }
                }

                return false;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function disconnect() {
            session_start();
            session_unset();
            session_destroy();
        }

        public function delete() {
            try {
                if ($this->id !== null) {
                    $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
                    $stmt->execute([$this->id]);
                }

                $this->disconnect();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function update($login, $email, $firstname, $lastname, $password = null) {
            if ($this->id === null) {
                return false;
            }

            try {
                if ($password !== null && $password !== '') {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $this->pdo->prepare("UPDATE users SET login = ?, email = ?, firstname = ?, lastname = ?, password = ? WHERE id = ?");
                    $result = $stmt->execute([$login, $email, $firstname, $lastname, $hashedPassword, $this->id]);
                } else {
                    $stmt = $this->pdo->prepare("UPDATE users SET login = ?, email = ?, firstname = ?, lastname = ? WHERE id = ?");
                    $result = $stmt->execute([$login, $email, $firstname, $lastname, $this->id]);
                }

                if ($result) {
                    $this->login = $login;
                    $this->email = $email;
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                }

                return $result;
            } catch (PDOException $e) {
                return false;
            }
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