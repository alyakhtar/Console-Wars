<?php
  include 'database/session.php';
  require_once 'database/dbconnect.php';
  if($login_session == 'guest')
  header('Location:pleaselogin.php');
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
</head>
<!-- *********************************************************************************************** -->
<body>
  <div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar navbar-static-top">      
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </a>
          <a class="navbar-brand" href="index.php">CONWARS<sup>&reg;</sup></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consoles <b class="caret"></b></a>
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
          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-right:120px;"> 
            <li ><a href="database/logout.php" data-toggle="modal">Logout</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>
  <div align="center" id="mainWrapper" style="padding-top:40px;">
    <div class="page-header"> 
      <h1 style="color: #000000;font-size:30px;font-weight:bold; font-family: Anothershabby">Cart</h1>
    </div> 
  </div>

  <?php
  $total=0;
  $query=mysql_query('select * from cart where user_id='.$_SESSION['user_id']);
  echo '<div class="container" style="padding-top:40px">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">';
            $count=mysql_num_rows($query);
            if($count < 1){
              echo '<center>
                      <h1> CART EMPTY </h1><br><br><br>
                      <a class="btn btn-info" href="index.php">CONTINUE SHOPPING</a>
                    </center>';
            } else {
            echo '<table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <td>   </td>
                        <th class="text-center">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>';                    
                    while($row=mysql_fetch_array($query)){
                    $total=$total+$row[2];
                    echo '<tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/news.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading" style="padding-left:20px;padding-top:30px">'.$row[1].'</h4>
                                <h5 class="media-heading" style="padding-left:20px;"> Console : '.$row[4].'</h5>
                                <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
                            </div>
                        </div></td>
                        <td>   </td>
                        <td class="col-sm-1 col-md-1 text-center" style="padding-top:35px"><strong><i class="fa fa-rupee">'.$row[2].'</strong></td>
                        <td>   </td>
                        <td class="col-sm-1 col-md-1" style="padding-top:30px" >  
                          <a class="btn btn-warning" href="database/user_cart.php?game_id='.$row[0].'">Remove</a>                      
                          <!-- <button type="button" class="btn btn-danger pull-right">
                              <span class="glyphicon glyphicon-remove"></span> Remove
                          </button> -->
                        </td>
                      </tr>';
                    }
                    
                    echo '<!-- <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><i class="fa fa-rupee">24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong><i class="fa fa-rupee">6.94</strong></h5></td>
                    </tr> -->
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><i class="fa fa-rupee">'.$total.'</strong></h3></td>
                    </tr>
                    <tr>
                        <td> <a class="btn btn-danger" href="database/user_cart.php?game_id=-1">Empty Cart</a>  </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                          <a class="btn btn-info" href="index.php">Continue Shopping</a>
                          <!-- button type="button" class="btn btn-default" action="../index.php">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                          </button> -->
                        </td>
                        <td>
                          <a class="btn btn-success" href="">Checkout</a>
                          <!-- <button type="button" class="btn btn-success">
                              Checkout <span class="glyphicon glyphicon-play"></span>
                          </button> -->
                        </td>
                    </tr>';
                  }
                echo '</tbody>
            </table>
        </div>
    </div>
</div>';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
