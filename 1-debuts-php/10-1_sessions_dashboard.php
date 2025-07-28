<?php
session_start();

    if (!isset($_SESSION['utilisateur'])) {
        // Redirection vers la page de login si non connecté
        header('Location: 10-1_sessions_connexion.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page protégée</title>
    </head>
    <body>
        <h1>Bienvenue <?= htmlspecialchars($_SESSION['utilisateur']) ?> !</h1>
        <p>Ceci est une page réservée aux utilisateurs connectés.</p>

        <a href="10-1_sessions_logout.php">Se déconnecter</a>
    </body>
</html>