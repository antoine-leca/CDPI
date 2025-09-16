<?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $str_len = 0;
    $voyelles_len = 0;
    $dic = ["consonnes" => 0, "voyelles" => 0];
    while (isset($str[$str_len])) {
        $str_len++;
    }
    while (isset($voyelles[$voyelles_len])) {
        $voyelles_len++;
    }
    for ($val = 0 ; $val < $str_len ; $val++) {
        $isvoyelle = false;
        for ($i = 0; $i < $voyelles_len; $i++) {
            if ($str[$val] === $voyelles[$i]) {
                $isvoyelle = true;
                break;
            }
        }
        if (($str[$val] >= "a" && $str[$val] <= "z") || ($str[$val] >= "A" && $str[$val] <= "Z"))
            if ($isvoyelle) {
                $dic["voyelles"]++;
            } else {
                $dic["consonnes"]++;
            }
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
            <tr>
                <td><?php echo $dic["consonnes"]; ?></td>
                <td><?php echo $dic["voyelles"]; ?></td>
            </tr>
        </table>
    </body>
</html>