<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqEt = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance>='1998-01-01' AND naissance<='2018-12-31'";
$etS = $pdo -> prepare($reqEt);
$etS -> execute();
$tabEt = $etS -> fetchAll();

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
        <caption>Liste d'éleves nés entre 1998 et 2018</caption>
        <thead style=text-align:left;>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de naissance</th>
        </thead>
        <tbody>
            <?php foreach ($tabEt as $tabEtClassed) { ?>
                <tr>
                    <td scope="row"><?php echo $tabEtClassed['prenom'] ?></td>
                    <td><?php echo $tabEtClassed['nom'] ?></td>
                    <td><?php echo $tabEtClassed['naissance'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>