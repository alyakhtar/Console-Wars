<?php
	session_start();
	include 'consoledb.php';
	$_SESSION['var']='xbox360';
	header("Location:../consoles.php");
?>
