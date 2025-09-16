<?php
session_start();

if (!isset($_SESSION["tab"])) {
    $_SESSION["tab"] = [
        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];
    $_SESSION["p"] = "X";
}

if (isset($_POST["reset"])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$msg = null;

if (isset($_POST["row"]) && isset($_POST["col"])) {
    $row = $_POST["row"];
    $col = $_POST["col"];
    if (is_numeric($row) && is_numeric($col) && $row >= 0 && $row < 3 && $col >= 0 && $col < 3) {
        if ($_SESSION["tab"][$row][$col] === "-") {
            $_SESSION["tab"][$row][$col] = $_SESSION["p"];
            if (verifV($_SESSION["tab"], $_SESSION["p"])) {
                $msg = $_SESSION["p"] . " a gagné !";
                session_destroy();
            } elseif (matchNul($_SESSION["tab"])) {
                $msg = "Match nul !";
                session_destroy();
            } else {
                $_SESSION["p"] = ($_SESSION["p"] === "X") ? "O" : "X";
            }
        }
    }
}

function verifV($tab, $p) {
    for ($i = 0; $i < 3; $i++) {
        if ($tab[$i][0] === $p && $tab[$i][1] === $p && $tab[$i][2] === $p) return true;
        if ($tab[0][$i] === $p && $tab[1][$i] === $p && $tab[2][$i] === $p) return true;
    }
    if ($tab[0][0] === $p && $tab[1][1] === $p && $tab[2][2] === $p) return true;
    if ($tab[2][0] === $p && $tab[1][1] === $p && $tab[0][2] === $p) return true;
    return false;
}

function matchNul($tab) {
    foreach ($tab as $row) {
        if (in_array("-", $row)) return false;
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Morpion</title>
</head>
    <body>

    <h2>Morpion</h2>

        <table>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++) : ?>
                        <td>
                            <?php if ($_SESSION['tab'][$i][$j] === '-') : ?>
                                <form method="post">
                                    <input type="hidden" name="row" value="<?= $i ?>">
                                    <input type="hidden" name="col" value="<?= $j ?>">
                                    <input type="submit" value="-">
                                </form>
                            <?php else : ?>
                                <?= $_SESSION['tab'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <?php if (isset($msg)): ?>
            <p class="winner"><?= htmlspecialchars($msg); ?></p>
        <?php endif; ?>

        <form method="post">
            <button type="submit" name="reset" class="reset">Recommencer</button>
        </form>

    </body>
</html>