<?php
session_start(); 
$error=''; 
if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$connection = mysql_connect("localhost", "root", "samuraii");
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$hash_password=md5($password);
		$db = mysql_select_db("mydb", $connection);
		$query = mysql_query("select * from users where password='$hash_password' AND username='$username'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; 
			header("location: home.php");
		} else {
			$error = "INVALID USERNAME/PASSWORD";
		}
		mysql_close($connection); 
	}
}
?>