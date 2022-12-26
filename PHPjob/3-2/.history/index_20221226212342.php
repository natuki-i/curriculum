<?php
$fruitsvalue = ["apple" => 100, "orange" => 50, "peach" => 200];
var_dump($fruitsvalue);
function totalAmount($aplnum, $orgnum, $pchnum) {
    $aplamount = $fruitsvalue["apple"] * $aplnum;
    $orgamount = $fruitsvalue["orange"] * $orgnum;
    $pchamount = $fruitsvalue["peach"] * $pchnum;

    echo "りんごは.$aplamount.円です。";
    echo "みかんは.$orgamount.円です。";
    echo "ももは.$pchamount.円です。";
}

totalAmount(3, 3, 15)

?>
