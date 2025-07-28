<?php
    require_once './sessions.php';
    sessionStart();
    require_once './database.php';

    if (isset($_SESSION['email'])) {
        echo "<p style='color: orange;'>Vous êtes déjà connecté ! Redirection vers le dashboard...</p>";
        echo "<script>setTimeout(function(){ window.location.href = 'dashboard.php'; }, 2000);</script>";
    }

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $passwordC= $_POST['passwordC'] ?? '';

    $error = '';
    $msg = '';
    if (isset($_POST['submit'])) {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetchColumn() > 0) {
            $error = "<p style='color: red;'>Cet email est déjà utilisé.</p>";
        } elseif ($password !== $passwordC) {
            $error = "<p style='color: red;'>Les mots de passe ne correspondent pas.</p>";
        } else {
            createUser($pdo, $email, $password);
            $msg = "<p style='color:green;'>Inscription réussie ! Vous allez être redirigé...</p>";
            $msg .= "<script>setTimeout(function(){ window.location.href = 'connexion.php'; }, 3000);</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
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
        <div>
            <label for="passwordC">Confirmation du mot de passe</label>
            <input type="password" name="passwordC" id="passwordC">
        </div>
        <?php
            if ($error) {
                echo $error;
            } elseif ($msg) {
                echo $msg;
            }
        ?>
        <button type="submit" name="submit">S'inscrire</button>
    </form>
</body>
</html>