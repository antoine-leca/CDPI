<?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
    echo "<pre>";
    var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Pseudo : </label>
        <input type="text" name="username" id="name">

        <label for="mdp">Mot de passe : </label>
        <input type="mdp" name="password" id="mdp">

        <input type="submit" value="Envoyer">
    </form>
    <?php
        if ($username == "John" && $password == "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    ?>
</body>
</html>