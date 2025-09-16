<?php
    $str = "Dans l'espace, personne ne vous entend crier";
    $str_len = 0;
    while (isset($str[$str_len])) {
        $str_len++;
    }
    echo $str_len;
?>