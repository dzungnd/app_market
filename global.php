<?php
require_once('function.php');
require_once('dbconnect.php');


//Get information
$username = $_SESSION["username"];
$page = $_GET['page'];
//Get user's information
$get_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `username`='$username'");
while($row = mysqli_fetch_array($get_user)){
	$userId = $row['id'];
	$userEmail = $row['email'];
	$createDate = $row['create_date'];
	$userRole = $row['role'];
	$userCredit = $row['credits'];
}
?>