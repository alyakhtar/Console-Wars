<?php 
// $name=$passwd=$cpasswd="";
if (isset($_POST['signup'])) {
	if (empty($_POST['name']) || empty($_POST['passwd']) || empty($_POST['cpasswd'])) {
		$error = "ALL FIELDS ARE COMPULSORY";
	}
	else {
		$username=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['passwd'];
		$cpassword=$_POST['cpasswd'];
		$connection = mysql_connect("localhost", "root", "samuraii");
		$username = stripslashes($username);
		$email=stripslashes($email);
		$password = stripslashes($password);
		$cpassword = stripslashes($cpassword);
		$username = mysql_real_escape_string($username);
		$email=mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		$cpassword = mysql_real_escape_string($cpassword);
		if($password == $cpassword){
			$hash_passwd=md5($password);
			$db = mysql_select_db("mydb", $connection);
			$query = mysql_query("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hash_passwd')", $connection);				
			mysql_close($connection); 
		}	else{
			$error="PASSWORDS DON'T MATCH." ;
		}
	}
}
?>