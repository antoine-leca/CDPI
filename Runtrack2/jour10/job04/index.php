<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqEt = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
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
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Genre</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabEt as $tabEts) { ?>
                <tr>
                    <td scope="row"><?php echo $tabEts['prenom'] ?></td>
                    <td><?php echo $tabEts['nom'] ?></td>
                    <td><?php echo $tabEts['naissance'] ?></td>
                    <td><?php echo $tabEts['sexe'] ?></td>
                    <td><?php echo $tabEts['email'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>