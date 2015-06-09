<?php
	session_start();
	include 'consoledb.php';
	$_SESSION['var']='xboxone';
	header("Location:../consoles.php");
?>
