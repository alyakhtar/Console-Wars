<?php
	require_once 'dbconnect.php';
	// $y=$_SESSION['var']; 
	$query=mysql_query('select * from comment where console = "'.$_SESSION['var'].'"');	
	if (!$query) { 
    		die('Invalid query: ' . mysql_error());
		}
	while($row=mysql_fetch_array($query)){
		$query2=mysql_query("select image from users where id IN (Select user_id from comment where user = '$row[3]') ");
		$res=mysql_fetch_array($query2);
		if(!empty($row[5])){			
			echo	'<li class="media">
			        <a class="pull-left" href="#">
			          <img class="media-object img-circle" src="img/'.$res[0].'" alt="profile">
			        </a>
			        <div class="media-body">
			          <div class="well well-lg">
			              <h4 class="media-heading text-uppercase ">'.$row[3].'</h4>
			              <ul class="media-date text-uppercase list-inline">
			                <li class="dd" >'.$row[4].'</li>
			              </ul>
			              <h3 class="media-comment">'.$row[1].'</h3>
			              <div class="embed-responsive embed-responsive-16by9" >
		                      <iframe style="padding-top:30px;" class="embed-responsive-item" src="//www.youtube.com/embed/'.$row[5].'" allowfullscreen></iframe>
		                  </div>
			              <!-- <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>                               -->
			          </div>              
			        </div>                        
			    </li>';
			}	else{
				echo	'<li class="media">
			        <a class="pull-left" href="#">
			          <img class="media-object img-circle" src="img/'.$res[0].'" alt="profile">
			        </a>
			        <div class="media-body">
			          <div class="well well-lg">
			              <h4 class="media-heading text-uppercase ">'.$row[3].'</h4>
			              <ul class="media-date text-uppercase list-inline">
			                <li class="dd" >'.$row[4].'</li>
			              </ul>
			              <h3 class="media-comment">'.$row[1].'</h3>
			              <!-- <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>                               -->
			          </div>              
			        </div>                        
			    </li>';
			}
	}

	if(isset($_POST['submit_comment'])){
		$comment=$_POST['addComment'];
		$media=$_POST['uploadMedia'];
		$user=$_SESSION['login_user'];
		date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d");
		$findme="=";
		$newque=mysql_query("select id from users where username= '$user'");
		$newrow=mysql_fetch_array($newque);
		$id=$newrow[0];
		$console=$_SESSION['var'];
		// echo $comment;
		// echo $media;
		// echo $user;
		// echo $date;
		// echo $id;
		// echo $console;

		if(!empty($media)){
			$pos = strpos($media, $findme);
			$rest = substr($media,$pos+1);
			$query=mysql_query("insert into comment (comment,console,user,date,media,user_id) values ('$comment','$console','$user','$date','$rest','$id')");
			echo '<script>
				window.location = "http://localhost/ConsoleWars/database/router.php";
			</script>';			
		}	else{
			$query=mysql_query("insert into comment (comment,console,user,date,user_id) values ('$comment','$console','$user','$date','$id')");	
			echo '<script>
				window.location = "http://localhost/ConsoleWars/database/router.php";
			</script>';
		}
	}
?>