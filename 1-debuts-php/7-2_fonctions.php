<?php 
    function afficherEtoile($nbr) {
        $star = "*";

        for ($s=1; $s <= $nbr; $s++) {
            echo $star;
        }
        echo "<br>";
    }

    afficherEtoile(1);
    afficherEtoile(2);
    afficherEtoile(3);
    afficherEtoile(4);
    afficherEtoile(5);
?>