<?php 
require_once 'dbconnect.php';
if (isset($_POST['signup'])) {
	if (empty($_POST['name']) || empty($_POST['passwd']) || empty($_POST['cpasswd'])) {
		$error = "ALL FIELDS ARE COMPULSORY";
	}
	else {
		$username=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['passwd'];
		$cpassword=$_POST['cpasswd'];		
		$username = stripslashes($username);
		$email=stripslashes($email);
		$password = stripslashes($password);
		$cpassword = stripslashes($cpassword);
		$username = mysql_real_escape_string($username);
		$email=mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		$cpassword = mysql_real_escape_string($cpassword);
		$query=mysql_query("select * from users where email= '$email'");
		$rows=mysql_num_rows($query);
		if($rows <1){
			if($password == $cpassword){
				$hash_passwd=md5($password);	
				mysql_query("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hash_passwd')");
			}	else{
				$error="PASSWORDS DON'T MATCH." ;
			} 
		}	else{
				$error="USER ALREADY EXISTS.";
		}
	}
}
?>