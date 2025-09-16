<?php
    $str = "Les choses que l'on possède finissent par nous posséder.";
    $str_len = 0;
    $str_rev = "";
    while (isset($str[$str_len])) {
        $str_len++;
    }
    for ($i = $str_len - 1; $i >= 0; $i--) {
        $str_rev .= $str[$i];
    }

    echo $str_rev;
?>