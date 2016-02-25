<?php
	require_once 'dbconnect.php';

  if(isset($_GET['feedback_id'])){
    $query=mysql_query('delete from feedback where id= '.$_GET['feedback_id']);
    header("Location:../admin.php");
  }

	if(isset($_GET['user_id'])){
		$query=mysql_query('delete from users where id= '.$_GET['user_id']);
		header("Location:../admin.php");
	}
	if(isset($_GET['comment_id'])){
		$query=mysql_query('delete from comment where id= '.$_GET['comment_id']);
		header("Location:../admin.php");
	}
	if(isset($_POST['upload1'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/1.jpg");
	}
	if(isset($_POST['upload2'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/2.jpg");
	}
	if(isset($_POST['upload3'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/3.jpg");
	}
	if(isset($_POST['upload4'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/4.jpg");
	}
	if(isset($_POST['upload5'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/5.jpg");
	}
	if(isset($_POST['upload6'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/6.jpg");
	}
	if(isset($_POST['upload7'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
	        move_uploaded_file($image_tmp_name, "img/7.jpg");
	}
	if(isset($_POST['upload8'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
        	move_uploaded_file($image_tmp_name, "img/8.jpg");
	}
	if(isset($_POST['upload9'])){
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        if($image_name != '')
        	move_uploaded_file($image_tmp_name, "img/9.jpg");
	}
	if(isset($_POST['up1'])){
		$heading=$_POST['heading'];
		$subhead=$_POST['subheading'];
		$body=$_POST['body'];
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        // echo $heading.$subhead.$body.$image_name. $image_size .$image_type. $image_tmp_name;
        if($image_name != ''){
	        move_uploaded_file($image_tmp_name, "img/news1.jpg");
	        $query=mysql_query("update news set heading='$heading',subtitle='$subhead',text='$body' where id = 1");
	    }
	}
	if(isset($_POST['up2'])){
		$heading=$_POST['heading'];
		$subhead=$_POST['subheading'];
		$body=$_POST['body'];
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];        
        if($image_name != ''){
	        move_uploaded_file($image_tmp_name, "img/news2.jpg");
	        $query=mysql_query("update news set heading='$heading',subtitle='$subhead',text='$body' where id = 2");
	    }
	}
	if(isset($_POST['up3'])){
		$heading=$_POST['heading'];
		$subhead=$_POST['subheading'];
		$body=$_POST['body'];
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];        
        if($image_name != ''){
	        move_uploaded_file($image_tmp_name, "img/news3.jpg");
	        $query=mysql_query("update news set heading='$heading',subtitle='$subhead',text='$body' where id = 3");
	    }
	}
	if(isset($_POST['up4'])){
		$heading=$_POST['heading'];
		$subhead=$_POST['subheading'];
		$body=$_POST['body'];
		$image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];        
        if($image_name != ''){
	        move_uploaded_file($image_tmp_name, "img/news4.jpg");
	        $query=mysql_query("update news set heading='$heading',subtitle='$subhead',text='$body' where id = 4");
	    }
	}
	if(isset($_GET['remove1'])){
		$id=$_GET['remove1'];
		$query=mysql_query('delete from ps3 where id= '.$id);
		header("Location: ../admin.php#");
	}
	if(isset($_GET['remove2'])){
		$id=$_GET['remove2'];
		$query=mysql_query('delete from ps4 where id= '.$id);
		header("Location: ../admin.php#");
	}
	if(isset($_GET['remove3'])){
		$id=$_GET['remove3'];
		$query=mysql_query('delete from xbox360 where id= '.$id);
		header("Location: ../admin.php#");
	}
	if(isset($_GET['remove4'])){
		$id=$_GET['remove4'];
		$query=mysql_query('delete from xboxone where id= '.$id);
		header("Location: ../admin.php#");
	}

	if(isset($_POST['add1'])){
		$name=$_POST['gamename'];
		$price=$_POST['gameprice'];
		// echo $name.$price;
		if(!empty($name) && !empty($price)){
			$query=mysql_query("insert into ps3(games,price) values ('$name','$price')");
		}
	}
	if(isset($_POST['add2'])){
		$name=$_POST['gamename'];
		$price=$_POST['gameprice'];
		if(!empty($name) && !empty($price)){
			$query=mysql_query("insert into ps4(games,price) values ('$name','$price')");
		}
	}
	if(isset($_POST['add3'])){
		$name=$_POST['gamename'];
		$price=$_POST['gameprice'];
		if(!empty($name) && !empty($price)){
			$query=mysql_query("insert into xbox360(games,price) values ('$name','$price')");
		}
	}
	if(isset($_POST['add4'])){
		$name=$_POST['gamename'];
		$price=$_POST['gameprice'];
		if(!empty($name) && !empty($price)){
			$query=mysql_query("insert into xboxone(games,price) values ('$name','$price')");
		}
	}

?>
