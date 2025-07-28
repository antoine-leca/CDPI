<?php
    $panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";
    $panierD = explode(",", $panier);
    $panierFinal = [];
    $produitsValides = 0;
    $prixPanier = 0;

    foreach ($panierD as $key => $value) {
        $i = explode(":", $value);
        $i[0] = trim($i[0]);
        $i[0] = strtolower($i[0]);
        if (is_numeric($i[1]) == true) {
            $produitsValides++;
            $prixPanier += $i[1];
            $prixPanierR = round($prixPanier);
            $panierFinal[$i[0]] = floatval($i[1]);
        }
    }
    var_dump($produitsValides);
    echo "Le prix total du panier est de " . $prixPanierR . "€";
?>