<?php
    function mult($nb) {
        for ($i=1; $i <= 10; $i++) {
            echo $nb . " x " . $i . " = " . ($nb*$i) . "<br>";
        }
        echo "<br>";
    }

    mult(4);
    mult(12);
?>