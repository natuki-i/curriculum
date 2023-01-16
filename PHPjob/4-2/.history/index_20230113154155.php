<?php
include_once("getData.php");

$errorMessage = "";
$signUpMessage = "";

$getdata = new getData();
$userdata = $post_data->getUserData();

var_dump($userdata);







