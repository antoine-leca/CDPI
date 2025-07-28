<?php
    require_once './sessions.php';
    sessionStart();

    $error = '';
    $users = [];

    if (isset($_SESSION['email'])) {
        require_once './database.php';
        $users = readUsers($pdo);
        
        if (isset($_POST['submit'])) {
            sessionDestroy();
            header('Location: connexion.php');
            exit;
        }
        
    } else {
        $error = "<p style='color: red;'>Vous n'êtes pas connecté et n'avez pas accès à cette page, vous allez être redirigés vers la page de connexion.</p>";
        $error .= "<script>setTimeout(function(){ window.location.href = 'connexion.php'; }, 3000);</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        if (!empty($error)) {
            echo $error;
            exit;
        }
    ?>
    <h1>Bienvenue <?= $_SESSION['email'] ?? '' ?></h1>
    <h1>Liste des utilisateurs :</h1>
    <ul>
        <?php 
            foreach ($users as $user) {
                echo "<li>" . $user['email'] . "</li>"; 
            } 
        ?>
    </ul>
    <form method="POST">
        <button type="submit" name="submit">Se déconnecter</button>
    </form>
</body>
</html>