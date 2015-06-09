<?php
session_start();
// include 'database/consoledb.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
  <title>CONSOLE WARS</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />    
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/landing-page.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />   
    <style type="text/css"> 
        body 
        {
            background: #ffffff url(img/news.jpg) repeat-x fixed center top;
        }   
    </style>
    
</head>

<body class="landing-page" >

<nav class="navbar navbar-transparent navbar-top" role="navigation">
    <div class="container">
    
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a>
       <div class="logo-container">
            <div class="logo">
                <a href="home.php"><img height="50" src="img/logo.jpg" alt="Console Wars"></a>
            </div>
            <div class="brand">
                <a href="home.php"><span style="color:white">Console wars</span></a>
            </div>
        </div>
      </a>
    </div>

    <div class="collapse navbar-collapse" id="example" >
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#"> 
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-google-plus"></i>
                    Plus
                </a>
            </li>
            <li>
                <a href="#"> 
                    <i class="fa fa-github"></i>
                    Git
                </a>                
            </li>
            <li>
                <a href="database/logout.php"> 
                    <i class="fa fa-sign-out"></i>
                    Logout
                </a>                
            </li>
       </ul>
      
    </div>
  </div>
</nav>

<div class="wrapper">
    <div class="parallax filter-gradient gray"> 
        <div class="parallax-background">
            <img src="img/bg.jpg">
        </div>
        <div class= "container"> 
            <div class="row">
                <div class="col-md-5 hidden-xs">
                    <div class="parallax-image">
                        <?php 
                          $y=$_SESSION['var'];
                          if($y=='ps3'){
                            echo '<img width="400" height="400" src="img/ps3.jpg">';
                          }else if($y=='ps4'){
                            echo '<img height="300" src="img/ps4.jpg">';
                          }else if($y=='xbox'){
                            echo '<img src="img/xbox360.jpg">';
                          }else if($y=='xboxone'){
                            echo '<img src="img/x1.jpg">';
                          }
                        ?>
                        <!-- <img height="1000" src="http://upload.wikimedia.org/wikipedia/commons/a/ab/Xbox-360-Arcade-wController.jpg"> -->
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="description">
                        <h2>
                            <?php 
                              $y=$_SESSION['var'];
                              if($y=='ps3'){
                                echo 'PLAYSTATION 3';
                              }else if($y=='ps4'){
                                echo 'PLAYSTATION 4';
                              }else if($y=='xbox'){
                                echo 'X BOX 360';
                              }else if($y=='xboxone'){
                                echo 'X BOX ONE';
                              }
                            ?>
                        </h2> 
                        <br> 
                        <h5>Be amazed by the best gaming list page on the web! Your new or old console  deserves an amazing page to show all the games that are made for it. </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-gray section-clients">
        <div class="container text-center">
            <h4 class="header-text">Friends in high places</h4>
            <p>
              ARE GAMES COME FROM ALL SORT OF BRANDS<br>
            </p>
            <div class="logos">
                <ul class="list-unstyled">
                    <li ><img src="img/rocktar.png"/></li>
                    <li ><img src="img/sony.jpg"/></li>
                    <li ><img src="img/valve.jpg"/></i>
                    <li ><img src="img/naughtydog.jpg"/></li>
                    <li ><img src="img/ubisoft.jpg"/></li>
                    <li ><img src="img/ea.jpg"/></li>
                </ul>
            </div>
        </div>
    </div>
    
    
    <div class="container">        
      <h1><center><span style="color:#FF6600;">GAME LIST</span></center></h1>
      <br><br>
      <ul>
          <?php
            include 'database/consoledb.php';
            gamelist();
          ?>
          <!-- <li><p>Witcher 3<a href="" class="btn btn-danger pull-right" >ORDER</a></p></li>
          <li><p>Fifa 15<a href="" class="btn btn-danger  pull-right" >ORDER</a></p></li -->>          
      </ul>               
    </div>

    <div class="section" >
        <div class="full-background filter-gradient gray" style="background-image:url('img/bg.jpg')">
            <div class="info">
                <h1>Order the games at a very nominal price!</h1>
                <p>Or request for one.</p> 
            </div>
        </div>
    </div> 
    
    <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               About
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="social-area pull-right">                
                    <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a class="btn btn-social btn-google-plus btn-simple">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-social btn-github btn-simple">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <div class="copyright">
                    &copy; 2014-<?php echo date("Y")?> <span style="color:#00CCFF">Console Wars</span>, made with love
                </div>
            </div>
        </footer>
</body>

<!-- ************************************************************************************************************** -->
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

  <script src="js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript">
        var big_image;
        $().ready(function(){
            responsive = $(window).width();
            
            if (responsive >= 768){
                big_image = $('.parallax-background').find('img');
                console.log(big_image);
                $(window).on('scroll',function(){           
                    parallax();
                });
            }
            
        });
        
       var parallax = function() {
            var current_scroll = $(this).scrollTop();
            
            oVal = ($(window).scrollTop() / 3); 
            big_image.css('top',oVal);
        };
    </script>
</html>


