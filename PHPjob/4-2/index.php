<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $getdata->getUserData();
$postdata = $getdata->getPostData();

var_dump($postdata);






