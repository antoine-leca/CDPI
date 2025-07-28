<?php 
    const TVA = 0.2;
    $prixHT = 100;
    $prixTTC = $prixHT + ($prixHT * TVA);

    echo $prixTTC;
?>