<?php
    session_start();

    if (isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 0; 
    } 
    elseif (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    else {
        $_SESSION['nbvisites']++; 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites'];?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>