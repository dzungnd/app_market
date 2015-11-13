<?php
include_once('dbconnect.php');
//-----------------------------------------------------------------------------------------------//
//	                       AppStore v2.0 Code by Dzungnd - alvis1691@gmail.com							 //
//-----------------------------------------------------------------------------------------------//
error_reporting(E_ALL ^ E_NOTICE);
//include DB


// Check Login
function checkLogin($username, $password, $connection)
	{       
            $password = md5($password);
      
            if (mysqli_connect_errno()) // Check connection
            {   echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
             
        $user_sql = "Select * From users Where username = '$username' And password = '$password'";
		$user_query = mysqli_query($connection, $user_sql);

		if(mysqli_num_rows($user_query) != 0)
		{       
			$_SESSION["username"] = $username;
			header('Location: home.php');

		}
		else
			echo "<div class=\"app-alerts alert alert-danger fade in\"><center>Wrong username or password!</center></div>";
		
	}
//Echo user information
function userInfo($info, $connection){
	$username = $_SESSION["username"];
	//Get user's information
	$get_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `username`='$username'");
while($row = mysqli_fetch_array($get_user)){
	$userName = $row['username'];
	$userId = $row['id'];
	$userEmail = $row['email'];
	$createDate = $row['create_date'];
	$userRoleId = $row['role'];
	$userCredit = $row['credits'];
	$userPassword = $row['password'];
	}
$getRole = mysqli_query($connection, "SELECT * FROM `user_role` WHERE `id`='$userRoleId'");
while($role = mysqli_fetch_array($getRole)){
	$userRole = $role['role'];
}
if($info == "userId" ){
	return $userId;
	}
elseif ($info == "userEmail") {
	return $userEmail;
	}
elseif ($info == "createDate") {
	return $createDate;
	}
elseif ($info == "userRole") {
	return $userRole;
	}
elseif ($info == "userCredit") {
	return $userCredit;
	}
elseif ($info == "userName") {
	return $userName;
	}
elseif ($info = "userPassword") {
	return $userPassword;
	}							
}
//Get credit history
function creditHis($info, $connection){;
	$username = $_SESSION['username'];
	$getCredit = mysqli_query($connection, "SELECT * FROM `credit_history` WHERE `credit_user`='$username' ORDER BY id DESC LIMIT 10");
	$credits = array();
while($row = mysqli_fetch_array($getCredit)){
	$creditName = $row['credit_name'];
	$creditUser = $row['credit_user'];
	$creditDate = $row['credit_date'];
	$creditId = $row['credit_id'];
	$credit = $row['credit'];
	$credits[] = array(
		"name" => $creditName,
		"time" => $creditDate,
		"credit" => $credit,
	);
}

if($info == "creditName"){
	return $creditName;
}
elseif ($info == "creditDate") {
	return $creditDate;
}
elseif ($info == "credit") { 
	return $credit;
}
elseif ($info == "arr") { 
	return $credits;
}
}
//Time ago
function timeAgo($from){
	$now = time();
	$strfrom = strtotime($from);
	$timeAgo = abs($now - $strfrom);
return floor($timeAgo/60);	
}
//Show apps list
function showApps($id, $info, $connection){
	if($id == NULL){
		$getApps = mysqli_query($connection, "SELECT * FROM `apps`");
	}else{
		$getApps = mysqli_query($connection, "SELECT * FROM `apps` WHERE `id`='$id'");	
	}
	$appList = array();
	while($row = mysqli_fetch_array($getApps)){
		$appId = $row['id'];
		$appName = $row['name'];
		$appTrack = $row['tracking_url'];
		$appImg = $row['image_url'];
		$appCountLike = $row['count_like'];
		$appCountDownload = $row['download'];
		$appNetwork = $row['network'];
		$appAddDate = $row['add_date'];
		$appCredit = $row['apps_credit'];
		$appRank = $row['rank'];
		$appDevice = $row['device'];
		$appDes = $row['description'];
		$appList[] = array(
			"id" => $appId,
			"name" => $appName,
			"url" => $appTrack,
			"img" => $appImg,
			"like" => $appCountLike,
			"download" => $appCountDownload,
			"network" => $appNetwork,
			"date" => $appAddDate,
			"credit" => $appCredit,
			"rank" => $appRank,
			"device" => $appDevice,
			"des" => $appDes,
 			);
	}
	if($info == "id" ){
		return $appId;
	}elseif ($info == "name") {	
		return $appName;
	}elseif ($info == "url") {	
		return $appTrack;
	}elseif ($info == "img") {	
		return $appImg;
	}elseif ($info == "like") {	
		return $appCountLike;
	}elseif ($info == "download") {	
		return $appCountDownload;
	}elseif ($info == "network") {	
		return $appNetwork;
	}elseif ($info == "date") {	
		return $appAddDate;
	}elseif ($info == "credit") {	
		return $appCredit;
	}elseif ($info == "rank") {	
		return $appRank;
	}elseif ($info == "device") {	
		return $appDevice;
	}elseif ($info == "arr") {	
		return $appList;	
	}elseif ($info == "des") {	
		return $appDes;	
	}

}

// Changepass
function changePass($newPass, $currentPass, $retypePass, $connection){
	$currentPassword = userInfo("userPassword", $connection);
	$currentId = userInfo("userId", $connection);
	if(md5($currentPass) == $currentPassword){
		if($newPass == $retypePass){
			$md5Newpass = md5($newPass);
			mysqli_query($connection, "UPDATE `users` SET `password`='$md5Newpass' WHERE `id`='$currentId'");
			echo "<script type='text/javascript'>alert('Done!');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Wrong retype password!');</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('Wrong current password!');</script>";
	} 
}

//Add users
function addUsers($addUsername, $addUserpass, $addUseremail, $connection){
	$createDate = date("Y-m-d H:i:s", time());
	$md5addUserpass = md5($addUserpass);
	mysqli_query($connection, "INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_date`, `credits`, `role`) VALUES ('','$addUsername', '$md5addUserpass', '$addUseremail', '$createDate', 0, 3)");
	echo "<script type='text/javascript'>alert('Create user success!');</script>";
}
//Add apps
function addApps($appId, $appName, $appUrl, $appImgurl, $appPrice, $appNet, $appDevice, $appDes, $connection){
	$appCre = $appPrice*30/100;

	mysqli_query($connection, "INSERT INTO `apps` (`id`, `name`, `tracking_url`, `image_url`, `count_like`, `download`, `network`, `add_date`, `apps_credit`, `rank`, `device`, `description`, `id_on_net`) VALUES
	 ('', '$appName', '$appUrl' , '$appImgurl', '99', '999', '$appNet', '$addDate', '$appCre', '1', '$appDevice', '$appDes', '$appId')");
	echo "<script type='text/javascript'>alert('Create user success!');</script>";
}
?>