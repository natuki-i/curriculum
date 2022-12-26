<?php
$fruitsvalue = ["りんご" => 75, "みかん" => 50, "もも" => 200];
$fruitsnum = [4, 3, 15];

function Amount($value, $num) {
    $amount = $value * $num;
    echo "$amount";
}
// function Amount($value, $num) {
//     $amount = $value * $num;
//     echo "$amount";
//     echo '<br>';
// }
// Amount(75, 4);

foreach($fruitsvalue as $key => $value){
    $n = 0;
    Amount($value, $fruitsnum[$n]);
    $n++;
    echo $amount;
    echo '<br>';

}





echo $fruitsvalue["みかん"];
echo $fruitsnum[0];
?>
