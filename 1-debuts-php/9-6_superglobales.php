<?php
    $identifiantEnregistre = 'admin';
    $motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je';
    //secret123

    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    if (password_verify($mdp, $motdepasseHash) && $pseudo == $identifiantEnregistre) {
        echo "connexion réussie !";
    } else {
        echo "Echec de la connexion, veuillez vérifier vos identifiants.";
    }
?>