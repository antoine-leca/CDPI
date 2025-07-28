<?php
    $modules = [
        [
            "nom" => "Module 1 - Introduction à PHP", 
            "recap" => "Premiers pas avec PHP : affichage de texte avec echo, structure de base d'un script PHP.",
            "fichiers" => ["Hello World" => "1_hello_world.php"]
        ],
        [
            "nom" => "Module 2 - Variables et constantes", 
            "recap" => "Déclaration et utilisation des variables, définition de constantes avec const, concaténation de chaînes.",
            "fichiers" => [
                "Présentation personnelle" => "2_me.php", 
                "Calcul de prix" => "2_prix.php", 
                "Tests variables" => "2_test.php"
            ]
        ],
        [
            "nom" => "Module 3 - Opérateurs", 
            "recap" => "Opérateurs arithmétiques (+, -, *, /, %), opérateurs de comparaison (==, ===, !=, <, >), opérateurs logiques (&&, ||, xor), opérateurs d'affectation (+=, -=, *=, /=).",
            "fichiers" => [
                "Opérations de base" => "3-1_nombres.php", 
                "Comparaisons" => "3-2_nombres.php", 
                "Affectations simples" => "3-3_affectations.php", 
                "Affectations avancées" => "3-4_affectations.php"
            ]
        ],
        [
            "nom" => "Module 4 - Structures conditionnelles", 
            "recap" => "Instructions if/elseif/else, switch/case, match, opérateur ternaire (?:), gestion des conditions multiples.",
            "fichiers" => [
                "Conditions if/else" => "4-1_conditions.php", 
                "Conditions multiples" => "4-2_conditions.php", 
                "Switch/case" => "4-3_conditions.php", 
                "Opérateur ternaire" => "4-4_conditions.php", 
                "Match" => "4-5_conditions.php"
            ]
        ],
        [
            "nom" => "Module 5 - Boucles", 
            "recap" => "Boucles while, do-while et for, création de motifs avec des boucles imbriquées, calculs itératifs.",
            "fichiers" => [
                "Boucle while" => "5-1_boucles.php", 
                "Boucle for" => "5-2_boucles.php", 
                "Boucles imbriquées" => "5-3_boucles.php", 
                "Motifs géométriques" => "5-4_boucles.php", 
                "Calculs itératifs" => "5-5_boucles.php"
            ]
        ],
        [
            "nom" => "Module 6 - Tableaux", 
            "recap" => "Tableaux indexés et associatifs, manipulation avec array_push(), foreach, count(), array_sum(), tableaux multidimensionnels, calculs statistiques.",
            "fichiers" => [
                "Tableaux indexés" => "6-1_tableaux.php", 
                "Tableaux associatifs" => "6-2_tableaux.php", 
                "Manipulation de tableaux" => "6-3_tableaux.php", 
                "Foreach et parcours" => "6-4_tableaux.php", 
                "Tableaux multidimensionnels" => "6-5_tableaux.php", 
                "Calculs statistiques" => "6-6_tableaux.php"
            ]
        ],
        [
            "nom" => "Module 7 - Fonctions", 
            "recap" => "Création et appel de fonctions, paramètres et valeurs de retour, fonctions avec et sans paramètres, portée des variables, fonctions de calcul.",
            "fichiers" => [
                "Fonctions de base" => "7-1_fonctions.php", 
                "Paramètres et retour" => "7-2_fonctions.php", 
                "Fonctions de calcul" => "7-3_fonctions.php", 
                "Portée des variables" => "7-4_fonctions.php", 
                "Fonctions avancées" => "7-5_fonctions.php", 
                "Fonctions utilitaires" => "7-6_fonctions.php"
            ]
        ],
        [
            "nom" => "Module 8 - Manipulation de données", 
            "recap" => "Fonctions de validation (is_numeric(), isset(), empty()), manipulation de chaînes (explode(), trim()), filtrage et transformation de données.",
            "fichiers" => [
                "Validation de données" => "8-1_-.php", 
                "Manipulation de chaînes" => "8-2_-.php", 
                "Filtrage et transformation" => "8-3_-.php"
            ]
        ],
        [
            "nom" => "Module 9 - Superglobales et formulaires", 
            "recap" => "Variables superglobales POST et GET, traitement des formulaires HTML, validation des données utilisateur, hachage de mots de passe avec password_hash() et password_verify().",
            "fichiers" => [
                "Introduction superglobales" => "9-1_superglobales.php", 
                "Formulaires GET" => "9-2_superglobales.php", 
                "Formulaires POST" => "9-3_superglobales.php", 
                "Validation de données" => "9-4_superglobales.php", 
                "Hachage mot de passe" => "9-5_superglobales.php", 
                "Authentification" => "9-6_superglobales.php"
            ]
        ],
        [
            "nom" => "Module 10 - Sessions", 
            "recap" => "Gestion des sessions avec session_start(), authentification des utilisateurs, protection de pages, redirection, session_unset() et session_destroy().",
            "fichiers" => [
                "Page de connexion" => "10-1_sessions_connexion.php", 
                "Tableau de bord" => "10-1_sessions_dashboard.php", 
                "Déconnexion" => "10-1_sessions_logout.php", 
                "Échec de connexion" => "10-1_sessions_failed.php"
            ]
        ],
        [
            "nom" => "Exercices pratiques", 
            "recap" => "Projets complets : simulation de tournoi sportif avec gestion des équipes et classements, système de gestion de commandes de potions avec calculs financiers avancés.",
            "fichiers" => [
                "Tournoi sportif" => "EX_1.php", 
                "Gestion de commandes" => "EX_2.php"
            ]
        ]
    ];
?>