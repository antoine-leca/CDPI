<?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $str_len = 0;
    $new_str = "";
    while (isset($str[$str_len])) {
        $str_len++;
    }
    for ($i = 0; $i < $str_len - 1; $i++) {
        $new_str .= $str[$i + 1];
    }
    $new_str .= $str[0];

    echo $new_str;
?>