<?php
$dbserver = "localhost";  // 資料庫位址
$dbaccount = "root";  //資料庫帳號
$dbpassword = "1234";  //資料庫存取密碼
$dbpassword = "iclk200";	
$dbname = "mps";	 //資料庫名稱
$oamserver = "140.96.102.239";	//Call Server位址
$oamport = "15555";	//Call Server管理port
$defaultRouteGroup = "88609"; //內定的Rule Group, 供NewUser.php使用 100/06/28新增

$csip = "211.20.94.200";	// Call Server ip
$csport = 5080;			// Call Server port

$errlogfile = "/var/tmp/BSerror.log";	// Error log file
$APNS_IP = "211.20.94.200"; 	// APNS server
$exturl = "https://localhost/newUser.php";	// IM DB URL to notify
//$mcsurl = "https://localhost/mcsNewUser.php";	// MCS DB URL to notify

$user_pn_len = 12; 	// User Phone length
$passwd_len = 5; 	// Password length
// $passwd_mask = "0123456789";  the password mask length will be 2 times of $passwd_len
$passwd_mask =    "-12--5-7-9";	// the character "-" will be replaced with the password character

$bPrompt = 1;	// Prompt progress
$bNotifyoam = 0;	// Notify Call server
//$g_log_dir = "/var/log/imserver/";		// IM server log directory
$g_log_dir = "C:\\Temp\\";		// IM server log directory
$g_debug = true;	// Debug mode
$g_JSON = false;	// JSON format output
?>