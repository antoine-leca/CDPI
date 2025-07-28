<?php
    $eleves = [
        "Alice" => [
            "maths" => 15,
            "francais" => 14,
            "anglais" => 13
        ],
        "Bob" => [
            "maths" => 8,
            "francais" => 10,
            "anglais" => 11
        ],
        "Claire" => [
            "maths" => 18,
            "francais" => 17,
            "anglais" => 19
        ]
    ];

    foreach ($eleves as $prenom => $notes) {
        $maths = $notes["maths"];
        $francais = $notes["francais"];
        $anglais = $notes["anglais"];
        $moyenne = ($anglais + $francais + $maths) / 3;

        if ($moyenne < 10) {
            $msg = "La moyenne de " . $prenom . " est de " . round($moyenne, 2) . "/20. L'élève est en échec";
        } elseif ($moyenne <= 12) {
            $msg = "La moyenne de " . $prenom . " est de " . round($moyenne, 2) . "/20. L'élève peut mieux faire.";
        } elseif ($moyenne <= 15) {
            $msg = "La moyenne de " . $prenom . " est de " . round($moyenne, 2) . "/20. L'élève fait du bon travail.";
        } else {
            $msg = "La moyenne de " . $prenom . " est de " . round($moyenne, 2) . "/20. L'élève excelle.";
        }
        
        echo $msg . "<br>";
    }

    echo "<br>";

    $totalMaths = 0;
    $totalFrancais = 0;
    $totalAnglais = 0;
    $nbEleves = count($eleves);

    foreach ($eleves as $notes) {
        $totalMaths += $notes["maths"];
        $totalFrancais += $notes["francais"];
        $totalAnglais += $notes["anglais"];
    }

    $moyenneMaths = $totalMaths / $nbEleves;
    $moyenneFrancais = $totalFrancais / $nbEleves;
    $moyenneAnglais = $totalAnglais / $nbEleves;

    echo "Moyenne en maths : " . round($moyenneMaths, 2) . "/20.<br>";
    echo "Moyenne en français : " . round($moyenneFrancais, 2) . "/20.<br>";
    echo "Moyenne en anglais : " . round($moyenneAnglais, 2) . "/20.<br>";
?>