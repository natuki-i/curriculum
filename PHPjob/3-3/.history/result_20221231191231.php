<?php
$numbers = $_POST['number'];
$strlen = strlen($numbers);
$posi = mt_rand(0, $strlen -1);
$num = substr($numbers, $posi, 1);
$date = date("Y/m/d", time());

echo "{$date}の運勢は";
'<br>';
echo "選ばれた数字は{$num}";
if ($num == 0 ) {

}

?>