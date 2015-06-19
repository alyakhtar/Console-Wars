 <?php 
    require_once 'dbconnect.php';
 	$x=$_SESSION['user_id'];
 	$y=$_SESSION['var'];  
    if($y=='ps3'){
    	$tbl='ps3';
    }else if($y=='ps4'){
    	$tbl='ps4';
    }else if($y=='xbox360'){
    	$tbl='xbox360';
    }else if($y='xboxone'){
    	$tbl='xboxone';
    }

    function gamelist(){
    	global $tbl;
	    $result=mysql_query('select * from '.$tbl);
	 //    if (!$result) { 
  //   		die('Invalid query: ' . mysql_error());
		// }
	    while($row=mysql_fetch_array($result)){	
            if($_SESSION['login_user'] == "admin"){
                echo '<li>
                        <p>'.$row[1].'</p>
                      </li>';

            } else {
        	  	echo '<form method="post" action="database/user_cart.php?code='.$row[0].'" >
        	    		<li>
        	    			<p>'.$row[1].'<input type="submit" class="btn btn-danger pull-right" name="check" value="ORDER"></p> 
        			    </li>           			
                    </form>';
            }
	    }
    } 
?>