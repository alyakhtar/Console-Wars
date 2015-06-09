<?php
	session_start();
	include 'consoledb.php';
	$_SESSION['var']='ps3';
	header("Location:../consoles.php");
?>
