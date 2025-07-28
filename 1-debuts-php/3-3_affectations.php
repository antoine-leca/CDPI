<?php 
    $x = true;
    $y = false;

    echo "x AND y donne " . ($x && $y ? 'true' : 'false') ;
    echo "<br>" ;
    echo "x OR y donne " . ($x || $y ? 'true' : 'false') ;
    echo "<br>" ;
    echo "x XOR y donne " . ($x xor $y ? 'true' : 'false') ;
    echo "<br>" ;
?>