<?php
$dbserver = "localhost";  // ��Ʈw��}
$dbaccount = "root";  //��Ʈw�b��
$dbpassword = "1234";  //��Ʈw�s���K�X
$dbpassword = "iclk200";	
$dbname = "mps";	 //��Ʈw�W��
$oamserver = "140.96.102.239";	//Call Server��}
$oamport = "15555";	//Call Server�޲zport
$defaultRouteGroup = "88609"; //���w��Rule Group, ��NewUser.php�ϥ� 100/06/28�s�W

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