<?php
    session_start();

    $erreur = "";

    $users = [
        'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
        'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
        'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
    ];
    // Identifiant alice  / Mot de passe : 123
    // Identifiant bob / Mot de passe : 456
    // Identifiant caroline / Mot de passe : 789

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $identifiant = trim($_POST['identifiant']) ?? '';
        $mdp = $_POST['mdp'] ?? '';

        if (isset($users[$identifiant]["password"])) {
            $mdpH = $users[$identifiant]['password'];
            if (password_verify($mdp, $mdpH)) {
                $_SESSION['utilisateur'] = $identifiant;
                $_SESSION['role'] = $users[$identifiant]["role"];
                header('Location: 10-1_sessions_dashboard.php');
            } else {
                $erreur = "Mot de passe incorrect.";
            }
        } else {
            header('Location: 10-1_sessions_failed.php');
            $erreur = "Identifiants incorrects.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="10-1_sessions_style.css">
</head>
<body>
    <?php if ($erreur): ?>
        <p style="color: red;"><?= $erreur ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="identifiant">Identifiant :</label>
            <input class="goated-input-settings" type="text" name="identifiant" id="identifiant">
        </div>
        <div>
            <label for="mdp">Mot de passe :</label>
            <input class="goated-input-settings" type="password" name="mdp" id="mdp">
        </div>
        <button type="submit" name="submit">se connecter</button>
    </form>
</body>
</html>