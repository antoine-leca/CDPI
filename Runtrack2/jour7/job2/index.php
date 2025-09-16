<?php
    function bonjour($jour) {
        if ($jour == true) {
            echo "Bonjour<br>";
        }
        else {
            echo "Bonsoir";
        }
    }

    bonjour(true);
    bonjour(false);
?>