<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" </head>

<body>
    <?php
    include_once("getData.php");

    $errorMessage = "";
    $signUpMessage = "";

    $getdata = new getData();
    $userdata = $getdata->getUserData();
    $postdata = $getdata->getPostData();

    var_dump($userdata);
    var_dump($postdata);

function category_meaning(&$row['category_no']){
    $i *= $row['category_no';
    switch($i){
        case 1:
            echo '食事';
            break;
        case 2:
             echo '旅行';
             break;
             default:
             echo 'その他';
    }
}


    echo '<br>';
    echo $userdata['last_name'] . $userdata['first_name'];
    echo '<br>';

    /*     foreach ($postdata as $row) {
        echo $row["id"];
        echo $row["title"];
        echo $row['category_no'];
        echo $row["comment"];
        echo $row["created"];
        echo '<br>';
    } */

    ?>

    <div class="header">
        <div class="h_logo">
            <img src="./image/4-2_logo.png">
        </div>
        <div class="h_right">
            <div class="h_r_top">
                <div class="h_r_phr">ようこそ <?php echo $userdata['last_name'] . $userdata['first_name']; ?> さん</div>
            </div>
            <div class="h_r_bottom">
                <div class="h_r_phr">最終ログイン日： <?php echo $userdata['last_login']; ?></div>
            </div>
        </div>
    </div>

    <table class="post_table">
        <tr class="headline">
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
        <?php
        foreach ($postdata as $row) {
        ?>

            <tr class="posts">
                <!--  <td><?php print(htmlspecialchars($row['id'])); ?> </td>-->
                <td><?php echo $row['id']; ?> </td>
                <td><?php echo $row['title']; ?> </td>
                <td><?php echo $row['category_no']; ?> </td>
                <td><?php echo $row['comment']; ?> </td>
                <td><?php echo $row['created']; ?> </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div class="footer">
        <div class="f_fr">Y&I group.inc</div>
        </div>

</body>

</html>