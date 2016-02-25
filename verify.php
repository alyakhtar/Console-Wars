<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Console Wars</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/confirm.css" rel="stylesheet">
  </head>
  <body>   
    <?php
      require_once 'database/dbconnect.php';
      if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
      	  $x=$_GET['email'];
	      $quy=mysql_query("select * from users where email = '$x'");
	      if(!$quy){
	      	die("Error: ".mysql_error());
	      }
	      $res=mysql_num_rows($quy);
	      if($res < 1){
		      $email = $_GET['email']; 
		      $hash = $_GET['hash']; 
		      $query=mysql_query("select * from temp where email = '$email' AND hash = '$hash' ");
		      if(!$query){
		        die("ERROR: ".mysql_error());
		      }
		      $num=mysql_num_rows($query);
		      date_default_timezone_set('Asia/Kolkata');
		      if($num == 1) {
		        $row=mysql_fetch_array($query);
		        $qur=mysql_query("select * from users where email = '$x'");
		        $lol=mysql_query($qur);
		        if($lol < 1){
			        $que=mysql_query("insert into users (username,email,password) values ('$row[4]','$row[1]','$row[3]')");
			        echo '<div id="sigin" class="fullscreen_bg">
			        <div class="container">
			          <form class="form-signin">
			            <h1 class="form-signin-heading">Account Successfully Verified</h1>           
			            <a href="index.php" class="btn btn-danger btn-block bnt1">Home</a>
			          </form>
			        </div>
			        </div>';
			    }else{
			   		echo '<div id="sigin" class="fullscreen_bg">
		        	<div class="container">
		          	<form class="form-signin">
			            <h1 class="form-signin-heading">Account is Already active</h1>           
			            <a href="database/signin.php" class="btn btn-danger btn-block bnt1">Signin</a>
		          	</form>
		        	</div>
		        	</div>';
			    }
		      }	else{
		      	echo '<div id="sigin" class="fullscreen_bg">
	        	<div class="container">
	          	<form class="form-signin">
		            <h1 class="form-signin-heading">Invalid URL</h1>           
	          	</form>
	        	</div>
	        	</div>';
		      }
		   }	else{
		   		echo '<div id="sigin" class="fullscreen_bg">
	        	<div class="container">
	          	<form class="form-signin">
		            <h1 class="form-signin-heading">Account is Already active</h1>           
		            <a href="database/signin.php" class="btn btn-danger btn-block bnt1">Signin</a>
	          	</form>
	        	</div>
	        </div>';
		   }
      }else{
      	echo '<div id="sigin" class="fullscreen_bg">
	        	<div class="container">
	          	<form class="form-signin">
		            <h1 class="form-signin-heading">Invalid url </h1>    
	          	</form>
	        	</div>
	        </div>';
      }
    ?>    

   <!-- ********************************************************************************** -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>