<?php
    if (!isset($_SESSION['utilisateur'])) {
        // Redirection vers la page de login si non connecté
        header('Location: 10-1_sessions_connexion.php');
        exit;
    }
?>