<?php
    // variables simples
    $myBool = true;
    $myInt = 42;
    $myString = "LaPlateforme";
    $myFloat = 3.14;

    $variables = [
        ["boolean", "myBool", $myBool],
        ["entier", "myInt", $myInt],
        ["chaîne de caractères", "myString", $myString],
        ["flottant", "myFloat", $myFloat]
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des variables PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?= $var[0] ?></td>
                    <td><?= $var[1] ?></td>
                    <td>
                        <?php 
                        // Pour afficher correctement les booléens
                        if (is_bool($var[2])) {
                            echo $var[2] ? "true" : "false";
                        } else {
                            echo $var[2];
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
