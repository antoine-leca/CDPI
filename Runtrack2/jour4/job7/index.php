<?php
    $largeur = 0;
    $hauteur = 0;
    $largeur_len = 0;
    $hauteur_len = 0;

    if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
        
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
        <label for="name">Largeur :</label>
        <input type="text" name="largeur" id="largeur">

        <label for="mdp">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>