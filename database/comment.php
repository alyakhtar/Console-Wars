<?php
	require_once 'dbconnect.php';
	// $y=$_SESSION['var']; 
	$query=mysql_query('select * from comment where console = "'.$_SESSION['var'].'"');
	if (!$query) { 
    		die('Invalid query: ' . mysql_error());
		}
	while($row=mysql_fetch_array($query)){
		if(!empty($row[5])){
			echo	'<li class="media">
			        <a class="pull-left" href="#">
			          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
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
			          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
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
		$console=$_SESSION['var'];
		if(!empty($media)){
			$pos = strpos($media, $findme);
			$rest = substr($media,$pos+1);
			$query=mysql_query("insert into comment (comment,console,user,date,media) values ('$comment','$console','$user','$date','$rest')");
			echo '<script>
				window.location = "http://localhost/ConsoleWars/database/router.php";
			</script>';			
		}	else{
			$query=mysql_query("insert into comment (comment,console,user,date) values ('$comment','$console','$user','$date')");			
			echo '<script>
				window.location = "http://localhost/ConsoleWars/database/router.php";
			</script>';
		}
	}
?>