<?php
    function nombres($deb, $fin) {
        for ($i=$deb; $i <= $fin; $i+=2) {
            echo $i . "<br>";
        }
    }

    nombres(7, 99);
    nombres(59, 169);
?>