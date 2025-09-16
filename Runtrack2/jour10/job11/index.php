<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqSalles = "SELECT AVG(capacite) AS moyenne_capacite FROM salles";
$SallesS = $pdo -> prepare($reqSalles);
$SallesS -> execute();
$tabSalles = $SallesS -> fetchAll();

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
                <th scope="col">Capacité moyenne</th>
        </thead>
        <tbody>
            <?php foreach ($tabSalles as $tabSallesAVG) { ?>
                <tr>
                    <td scope="row"><?php echo $tabSallesAVG['moyenne_capacite'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>