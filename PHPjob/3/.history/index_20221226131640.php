<?php
$name = '';
$pw = 'pass';
if($name == 'taro' && $pw == 'pass') {
  echo "ログイン成功です";
} elseif($name == 'taro') {
  echo "パスワードが間違っています";
} elseif($pw == 'pass') {
  echo "名前が間違っています";
 } else {
  echo "入力情報が間違っています";
}
?>
