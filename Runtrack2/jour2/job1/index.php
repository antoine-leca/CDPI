<?php
    $val = 0;

    for ($i=0; $i <= 1337 ; $i++) { 
        if ($i==42) {
            echo "<p style='color:red; text-decoration:underline; font-weight:700;'>" . $i . "</p>";
        } else {
            echo $i . "<br>";
        }
    }
?>