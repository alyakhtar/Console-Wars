<?php
require 'dbconnect.php';
require 'session.php';
$error=''; 
if($login_session == "guest"){
	if (isset($_POST['login'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$hash_password=md5($password);		
			$query = mysql_query("select * from users where password='$hash_password' AND username='$username'");
			$rws = mysql_num_rows($query);
			if ($rws == 1) {
				$_SESSION['login_user']=$username; 
				header("location: ../index.php");
			} else {
				$error = "INVALID USERNAME/PASSWORD";
			}
			$row=mysql_fetch_array($query);
			$_SESSION['user_id']=$row[0];
		}
	}
}	else{
	header("Location: ../index.php");
}

?>