<?php
// WS 1pay SMS dungnd@1pay.vn

//connect DB
// $host="localhost";
// $uname="vsisnet_admin";
// $pass="123@quanghuy";
// $database = "vsisnet_chobansi";
// $connection = mysqli_connect($host, $uname, $pass, $database);
function writelog($file, $logcontent) {
        $Date = date("h:i:sA, d/m/Y");  
    	$fh = fopen('log.log', "a") or die("Could not open log file."); 
   		fwrite($fh, date("d-m-Y, H:i")." - $logcontent \r\n") or die("Could not write file!");
    	fclose($fh);
    }
$arParams['access_key'] = $_GET['access_key'] ? $_GET['access_key'] : '';
   $arParams['command'] = $_GET['command'] ? $_GET['command'] : '';
   $arParams['mo_message'] = $_GET['mo_message'] ? $_GET['mo_message'] : '';
   $arParams['msisdn'] = $_GET['msisdn'] ? $_GET['msisdn'] : '';
   $arParams['request_id'] = $_GET['request_id'] ? $_GET['request_id'] : '';
   $arParams['request_time'] = $_GET['request_time'] ? $_GET['request_time'] : '';
   $arParams['short_code'] = $_GET['short_code'] ? $_GET['short_code'] : '';
   $arParams['signature'] = $_GET['signature'] ? $_GET['signature'] : '';
   $data = "access_key=" . $arParams['access_key'] . "&command=" . $arParams['command'] . "&mo_message=" . $arParams['mo_message'] . "&msisdn=" . $arParams['msisdn'] . "&request_id=" . $arParams['request_id'] . "&request_time=" . $arParams['request_time'] . "&short_code=" . $arParams['short_code'];
   $secret = 'quncaegcitx0d375ipqn7tk75789hmnj'; // serequire your secret key from 1pay
   $signature = hash_hmac("sha256", $data, $secret); 
   $arResponse['type'] = 'text';
   $cutstr = explode(" ", $arParams['mo_message']);
   $username = $cutstr['1'];
   $now = time();
   $end = $now + 1296000;
   if ($arParams['signature'] == $signature) {
    //if sms content, amount,... are ok. return success
   	if($arParams['short_code'] == 8598){
   	$amount = 15000;
   	}elseif($arParams['short_code'] == 8698){
   	$amount = 30000;
   	}elseif($arParams['short_code'] == 8798){
   	$amount = 45000;
   	}
$sql= mysqli_query($connection, "UPDATE `xf_user` SET `credits`='credits+$amount' WHERE `username`='$username'");
    $logcontent = "Thanh cong | $username | $userId";
    $arResponse['status'] = 1;
    $arResponse['sms'] = "Giao dich thanh cong tai khoan $username co $amount credits trong tai khoan Hotline...";
    writelog("log.log", $logcontent);
   }
   else {
    //if not, return unsuccess
    $logcontent = "That bai | $username | $userId";
    $arResponse['status'] = 0;
    $arResponse['sms'] = 'Giao dich khong thanh cong. Tin nhan se duoc hoan cuoc sau 20 ngay. Hotline...';
    writelog("log.log", $logcontent);
   }

   // return json for 1pay system
   echo json_encode($arResponse);


?>