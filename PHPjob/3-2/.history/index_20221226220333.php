<?php
$fruitsvalue = ["りんご" => "75", "みかん" => "50", "もも" => "200"];
$fruitsnum = ["4", "3", "15"];

echo  $fruitsvalue["りんご"];
echo  $fruitsnum[0];
function Amount($value, $num) {
    $amount = $value * $num;

    echo '<br>';
}
Amount(75, 4);

?>
