<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $getdata->getUserData();
$postdata = array($getdata->getPostData());

var_dump($userdata);
var_dump($postdata);






