<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqEt = "SELECT sum(capacite) AS capacite_totale FROM salles";
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
        <thead style=text-align:left;>
            <tr>
                <th scope="col">Capacité totale</th>
        </thead>
        <tbody>
            <?php foreach ($tabEt as $tabEts) { ?>
                <tr>
                    <td scope="row"><?php echo $tabEts['capacite_totale'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>