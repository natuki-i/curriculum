<?php
$fruitsvalue = ["りんご" => 75, "みかん" => 50, "もも" => 200];
$fruitsnum = [4, 3, 15];

function amount($aplnum, $orgnum, $pchnum) {
    $aplamount = $fruitsvalue["apple"] * $aplnum;
    $orgamount = $fruitsvalue["orange"] * $orgnum;
    $pchamount = $fruitsvalue["peach"] * $pchnum;

    echo "りんごは.$aplamount.円です。";
    echo "みかんは.$orgamount.円です。";
    echo "ももは.$pchamount.円です。";
}

totalAmount(3, 3, 15)

?>
