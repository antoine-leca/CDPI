<?php
    $prenom = $_POST["firstname"];

    if (empty($prenom)) {
        echo "Le champ est vide";
    } else {
        echo "Bonjour " . $prenom . " !";
    }
?>