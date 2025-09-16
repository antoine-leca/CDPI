<?php
    function occurences($str, $char) {
        $str_len = 0;
        $char_counter = 0;
        while (isset($str[$str_len])) {
            $str_len++;
        }
        for ($i = 0; $i < $str_len; $i++) {
            if ($char < $str_len) {
                $char_counter++;
            }
        }
    }
    echo occurences("Bonjour", "o")
?>