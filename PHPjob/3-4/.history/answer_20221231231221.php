<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$port = $_POST['port'];
$lang = $_POST['lang'];
$mysql = $_POST['mysql'];
$st_name = $_POST['st_name'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

$correct = "正解！";
$wrong = "残念・・・";

if ($answer1 == $port){
    $result1 = $correct;
} else{
    $result1 = $wrong;
}

if ($answer2 == $lang){
    $result2 = $correct;
} else{
    $result2 = $wrong;
}

if ($answer3 == $mysql){
    $result3 = $correct;
} else{
    $result3 = $wrong;
}
?>
<p>
    <!--POST通信で送られてきた名前を表示-->
    <?php echo $st_name; ?>さんの結果は・・・？
</p>
<p>①の答え</p><br>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result1; ?>

<p>②の答え</p><br>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result2; ?>

<p>③の答え</p><br>
<!--作成した関数を呼び出して結果を表示-->
<?php echo $result3; ?>

<?php var_dump($_POST) ?>