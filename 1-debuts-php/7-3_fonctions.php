<?php 
    function calculImpots($revenu) {
        $barêmes = [
            ["%" => 0, "min" => 0 , "max" => 9999],
            ["%" => 10, "min" => 10000, "max" => 19999],
            ["%" => 18, "min" => 20000, "max" => 34999],
            ["%" => 25, "min" => 35000, "max" => 49999],
            ["%" => 35, "min" => 50000, "max" => 100000000000]
        ];
        $IR = 0;
        
        foreach ($barêmes as $bareme) {
            if ($revenu > $bareme["min"]) {
                $rb = min($revenu, $bareme["max"]) - $bareme["min"];
                $ib = $rb * ($bareme["%"] / 100);
                $IR += $ib;

                echo "Tranche " . $bareme["%"] . "% : " . $rb . "€ x " . $bareme["%"] . "% = " . $ib . "€<br>";
            }
        }

        return $IR;
    }
*
    $impot1 = calculImpots(16000);
    echo "Impôt total : " . $impot1 "€<br>";
    
    $impot2 = calculImpots(38000);
    echo "Impôt total : " . $impot2€ . "<br>";
    
    $impot3 = calculImpots(64000);
    echo "Impôt total : " . $impot3 . "€<br>";
?>