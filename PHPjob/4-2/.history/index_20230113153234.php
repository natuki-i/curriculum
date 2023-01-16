<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData(pdo);
$getdata->getUserData();
var_dump($getdata);







