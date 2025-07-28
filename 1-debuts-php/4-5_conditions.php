<?php 
$size = "XL";
const TVA = 0.20;

switch ($size) {
case "S"    :
$price=10; 
break;
case "M"    : 
$price=12; 
break;
case "L"    : 
$price=14; 
break;
case "XL"   : 
$price=16; 
    break;
default: 
echo "Taille inconnue";
exit();
}

$prixTTC = $price + ($price * TVA);

echo "Le prix du tshirt taille " . $size . " est de " . $prixTTC . " € TTC (" . $price . " € HT + 20% de TVA)." 
?>