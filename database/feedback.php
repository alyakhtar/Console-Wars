<?php
require_once 'dbconnect.php';
$name=$email=$comment="";
// $name=isset($_POST['name'] ? $_POST['name'] : '';
// $email=isset($_POST['email'] ? $_POST['email'] : '';
// $comment=isset($_POST['comment'] ? $_POST['comment'] : '';

// if($name != '' && $email != '' && $comment !='')
// {
//   $name = test_input($_POST["name"]);
//   $email = test_input($_POST["email"]);
//   $comment = test_input($_POST["comment"]);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!empty($_POST["name"]))  {
    $name = test_input($_POST["name"]);     
  } else{ 
      $name = NULL;
  }
  if(!empty($_POST["email"])){
    $email = test_input($_POST["email"]);
  }  else{ 
      $email=NULL;
  }      
  if (!empty($_POST["comment"])){
    $comment = test_input($_POST["comment"]);
  } else{
      $comment=NULL;
  }
}


function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$sql = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$comment')";
$conn->query($sql);

$conn->close();
?>