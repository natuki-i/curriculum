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

    echo '<br>';
    echo $userdata['last_name'].['first_name'];
    echo array_slice($userdata, 'last_name','first_name');
    echo '<br>';

    foreach ($postdata as $row) {
        echo $row["id"];
        echo $row["title"];
        echo $row['category_no'];
        echo $row["comment"];
        echo $row["created"];
        echo '<br>';
    }

    ?>

    <div class="header clearfix">
        <div class="h_logo">
            <img src="./image/4-2_logo.png">
        </div>
        <div class="h_right">
            <div class="h_r_top">
                <div class="h_r_phr">ようこそ </div>

            </div>
            <div class="h_r_bottom">

            </div>
        </div>
    </div>

    <div class="main clearfix">
    </div>




</body>

</html>