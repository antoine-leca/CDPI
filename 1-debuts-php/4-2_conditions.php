<?php
    $jour = "Samedi";

    switch ($jour) {
        case "Lundi":
        case "Mardi":
        case "Mercredi":
        case "Jeudi":
        case "Vendredi":
            echo $jour . " est un jour ouvré.";
            break;
        case "Samedi":
        case "Dimanche":
            echo $jour . " est un jour non travaillé.";
            break;
        default: 
            echo "Veuillez entrer un jour valide.";
            break;
    }
?>