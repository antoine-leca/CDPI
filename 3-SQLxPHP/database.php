<?php
    $dsn = 'mysql:host=localhost;dbname=sqlxphp;charset=utf8';
    $user = 'root';
    $password = 'root';

    $pdo = new PDO($dsn, $user, $password);
    
    function createUser($pdo, $email, $password) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
    }

    function readUsers($pdo) {
        $sql = "SELECT email FROM user";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
?>