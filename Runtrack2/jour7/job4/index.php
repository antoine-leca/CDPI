<?php
    function calcule($num, $ope, $num2) {
    switch ($ope):
        case "+":
            echo $num + $num2, "<br>";
            break;
        case "-":
            echo $num - $num2, "<br>";
            break;
        case "*":
            echo $num * $num2, "<br>";
            break;
        case "/":
            echo $num / $num2, "<br>";
            break;
        default:
            echo "Choississez un opérateur valide";
            break;
    endswitch;
    }
    calcule(5,"*",2);
    calcule(5,"/",2);
    calcule(5,"+",2);
    calcule(5,"-",2);
    calcule(5,"0",2);
?>