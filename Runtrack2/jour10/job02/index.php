<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqSalles = "SELECT * FROM salles";
$sallesS = $pdo -> prepare($reqSalles);
$sallesS -> execute();
$tabSalles = $sallesS -> fetchAll();

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
                <th scope="col">Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabSalles as $salle) { ?>
                <tr>
                    <td scope="row"><?php echo $salle['nom'] ?></td>
                    <td><?php echo $salle['capacite'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>