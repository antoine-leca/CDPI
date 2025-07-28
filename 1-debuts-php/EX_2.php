<?php 
    $commandes = [
        ['id' => 1,'client' => 'Harry', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 2,'client' => 'Hermione','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 3,'client' => 'Ron', 'potion' => 'Courage','prix' => 29.99, 'etat' => 'préparation'],
        ['id' => 4,'client' => 'Drago', 'potion' => 'Puissance','prix' => 59.00, 'etat' => 'payé'],
        ['id' => 5,'client' => 'Luna','potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
        ['id' => 6,'client' => 'Neville', 'potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 7,'client' => 'Ginny', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'préparation'],
        ['id' => 8,'client' => 'Sirius','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
        ['id' => 9,'client' => 'Remus', 'potion' => 'Loup-Garou', 'prix' => 70.00, 'etat' => 'impayé'],
        ['id' => 10, 'client' => 'Tonks', 'potion' => 'Caméléon', 'prix' => 56.20, 'etat' => 'préparation'],
        ['id' => 11, 'client' => 'Fred','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 12, 'client' => 'George','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 13, 'client' => 'Dumbledore','potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'payé'],
        ['id' => 14, 'client' => 'Hagrid','potion' => 'Puissance','prix' => 59.00, 'etat' => 'préparation'],
        ['id' => 15, 'client' => 'McGonagall','potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
        ['id' => 16, 'client' => 'Cho', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'impayé'],
        ['id' => 17, 'client' => 'Seamus','potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
        ['id' => 18, 'client' => 'Dean','potion' => 'Courage','prix' => 29.99, 'etat' => 'payé'],
        ['id' => 19, 'client' => 'Firenze', 'potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 20, 'client' => 'Krum','potion' => 'Courage','prix' => 29.99, 'etat' => 'impayé'],
        ['id' => 21, 'client' => 'Fleur', 'potion' => 'Charme', 'prix' => 38.80, 'etat' => 'payé'],
        ['id' => 22, 'client' => 'Bill','potion' => 'Mémoire','prix' => 39.50, 'etat' => 'payé'],
        ['id' => 23, 'client' => 'Molly', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'préparation'],
        ['id' => 24, 'client' => 'Arthur','potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'payé'],
        ['id' => 25, 'client' => 'Percy', 'potion' => 'Concentration','prix' => 54.75, 'etat' => 'payé'],
        ['id' => 26, 'client' => 'Lavande', 'potion' => 'Rêves','prix' => 44.00, 'etat' => 'impayé'],
        ['id' => 27, 'client' => 'Trelawney', 'potion' => 'Sérénité', 'prix' => 89.99, 'etat' => 'préparation'],
        ['id' => 28, 'client' => 'Kingsley','potion' => 'Invisibilité', 'prix' => 49.99, 'etat' => 'payé'],
        ['id' => 29, 'client' => 'Barty', 'potion' => 'Métamorphose', 'prix' => 62.00, 'etat' => 'impayé'],
        ['id' => 30, 'client' => 'Dolores', 'potion' => 'Explosion','prix' => 27.99, 'etat' => 'payé'],
    ];
    $coutsProduction = [
        'Invisibilité'   => 15.00,
        'Explosion'      => 10.00,
        'Mémoire'        => 14.00,
        'Courage'        => 12.00,
        'Puissance'      => 18.00,
        'Rêves'          => 13.00,
        'Charme'         => 11.00,
        'Métamorphose'   => 20.00,
        'Loup-Garou'     => 22.00,
        'Caméléon'       => 16.00,
        'Sérénité'       => 25.00,
        'Concentration'  => 17.00,
    ];
    
    const TAUX_TVA = 0.20;
    $nbr_commandes = 0;
    $nbr_commandes_impayees = 0;
    $nbr_commandes_prep = 0;
    $clients_uniques = [];
    $CA_total = 0;
    $CA_total_impaye = 0;
    $CA_total_prep = 0;
    $Benefice_total = 0;
    $stats_par_potion = [];

    foreach ($commandes as $commande => $propC) {

        $nbr_commandes++;

        $client = $propC["client"];
        if (!in_array($client, $clients_uniques)) {
            $clients_uniques[] = $client;
        }

        $nbr_clients_uniques = count($clients_uniques);

        $CA_par_commande = 0;
        $CA_par_commande_impayee = 0;
        $CA_par_commande_prep = 0;

        switch ($propC["etat"]) {
            case 'payé':
                $CA_par_commande = ($propC["prix"] - ($propC["prix"] * TAUX_TVA));
                $CA_total += $CA_par_commande;
                break;
            case 'impayé':
                $nbr_commandes_impayees++;
                $CA_par_commande_impayee = ($propC["prix"] - ($propC["prix"] * TAUX_TVA));
                $CA_total_impaye += $CA_par_commande_impayee;
                break;
            case 'préparation':
                $nbr_commandes_prep++;
                $CA_par_commande_prep = ($propC["prix"] - ($propC["prix"] * TAUX_TVA));
                $CA_total_prep += $CA_par_commande_prep;
                break;
            default:
                # code...
                break;
        }

        $potion_actuelle = $propC["potion"];
        if (!isset($stats_par_potion[$potion_actuelle])) {
            $stats_par_potion[$potion_actuelle] = [
                'quantite' => 0,
                'prix_unitaire' => $propC["prix"], 
                'cout_unitaire' => $coutsProduction[$potion_actuelle],
                'ca_total' => 0,
                'cout_total' => 0,
                'benefice' => 0
            ];
        }
        $stats_par_potion[$potion_actuelle]['quantite']++;
    }
?>