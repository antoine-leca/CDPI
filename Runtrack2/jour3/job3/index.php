<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $str_len = 0;
    while (isset($str[$str_len])) {
        $str_len++;
    }
    for ($val = 0 ; $val < $str_len ; $val++) {
        $isvoyelle = false;
        foreach ($voyelles as $voyelle) {
            if ($str[$val] === $voyelle) {
                $isvoyelle = true;
            }
        }
        if ($isvoyelle === true) {
            echo $str[$val];
        }
    }
?>