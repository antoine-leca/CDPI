<?php
    $loisirs = $_POST["loisirs"];
    $countLoisirs = count($loisirs);

    if (isset($loisirs) && is_array($loisirs) && $countLoisirs >= 2) {
        echo "Au moins deux loisirs ont été cochées<br>";
        echo "Vous avez sélectionné les loisirs suivants : ";
        echo "<ul>";
            for ($i = 0 ; $i < $countLoisirs ; $i++) {
                echo "<li>" . $loisirs[$i] . "</li>";
            }
        echo "</ul>";
    } else {
        echo "Veuillez selectionner au moins deux loisirs";
    }
?>