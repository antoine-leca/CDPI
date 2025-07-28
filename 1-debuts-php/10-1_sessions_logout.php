<?php
session_start();

// Supprime toutes les variables de session
session_unset();

// Détruit la session côté serveur
session_destroy();

// Redirige vers la page de login
header('Location: 10-1_sessions_connexion.php');
exit;

?>