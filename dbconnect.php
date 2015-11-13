<?php
//-----------------------------------------------------------------------------------------------//
//	                       CRM v2.0 Code by Dungnd - dungnd@1pay.vn								 //
//-----------------------------------------------------------------------------------------------//

$host="localhost";
$uname="root";
$pass="";
$database = "appstore";

$connection = mysqli_connect($host, $uname, $pass, $database);
//$selectdb=mysql_select_db($database) or die("Database could not be selected");	
//$result=mysql_select_db($database)or die("database cannot be selected <br>");
//mysql_set_charset('utf8',$connection);
session_cache_expire(0);
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
set_time_limit(0);

