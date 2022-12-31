<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
//POST送信で送られてきた名前を受け取って変数を作成

//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

$st_name = $_POST['st_name'];



?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $st_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
'<br>'
<form action="answer.php" method="post">
<?php
        $question1 = ["80", "22", "20", "21"];
        foreach ($fruits as $value) { ?>
            <input type="radio">
            <?php echo $value;
        }


    お名前：<input type="text" name="my_name" />
    '<br>'
    ご希望商品：
    <input type="radio" name="prize" value="A賞">A賞
    <input type="radio" name="prize" value="B賞">B賞
    <input type="radio" name="prize" value="C賞">C賞
    '<br>'

    <input type="submit" value="申込" />
</form>





<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->


</body>

</html>