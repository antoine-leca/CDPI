<?php
    require_once './sessions.php';
    sessionStart();
    
    require_once './database.php';

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $error= '';
    $msg = '';

    if (isset($_POST['submit'])) {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            $msg = "<p style='color:green;'>Connexion réussie ! Vous allez être redirigé vers votre tableau de bord</p>";
            $msg .= "<script>setTimeout(function(){ window.location.href = 'dashboard.php'; }, 3000);</script>";
        } else {
            $error = "<p style='color: red;'>Identifiants incorrects.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="email">Mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <?php
            if ($error) {
                echo $error;
            }
            if ($msg) {
                echo $msg;
            }
        ?>
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>