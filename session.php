<?php
$connection = mysql_connect("localhost", "root", "samuraii");
$db = mysql_select_db("mydb", $connection);
session_start();
if (isset($_SESSION['login_user'])){
	$user_check=$_SESSION['login_user'];
	$ses_sql=mysql_query("select username from users where username='$user_check'", $connection);
	$row = mysql_fetch_assoc($ses_sql);
	$login_session =$row['username'];
}
// if(!isset($login_session)){
// 	$error="Login";
// 	mysql_close($connection); 
// 	header('Location: signin.php'); 
// }
?>