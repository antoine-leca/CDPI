<?php
    $commandes = [
        ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
        ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
        ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
        ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
    ];

    $totalHT = 0;
    $totalEnAttente = 0;

    foreach ($commandes as $commande) {
        $client = $commande["client"];
        $montant_ht = $commande["montant_ht"];
        $statut = $commande["statut"];

        echo "Commande de " . $client . " : " . $montant_ht . "€ HT, " . ($montant_ht * 1.20) . "€ TTC -- " . $statut . "<br>";
        
        $totalHT += $montant_ht;
        
        if ($statut == "en attente") {
            $totalEnAttente += $montant_ht;
        }
    }

    $totalTTC = $totalHT * 1.20;
    $totalEnAttenteTTC = $totalEnAttente * 1.20;
    $pourcentageEnAttente = ($totalHT > 0) ? ($totalEnAttente / $totalHT) * 100 : 0;

    echo "<br>";
    echo "CA Total HT : " . $totalHT . "€<br>";
    echo "CA Total TTC : " . $totalTTC . "€<br>";
    echo "<br>";
    echo "Montant en attente HT : " . $totalEnAttente . "€<br>";
    echo "Montant en attente TTC : " . $totalEnAttenteTTC . "€<br>";
    echo "Pourcentage du CA en attente : " . round($pourcentageEnAttente, 2) . "%<br>";
?>