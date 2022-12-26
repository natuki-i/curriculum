<?php
// 例として、血液型を診断する条件分岐
$blood = 'B';
if($blood == 'A') {
  echo "A型です";
} elseif($blood == 'B') {
  echo "B型です";
} elseif($blood == 'O') {
  echo "O型です";
} elseif($blood == 'AB') {
  echo "AB型です";
 } else {
  echo "A/B/O/ABから選択してください";
}
?>
