<?php
    $villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];

    echo $villes[4] . "<br>";

    $villes[0] = "Nice";

    array_push($villes, "Reims");

    echo count($villes) . "<br>";

    foreach ($villes as $ville => $val) {
        echo $val . "<br>";
        $val++;
    }
?>