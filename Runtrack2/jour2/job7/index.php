<?php
    $hauteur = 5;

    echo "<pre>";
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $hauteur - $i - 1; $j++) {
            echo " ";
        }
        if ($i == 0) {
            echo '/';
        } elseif ($i == $hauteur - 1) {
            echo "/";
            for ($j = 0; $j < ($i * 2) - 1; $j++) {
                echo "_";
            }
            echo "\\";
        } else {
            echo "/";
            for ($j = 0; $j < ($i * 2) - 1; $j++) {
                echo " ";
            }
            echo "\\";
        }
        echo "\n";
    }
    echo "</pre>";
?>