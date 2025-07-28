<?php
    $produits = [
        ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
        ["nom" => "Casquette", "prix" => 12, "stock" => 5],
        ["nom" => "Pull", "prix" => 25, "stock" => 8]
    ];

    echo "Il y a " . $produits[1]["stock"] . " casquettes en stock.";

    $produits[3]["nom"] = "Veste";
    $produits[3]["prix"] = 40;
    $produits[3]["stock"] = 25;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
</head>
<body>
    <table class="table table-zebra w-5/10">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>CA potentiel (PxS)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($produits as $key => $value) {
                    echo 
                    "<tr>" . 
                    "<td>" . $value["nom"] . "</td>" . 
                    "<td>" . $value["prix"] . "</td>" .
                    "<td>" . $value["stock"] . "</td>" .
                    "<td>" . ($value["prix"] * $value["stock"]) . "</td>" .
                    "</tr>";
                } 
                ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>