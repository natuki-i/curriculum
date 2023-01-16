<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $getdata->getUserData();
$postdata = $getdata->getPostData();

var_dump($userdata);
var_dump($postdata);

foreach ($postdata as $value) {
    echo $value;
}





