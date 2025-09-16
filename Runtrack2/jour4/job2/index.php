<?php
    if (isset($_GET['name']) && isset($_GET['mail'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
    }
    echo "<pre>";
    var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name">

        <label for="mail">Mail : </label>
        <input type="mail" name="mail" id="mail">

        <input type="submit" value="Envoyer">
    </form>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <th>Argument</th>
            <th>Valeur</th>
        </thead>
        <tbody>
            <?php
                foreach ($_GET as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>