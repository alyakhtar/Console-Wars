 <?php 
 	session_start();
 	$y=$_SESSION['var'];  

    if($y=='ps3'){
    	$tbl='ps3';
    }else if($y=='ps4'){
    	$tbl='ps4';
    }else if($y=='xbox'){
    	$tbl='xbox360';
    }else if($y='xboxone'){
    	$tbl='xboxone';
    }

    function gamelist(){
    	global $tbl;
	    $con=mysql_connect("localhost","root","samuraii");
	    mysql_select_db("mydb",$con);
	    $result=mysql_query('select * from'.$tbl);
	    while(mysql_fetch_array($result)){
	    	$row=mysql_fetch_array($result);
	    	echo '<li><p>'.$row[0].'<a href="" class="btn btn-danger pull-right" >ORDER</a></p></li>';
	    }
    }      
?>