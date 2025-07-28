<?php
    $eleves = [
        "Alice"  => 15,
        "Benoît" => 9,
        "Claire" => 18,
        "David"  => 11
    ];

    foreach ($eleves as $eleve => $val) {
        echo $eleve . " a obtenu " . $val . "/20. <br>";
    }
    $ElMo = 0;
    foreach ($eleves as $eleve => $val) {
        if ($val > 10) {
            $ElMo++;
        }
    }
    echo $ElMo;


?>