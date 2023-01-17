<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $getdata->getUserData();
$postdata = $getdata->getPostData();

var_dump(postdata);

foreach ($postdata as $row) {
    echo $row["id"];
    echo $row["title"];
    echo $row['category_no'];
    echo $row["comment"];
    echo $row["created"];
    echo '<br>';
}





