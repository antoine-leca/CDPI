<?php
    $temperature = 1;

    $message = ($temperature < 10) ? "Froid" : (($temperature > 20) ? "Chaud" : "Doux");
    echo $message;
?>