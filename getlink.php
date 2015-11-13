<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('global.php');
require_once('function.php');
$cpId = $_GET['id'];
$trackingUrl = showApps("$cpId", "url", $connection);
header( "refresh: 2; url=$trackingUrl" );
?>
<center><img src="./image/loadding.gif"></center>