<?php 
    $a = 5;
    $b = 10;
    $c = 3;

    echo "a + b donne " . ($a += $b) ;
    echo "<br>" ;
    echo "b * c donne " . ($b *= $c) ;
    echo "<br>" ;
    echo "b / a donne " . ($b /= $a) ;
    echo "<br>" ;
    echo "b - c donne " . ($b -= $c) ;
    echo "<br>" ;
    echo "a - b donne " . ($a -= $b) ;
    echo "<br>" ;
    echo "a % b donne " . ($a %= $b) ;
?>