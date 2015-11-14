<?php
require_once('function.php');
require_once('dbconnect.php');


//Get information
$username = $_SESSION["username"];
$page = $_GET['page'];
$getDevice = $_GET['device'];
if($getDevice == all OR $getDevice == NULL){
	$getCategory = "All Devices";
}elseif ($getDevice == "iphone") {
	$getCategory = "iPhone Device";
}elseif ($getDevice == "ipad") {
	$getCategory = "iPad Device";
}elseif ($getDevice == "android") {
	$getCategory = "Android device";
}

?>