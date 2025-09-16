<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqEtage = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id";
$etageS = $pdo -> prepare($reqEtage);
$etageS -> execute();
$tabEtage = $etageS -> fetchAll();

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
                <th scope="col">Nom de la salle</th>
                <th scope="col">Nom de l'étage</th>
        </thead>
        <tbody>
            <?php foreach ($tabEtage as $tabEtageClassed) { ?>
                <tr>
                    <td scope="row"><?php echo $tabEtageClassed['nom_salle'] ?></td>
                    <td><?php echo $tabEtageClassed['nom_etage'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>