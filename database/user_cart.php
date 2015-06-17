<?php	
	session_start();
	require_once 'dbconnect.php';
	$z=$_GET["code"];
	$x=$_SESSION['user_id'];
	$y=$_SESSION['var'];  
    if($y=='ps3'){
    	$tbl='ps3';
    	$console='PLAYSTATION 3';
    }else if($y=='ps4'){
    	$tbl='ps4';
    	$console='PLAYSTATION 4';
    }else if($y=='xbox360'){
    	$tbl='xbox360';
    	$console='XBOX 360';
    }else if($y='xboxone'){
    	$tbl='xboxone';
    	$console='XBOX ONE';
    }

	if(isset($_POST["check"])) {			
		$query = mysql_query('select * from '.$tbl.' where id = '.$z);	
		if (!$query) { 
    		die('Invalid query: ' . mysql_error());
		}	

		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$row=mysql_fetch_array($query);
			$query2 = mysql_query('insert into cart (game,price,user_id,console) values ( "'.$row[1].'",'.$row[2].','.$x.',"'.$console.'")');	
			if (!$query2) { 
    		die('Invalid query: ' . mysql_error());
		}				
			header("location: ../cart.php");
		} 		 
	}

	if(isset($_GET["game_id"])){
		if($_GET['game_id'] == -1){
			mysql_query('delete from cart where user_id = '.$_SESSION['user_id']);
			header("Location: ../cart.php");
		} else {
			$query=mysql_query('delete from cart where id= '.$_GET['game_id']);
			header("Location: ../cart.php");
		}
	}
?>