<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" </head>

<body>
    <div class="header clearfix">
        <div class="h_logo">
            <img src="./image/4-2_logo.png">
        </div>
        <div class="h_right">
            echo "ようこそ"
            <div class="h_r_top">

            </div>
            <div class="h_r_bottom">

            </div>
        </div>
    </div>

    <div class="main clearfix">
    </div>

    <?php
    include_once("getData.php");

    $errorMessage = "";
    $signUpMessage = "";

    $getdata = new getData();
    $userdata = $getdata->getUserData();
    $postdata = $getdata->getPostData();

    var_dump($userdata);
    var_dump($postdata);

    foreach ($postdata as $row) {
        echo $row["id"];
        echo $row["title"];
        echo $row['category_no'];
        echo $row["comment"];
        echo $row["created"];
        echo '<br>';
    }

    ?>


</body>

</html>