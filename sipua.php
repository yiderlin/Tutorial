<?php
include "vars.php"; 
include "util.php";
$s_ip = getParam("server");
//$s_ip = "60.248.180.60";
$s_port = getParam("port");
$localip = $_SERVER['SERVER_ADDR'];
$lport = 5062;
logmsg(50, "sipua: s_ip=$s_ip,  s_port=$s_port");

if ( !empty($s_ip) && !empty($s_port) ) {
	if ( sipTest($s_ip, $s_port, $localip) ) {
		echo "Pass SIP test over server($s_ip:$s_port)!";
	} else {
		echo "Fail SIP test over server($s_ip:$s_port)!";
	}
} else {
	echo "Error: empty parameter(server=$s_ip, port=$s_port)!\n";
}
?>
