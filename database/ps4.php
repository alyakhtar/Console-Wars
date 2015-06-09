<?php
	session_start();
	include 'consoledb.php';
	$_SESSION['var']='ps4';
	header("Location:../consoles.php");
?>
