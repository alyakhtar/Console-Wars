<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

function loggedin(){
	if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
		return true;
	} 	else{
		return false;
	}
}

?>