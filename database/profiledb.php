<?php 
    require_once 'dbconnect.php';
    $user=$_SESSION['login_user'];
    $query=mysql_query("select * from users where username= '$user'"); 
    $row=mysql_fetch_array($query);
    echo '<div>
  <form ction="database/profiledb.php" method="post" class="form-horizontal" id="accountSetForm" role="form" enctype="multipart/form-data">
    <div class="form-grup" style="margin-bottom:-10px;">
      <label class="col-sm-5 control-label">Avatar</label>
      <div class="">                                
        <div class="custom-input-file" style="background: #eee url(img/'."$row[6]".')">          
          <label class="uploadPhoto">
            Edit
            <input type="file" class="change-avatar" name="image" id="avatar">            
          </label>          
        </div>
      </div>
    </div><br>
    <label class="col-sm-7 control-label">Size should be less than 40kb</label><br><br>
    <div class="form-grup" style="margin-top:-10px;">      
      <label class="col-sm-5 control-label">Last Profile Update</label>
      <div class="col-sm-3">
        <h5>'.$row[4].'</h5>
      </div>
    </div><br><br>
    <div class="form-grup">
      <label class="col-sm-5 control-label">Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="name" id="name" value="'.$row[1].'">
      </div>
    </div><br><br>
    <div class="form-grup">
      <label class="col-sm-5 control-label">Email</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" name="email" id="email" value="'.$row[2].'" readonly>
      </div>
    </div><br><br>
    <div class="form-grup">
      <label class="col-sm-5 control-label">Phone Number</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phone" id="name" value="'.$row[5].'">
      </div>
    </div><br><br>
    <div class="form-grup">
      <label class="col-sm-5 control-label">New Password</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="newPassword" id="newPassword">
      </div>
    </div><br><br> 
    <div class="form-grup">
      <label class="col-sm-5 control-label">Confirm Password</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
      </div>
    </div><br><br>
    <div class="form-grup" style="padding-top:10px;">
      <div class=" ">
        <center><input type="submit" class="btn btn-success" name="update"  value="Update Info"></center>
      </div>
    </div>
  </form>
</div>';

    if(isset($_POST['update'])){
        $image_name=$_FILES['image']['name'];
        $image_type=$_FILES['image']['type'];
        $image_size=$_FILES['image']['size'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $npas=$_POST['newPassword'];
        $cpas=$_POST['confirmPassword'];
        $que=mysql_query("select * from users where username= '$user'");
        $row=mysql_fetch_array($que);
        $id=$row[0];
        $pass=$row[3];
        if($npas == $cpas && md5($npas) == 'd41d8cd98f00b204e9800998ecf8427e'){
            $hash_password=$row[3];
            $npas='';
            $cpas='';
        }   else
            $hash_password=md5($npas);

        
        if($name != $user){
            if($image_name != ''){
                if($image_size <= 40000){                    
                    move_uploaded_file($image_tmp_name, "img/$user.jpg");
                    if(isset($phone) && isset($npas) && isset($cpas) && isset($name)){
                        if($npas == $cpas){
                            $query=mysql_query("update users set username='$name', password='$hash_password', phone='$phone', image='$user.jpg' where id='$id'");
                        }
                    } elseif (isset($npas) && isset($cpas) && isset($name)) {
                        if($npas == $cpas){
                            $query=mysql_query("update users set username='$name', password='$hash_password', image='$user.jpg' where id='$id'");
                        }
                    } elseif (isset($phone) && isset($name)) {                
                            $query=mysql_query("update users set username='$name', password='$pass', phone='$phone', image='$user.jpg' where id='$id'");
                    } elseif (isset($name)) {
                            $query=mysql_query("update users set username='$name', password='$pass', image='$user.jpg' where id='$id'");
                    }
                }
            } else{
                if(!empty($npas) && !empty($cpas)){
                    if(isset($phone) && isset($npas) && isset($cpas) && isset($name)){
                        if($npas == $cpas){
                            $query=mysql_query("update users set username='$name', password='$hash_password', phone='$phone' where id='$id'");
                        }
                    } elseif (isset($npas) && isset($cpas) && isset($name)) {
                        if($npas == $cpas){
                            $query=mysql_query("update users set username='$name', password='$hash_password' where id='$id'");
                        }
                    }
                } elseif (isset($phone) && isset($name)) {                
                        $query=mysql_query("update users set username='$name', password='$pass', phone='$phone' where id='$id'");
                }   elseif (isset($name)) {
                        $query=mysql_query("update users set username='$name', password='$pass' where id='$id'");
                }
            }
        }   else{
            if($image_name != ''){                
                if($image_size <= 40000){
                    move_uploaded_file($image_tmp_name, "img/$user.jpg");
                    if(!empty($npas) && !empty($cpas)){
                        if(isset($phone) && isset($npas) && isset($cpas) && isset($name)){                   
                                if($npas == $cpas){
                                    $query=mysql_query("update users set password='$hash_password', phone='$phone', image='$user.jpg' where id='$id'");
                                }
                        } elseif (isset($npas) && isset($cpas) && isset($name)) {                    
                                if($npas == $cpas){
                                    $query=mysql_query("update users set password='$hash_password', image='$user.jpg' where id='$id'");
                                }
                        }
                    } elseif (isset($phone) && isset($name)) {                
                            $query=mysql_query("update users set password='$pass', phone='$phone', image='$user.jpg' where id='$id'");
                    } elseif (isset($name)) {
                            $query=mysql_query("update users set password='$pass', image='$user.jpg' where id='$id'");
                    }
                }
            } else{
                if(!empty($npas) && !empty($cpas)){
                    if(isset($phone) && isset($npas) && isset($cpas) && isset($name)){
                        if($npas == $cpas){
                            $query=mysql_query("update users set password='$hash_password', phone='$phone' where id='$id'");
                        }
                    } elseif (isset($npas) && isset($cpas) && isset($name)) {
                        if($npas == $cpas){
                            $query=mysql_query("update users set password='$hash_password' where id='$id'");
                        }
                    }
                }   elseif (isset($phone) && isset($name)) {                
                        $query=mysql_query("update users set password='$pass', phone='$phone' where id='$id'");
                }   elseif (isset($name)) {
                        $query=mysql_query("update users set password='$pass' where id='$id'");
                }
            }
        }
    }

 ?>