<?php
session_start();
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }
    if (isset($_POST["send"]) && !empty($_POST["firstname"])) {
        $_SESSION['prenoms'][] = $_POST["firstname"];
    }
    if (isset($_POST["reset"])) {
        $_SESSION['prenoms'] = array();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname">
        <button type="submit" name="send">Envoi</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <table border=1 cellspacing=0 cellpadding=10>
        <thead>
            <th scope="col">Prénom</th>
        </thead>
        <br>
        <tbody>
            <?php
                foreach ($_SESSION['prenoms'] as $prenom) {
                    echo '<tr><td scope=row>' . htmlspecialchars($prenom) . '</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>