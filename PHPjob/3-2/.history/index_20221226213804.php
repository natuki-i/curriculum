<?php
$fruitsvalue = ["りんご" => 75, "みかん" => 50, "もも" => 200];
$fruitsnum = [4, 3, 15];

function Amount($value, $num ) {
    $amount = $value * $num;

}
Amount(75, 4);
echo "$amount.円です。";
?>
