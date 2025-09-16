<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqSalles = "SELECT * FROM salles ORDER BY capacite DESC;";
$sallesS = $pdo -> prepare($reqSalles);
$sallesS -> execute();
$tabSallesDesc = $sallesS -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellpadding=10 border=1 cellspacing=0 >
        <thead style=text-align:left;>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">ID de l'étage</th>
                <th scope="col">Capacité</th>
        </thead>
        <tbody>
            <?php foreach ($tabSallesDesc as $tabSallesDescent) { ?>
                <tr>
                    <td scope="row"><?php echo $tabSallesDescent['nom'] ?></td>
                    <td scope="row"><?php echo $tabSallesDescent['id_etage'] ?></td>
                    <td scope="row"><?php echo $tabSallesDescent['capacite'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>