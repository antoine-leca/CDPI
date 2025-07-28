<?php
    function moyenneEleve() {
        $classe = [
            [
                "prenom" => "Lucie",
                "maths" => 12,
                "francais" => 14,
                "histoire" => 9
            ],
            [
                "prenom" => "Yann",
                "maths" => 8,
                "francais" => 10,
                "histoire" => 7
            ],
            [
                "prenom" => "Sophie",
                "maths" => 16,
                "francais" => 13,
                "histoire" => 15
            ]
        ];
    
        foreach ($classe as $key => $value) {
            $prenom = $value["prenom"];
            $maths = $value["maths"];
            $francais = $value["francais"];
            $histoire = $value["histoire"];
            $moyenne = ($histoire + $francais + $maths) / 3;
    
            if ($moyenne >= 10) {
                $msg = $prenom . " a la moyenne : " . round($moyenne, 2) . "/20 et est admis.";
            } elseif ($moyenne < 10) {
                $msg = $prenom . " n'a pas la moyenne : " . round($moyenne, 2) . "/20 et n'est donc pas admis.";
            } else {
                $msg = "Notes invalides";
            }
            
            echo $msg . "<br>";
        }
    }

    moyenneEleve();
?>