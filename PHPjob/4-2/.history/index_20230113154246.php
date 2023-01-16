<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $getdata->getUserData();

var_dump($userdata);







