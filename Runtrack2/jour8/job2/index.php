<?php 
    if (isset($_POST['reset']) || !isset($_COOKIE['nbvisites'])) {
        setcookie('nbvisites', 0, time() - 3600); 
        $nbvisites = 0;
    } else {
        if (isset($_COOKIE['nbvisites'])) {
            $nbvisites = $_COOKIE['nbvisites'] + 1;
        }
        else {
            $nbvisites = 1;
        }

        setcookie('nbvisites', $nbvisites, time() + 3600); 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites;?> </p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>