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

<p>お疲れ様です
    <!--POST通信で送られてきた名前を出力--><?php echo $st_name; ?>さん
</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<form action="answer.php" method="post">
    <?php
    $answer1 = ["80", "22", "20", "21"];
    foreach ($answer1 as $value) { ?>
        <input type="radio">
    <?php echo $value;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    $answer2 = ["PHP", "Python", "JAVA", "HTML"];
    foreach ($answer2 as $value) { ?>
        <input type="radio">
    <?php echo $value;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
    $answer3 = ["join", "select", "insert", "update"];
    foreach ($answer3 as $value) { ?>
        <input type="radio">
    <?php echo $value;
    }
    ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <?php
    $port = $_SERVER["SERVER_PORT"];
    ?>
    <input type="hidden" name="port" value=<?php printf($port) ?> />
    <input type="hidden" name="lang" value="HTML" />
    <input type="hidden" name="mysql" value="select" />
    <input type="hidden" name="st_name" value=<?php printf($st_name) ?> />
    <br>
    <input type="submit" value="回答する" />
</form>

</body>

</html>