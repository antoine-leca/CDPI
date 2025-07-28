<?php
    $chaine = "12,5,abc,32,-7,42";
    $chaineD = explode(",", $chaine);
    $chaine_filtree = [];

    foreach ($chaineD as $key => $value) {
        if (is_numeric($value)) {
            array_push($chaine_filtree, $value);
        }
        intval($value);
    }

    var_dump($chaine_filtree);

    var_dump(min($chaine_filtree));
    var_dump(max($chaine_filtree));
?>