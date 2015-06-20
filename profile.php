<?php
  include 'database/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Console Wars</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/profile.css" rel="stylesheet" >
  <link href='css/rotating-card.css' rel='stylesheet' >
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
  <link href="css/bootstrap.css" rel="stylesheet">  
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">
    @font-face { font-family: Anothershabby; src: url('fonts/Anothershabby.ttf'); } 
    @font-face { font-family: Hallosans; src: url('fonts/Hallosans.otf');}
    @font-face { font-family: orangejuice; src: url('fonts/orangejuice.ttf'); }
    @font-face { font-family: ZOMBIFIED; src: url('fonts/ZOMBIFIED.ttf'); } 
    @font-face { font-family: BlackWidow; src: url('fonts/BlackWidow.ttf'); }
    @font-face { font-family: Blazed; src: url('fonts/Blazed.ttf'); }     
  </style>    
  <script src="js/login-register.js" type="text/javascript"></script>    
</head>
<!-- *********************************************************************************************** -->
<body>
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar navbar-static-top" style="background-image:url('img/ocean.jpg');">
      
        <div class="navbar-header">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <a class="navbar-brand" href="#">ConWArs</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consoles<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <?php 
                  if($login_session == "guest"){
                    echo '<li><a href="pleaselogin.php">PS3</a></li>'; 
                  } else{     
                    echo '<li><a href="database/ps3.php">PS3</a></li>';
                  }                  
                  echo '<li class="divider"></li>';
                  if($login_session == "guest"){
                  echo '<li><a href="pleaselogin.php">PS4</a></li>'; 
                  } else{                    
                    echo '<li><a href="database/ps4.php">PS4</a></li>';
                  }
                  echo '<li class="divider"></li>';
                  if($login_session == "guest"){
                  echo '<li><a href="pleaselogin.php">X-BOX 360</a></li>'; 
                  } else{
                    echo '<li><a href="database/xbox.php">X-BOX 360</a></li>';
                  }
                  echo '<li class="divider"></li>';
                  if($login_session == "guest"){
                  echo '<li><a href="pleaselogin.php">X-BOX ONE</a></li>'; 
                  } else{
                    echo '<li><a href="database/xbox1.php">X-BOX ONE</a></li>';
                  }
                ?>
              </ul> 
            </li>
            <li><a href="database/logout.php">Logout</a></li>
        </div>
    </div>
  </div>
</div>
  <div align="center" id="mainWrapper" style="padding-top:60px;">
    <div class="page-header"> 
      <h1 style="color: #000000;font-size:30px;font-weight:bold; font-family: Anothershabby">Profile</h1>      
    </div> 
  </div>
<?php   
    include 'database/profiledb.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
