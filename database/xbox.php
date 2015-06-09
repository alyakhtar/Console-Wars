<?php
	session_start();
	include 'consoledb.php';
	$_SESSION['var']='xbox';
	header("Location:../consoles.php");
?>
