<?php
    $form = [
        "nom" => "   ",
        "age" => "28",
        "email" => ""
    ];

    foreach ($form as $key => $value) {
        var_dump(isset($value));
        var_dump(empty($value));
        if ($key === "age" && is_numeric($value) && $value > 0) {
            echo "Ok";
        } else {
            echo "non ok";
        }
    }
?>