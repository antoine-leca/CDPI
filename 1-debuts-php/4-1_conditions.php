<?php 
    $role = "";

    if ($role == "admin") {
        echo "Accès complet autorisé";
        echo "<br>";
    } elseif ($role == "editeur") {
        echo "Accès limité au modifications";
        echo "<br>";
    } elseif ($role == "visiteur") {
        echo "Accès lecture seule";
        echo "<br>";
    } else {
        echo "Rôle inconnu";
        echo "<br>";
    }

    switch ($role) {
        case "admin":
            echo "Accès complet autorisé";
            break;
        case "editeur":
            echo "Accès limité au modifications";
            break;
        case "visiteur":
            echo "Accès lecture seule";
            break;
        default:
            echo "Rôle inconnu";
    }
?>