<?php
    if (isset($_GET["number"])) {
        $number = $_GET["number"];
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
        <label for="name">Indiquez un nombre :</label>
        <input type="text" name="number" id="name">

        <input type="submit" value="Envoyer">
    </form>
    <?php
        if ($number % 2 == 0) {
            echo "Le nombre est pair";
        } else {
            echo "Le nombre est impair";
        }
    ?>
</body>
</html>