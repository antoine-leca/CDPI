<?php
    $recherche = $_GET["search"];

    if (empty($recherche)) {
        echo "Le champ est vide";
    } else {
        echo $recherche;
    }
?>