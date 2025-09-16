<?php
    function toleet($str) {
        $alphabet_l = "";
        for ($i = 0; $i < 26; $i++)
            $alphabet_l .= "abcdefghijklmnopqrstuvwxyz"[$i];

        $alphabet_u = "";
        for ($i = 0; $i < 26; $i++)
            $alphabet_u .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ"[$i];

        $leet = "";
        for ($i = 0; $i < 26; $i++)
            $leet = "4,8,<,|),3,|=,6,#,1,9,|<,1,/\/\,|\|,0,|D,9,|2,5,7,(_),\/,\/\/,><,`/,2";
    }
?>