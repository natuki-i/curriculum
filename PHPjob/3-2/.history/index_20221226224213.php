<?php
$fruitsvalue = ["りんご" => 75, "みかん" => 50, "もも" => 200];
$fruitsnum = [4, 3, 15];
$amount = 0;
$n = 0;

function Amount($value, $num) {
    return $amount = $value * $num;
}
// function Amount($value, $num) {
//     $amount = $value * $num;
//     echo "$amount";
//     echo '<br>';
// }
// Amount(75, 4);

foreach($fruitsvalue as $key => $value){
    Amount($value, $fruitsnum[$n]);
    $n++;
    echo $amount;
    echo '<br>';

}





?>
