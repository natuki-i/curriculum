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
    echo $userdata['last_name'].$userdata['first_name'];
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
                <div class="h_r_phr">ようこそ <?php echo $userdata['last_name'].$userdata['first_name']; ?> さん</div>
            </div>
            <div class="h_r_bottom">
                <div class="h_r_phr">最終ログイン日： <?php echo $userdata['last_login']; ?></div>
            </div>
        </div>
    </div>


    if(mysqli_num_rows($result) > 0)
 {
  $table = '
   <table border=1>
                    <tr>
                         <th>記事ID</th>
                         <th>タイトル</th>
                         <th>カテゴリ</th>
                         <th>本文</th>
                         <th>登校日</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $table .= '
    <tr>
                        <td>'.$row["PersonID"].'</td>
                         <td>'.$row["FirstName"].'</td>
                         <td>'.$row["LastName"].'</td>
                         <td>'.$row["City"].'</td>


                    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }



    <div class="main clearfix">
    </div>




</body>

</html>