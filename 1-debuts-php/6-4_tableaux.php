<?php
    $temperatures = [30, 32, 34, 30, 35, 34, 31];

    $nbI = count($temperatures);
    $sumI = array_sum($temperatures);

    echo ($sumI / $nbI);
?>