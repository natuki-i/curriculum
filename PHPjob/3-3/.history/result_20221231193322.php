<?php
$numbers = $_POST['numbers'];
$strlen = strlen($numbers);
$posi = mt_rand(0, $strlen - 1);
$num = substr($numbers, $posi, 1);
$date = date("Y/m/d", time());

echo "{$date}の運勢は";
echo '<br>';
echo "選ばれた数字は{$num}";
echo '<br>';
if ($num == 0) {
    echo "凶";
} else if ($num <= 3) {
    echo "小吉";
} else if ($num <= 6) {
    echo "中吉";
} else if ($num <= 8) {
    echo "吉";
} else {
    echo "大吉";
}
