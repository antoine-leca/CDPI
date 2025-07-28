<?php
    $mdp = $_POST["mdp"];
    $mdpc = $_POST["mdpc"];

    if ($mdp == $mdpc && strlen($mdp) >= 6) {
        $mdph = password_hash($mdp, PASSWORD_BCRYPT);
        echo $mdph;
    } elseif ($mdp != $mdpc) {
        echo "Les mots de passe ne correspondent pas.";
    } elseif (strlen($mdp) < 6) {
        echo "Le mot de passe est trop court";
    }
?>