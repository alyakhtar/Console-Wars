<?php
// $username=$password="";

if(isset($_POST["username"]) && isset($_POST["password"])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$hashpassword=md5($password);
	if(!empty($username) && !empty($password)){
		$query="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$hashpassword'"; 
		if($query_run=mysql_query($query)){
			$query_rows=mysql_num_rows($query_run);
			if($query_rows==0){
				echo "Invalid details";
			}	else if ($query_rows==1) {
				$userid=mysql_result($query_run, 0,'id');
				$_SESSION['userid']=$userid;
				header('Location: index.php'); 
			}
		}
	}	
}
	
?>

<form action ="<?php echo $current_file; ?>" method="POST">
Uername: <input type="text" name="username" value="<?php echo $username?>"> Password: <input type="password" name="password" > 
<input type="submit" value="log in ">
</form>