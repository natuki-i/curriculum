<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $correct1 = $_POST['correct1'];
    $correct2 = $_POST['correct2'];
    $correct3 = $_POST['correct3'];
    $st_name = $_POST['st_name'];

    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function judge($answer, $correct)
    {
        if ($answer == $correct) {
            echo "正解！";
        } else {
            echo "残念・・・";
        }
    } ?>

    <p>
        <!--POST通信で送られてきた名前を表示-->
        <?php echo $st_name; ?>さんの結果は・・・？
    </p>

    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php
    judge($answer1, $correct1); ?>

    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php
    judge($answer2, $correct2); ?>

    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php
    judge($answer3, $correct3); ?>

</body>

</html>