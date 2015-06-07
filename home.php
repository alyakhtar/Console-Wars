<?php
  include 'database/session.php';
  //include 'database/feedback.php';
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
  <link href="css/login-register.css" rel="stylesheet" >
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
    <div class="navbar navbar navbar-fixed-top">      
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </a>
          <a class="navbar-brand" href="#myCarousel">CONWARS<sup>&reg;</sup></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#myCarousel">Home</a></li>
            <li><a href="#about" >About</a></li>            
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consoles <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">PS3</a></li>
                <li><a href="#">PS4</a></li>
                <li class="divider"></li>
                <li><a href="#">X-BOX 360</a></li>                
                <li><a href="#">X-BOX ONE</a></li>
              </ul>            
            </li>            
          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-right:20px;">              
            <!-- <li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></li>          -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ucfirst($login_session);?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <?php 
                if($login_session == "guest"){
                echo '<li><a href="database/signin.php">Login</a></li>'; 
                } else{
                  echo '<li><a href="database/logout.php">Logout</a></li>';
                }
                ?>            
              </ul>            
            </li>
            <li ><a href="#feedback" data-toggle="modal">Feedback</a></li>
          </ul>
        </div>

    </div>
  </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/f14.jpg" class="fill">
      <!-- <div class="container">
        <div class="carousel-caption">
          <h1>CONSOLE WARS</h1>          
          <p><a class="btn btn-lg btn-primary" href="">Learn More</a></p>
        </div>
      </div> -->
    </div>
    <div class="item">
              <img src="img/wd.jpg" alt="...">
            </div>
            <div class="item">
              <img src="img/6.jpg" alt="...">
            </div>
        <div class="item">
              <img src="img/7.jpg" alt="...">
            </div>
        <div class="item">
              <img src="img/8.jpg" alt="...">
            </div>
        <div class="item">
              <img src="img/9.jpg" alt="...">
            </div>
        <div class="item">
              <img src="img/10.jpg" alt="...">
            </div>
        <div class="item">
            <img src="img/11.jpg" alt="...">
              </div>
        <div class="item">
              <img src="img/12.jpg" alt="...">
            </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>


<div id="about" class="about aly">
  <div class="container">
    <div class="our-info text-center">
      <h2><span class="highlight">ABOUT</span> THE SITE</h2><br>
    </div>
    <div class="our-grids">
      <div class="our-grid" style="width:100%">
          <p style="font-size:medium;color:#FFFF00 "><b>A game is structured playing, usually undertaken for enjoyment and sometimes used as an educational tool.[1] Games are distinct from work, which is usually carried out for remuneration, and from art, which is more often an expression of aesthetic or ideological elements. However, the distinction is not clear-cut, and many games are also considered to be work (such as professional players of spectator sports/games) or art (such as jigsaw puzzles or games involving an artistic layout such as Mahjong, solitaire, or some video games).

Key components of games are goals, rules, challenge, and interaction. Games generally involve mental or physical stimulation, and often both. Many games help develop practical skills, serve as a form of exercise, or otherwise perform an educational, simulational, or psychological role.

Attested as early as 2600 BC,[2][3] games are a universal part of human experience and present in all cultures. The Royal Game of Ur, Senet, and Mancala are some of the oldest known games.
Games are often classified by the components required to play them (e.g. miniatures, a ball, cards, a board and pieces, or a computer). In places where the use of leather is well established, the ball has been a popular game piece throughout recorded history, resulting in a worldwide popularity of ball games such as rugby, basketball, football, cricket, tennis, and volleyball. Other tools are more idiosyncratic to a certain region. Many countries in Europe, for instance, have unique standard decks of playing cards. Other games such as chess may be traced primarily through the development and evolution of its game pieces.

Many game tools are tokens, meant to represent other things. A token may be a pawn on a board, play money, or an intangible item such as a point scored.

Games such as hide-and-seek or tag do not utilise any obvious tool; rather, their interactivity is defined by the environment. Games with the same or similar rules may have different gameplay if the environment is altered. For example, hide-and-seek in a school building differs from the same game in a park; an auto race can be radically different depending on the track or street course, even with the same cars.</b></p>
      </div>
    </div>
  </div>
</div>

<div id="news" class="news cont">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-center"><br><br><br>LATEST NEWS AND UPDATES</h3>
      <p><center>ALL THE LATEST GAMING NEWS AND UPDATE.</center></p>
      <ul class="timeline">
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>news 1</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">blah blah blah</p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>news Two</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">  blah blah blah   </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>news Three</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">blah blah blah</p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>news Three</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">blah blah blah </p>
            </div>
          </div>
          <div class="line"></div>
        </li>
        <li>
          <div class="timeline-image">
            <img class="img-circle img-responsive" src="" alt="">
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4>news Step</h4>
              <h4 class="subheading">Subtitle</h4>
            </div>
            <div class="timeline-body">
              <p class="text-muted">blah blah blah </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

<div id="contact" class="contact abcd">
<div class="container">
    <div class="row">
        <h1 class="title"><br>This is our awesome team<br><small>Small but kick ass</small></h1>
        <div class="col-sm-20 col-sm-offset-2">
         <div class="col-md-5 col-sm-10">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/rotating_card_thumb.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/aly.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Aly Akhtar</h3>
                                <p class="profession">CEO</p>
                                <h5><i class="fa fa-map-marker fa-fw text-muted"></i> New Delhi, India</h5>
                                <h5><i class="fa fa-building-o fa-fw text-muted"></i> Console Wars Inc. </h5>
                                <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> alyakhtar94@gmail.com</h5>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Experince</h4>
                                <p>In the project since 2012</p><br>
                                <h4 class="text-center">Areas of Expertise</h4>
                                <p>Web design, HTML5, CSS3, PhP and many others...</p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://fb.com/alyakhtar" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="https://plus.google.com/u/0/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://github.com/alyakhtar" class="twitter"><i class="fa fa-github fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> 
        <div class="col-md-5 col-sm-15">
            <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/rotating_card_thumb3.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/sameer.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Sameer Khan</h3>
                                <p class="profession">CEO</p>
                                <h5><i class="fa fa-map-marker fa-fw text-muted"></i> New Delhi, India</h5>
                                <h5><i class="fa fa-building-o fa-fw text-muted"></i> Console Wars Inc. </h5>
                                <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> sameerkhan7494@gmail.com</h5>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Nobodys a virgin, at the end life fucks everyone!"</h5>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Experince</h4>
                                <p>In the project since 2012</p><br>
                                <h4 class="text-center">Areas of Expertise</h4>
                                <p>Web design, HTML5, CSS3, Bakchodi and many others...</p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="https://fb.com/mohdsameerkhan24" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://https://fb.com/mohdsameerkhan24" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://github.com/msameerkhan" class="twitter"><i class="fa fa-github fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
        </div> <!-- end col-sm-10 --> 
    </div> <!-- end row -->
    <div class="space-200"></div>    
</div>
</div>
<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();
        
    });
    
    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46172202-4', 'auto');
  ga('send', 'pageview');

</script>
<footer style="padding-bottom:55px; padding-top:40px; background-image:url(img/rotating_card_thumb.png) ;padding-left:-250px;">      
    <a style="position:absolute; left:170px; font-weight:bold; font-size:15px; color:black;" href="#feedback" data-toggle="modal">Feedback</a>
    <a style="position:absolute;  left:440px; font-weight:bold; font-size:15px;color:black;" href="page7.html" >Terms & Conditions</a>
    <a style="position:absolute;  left:800px; font-weight:bold; font-size:15px;color:black;" href="#about" >About Us</a>
    <a style="position:absolute;  left:1100px; font-weight:bold; font-size:15px;color:black;" href="#contact" data-toggle="modal">Contact Us</a><br><br><br>
    <p style="position:absolute;  left:440px; font-weight:bold; font-size:15px; color:#000000">Copyright &copy; 2014-<?php echo date("Y")?></p>
    <a style="position:absolute;  left:800px; font-weight:bold; font-size:15px;color:black;"href="https://fb.com/aly.akhtar"><i class="fa fa-facebook-square fa-2x"></i></a>
    <a style="position:absolute;  left:830px; font-weight:bold; font-size:15px;color:black;"href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
    <a style="position:absolute;  left:860px; font-weight:bold; font-size:15px;color:black;"href="#"><i class="fa fa-google-plus-square fa-2x"></i></a> 
    <a style="position:absolute;  left:890px; font-weight:bold; font-size:15px;color:black;"href="#"><i class="fa fa-rss-square fa-2x"></i></a>  
</footer>



<!-- ************************************************************************************************ -->

<div class="modal fade" id="feedback" role="dialog" >
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="form-horizontal"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
          <div class="modal-header">
            <h4>Feedback</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="contact-name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="First & Last Name" name="name">
              </div>
            </div>
            <div class="form-group">
              <label for="contact-email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="example@domain.com" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="contact-message" class="col-sm-2 control-label" >Message</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="comment"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <!-- <a class="btn btn-danger" data-dismiss="modal" >Close</a>                                                -->
            <input type="submit"  class="btn btn-primary" value="SEND" name="send">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- <div class="modal fade login" id="loginModal">
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" accept-charset="UTF-8">
                                      <input id="username" class="form-control" type="text" placeholder="User Name" name="username">
                                      <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                      <input class="btn btn-default btn-login" type="submit" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" accept-charset="UTF-8">
                                  <input id="username2" class="form-control" type="text" placeholder="User Name" name="username2">
                                  <input id="password" class="form-control" type="password" placeholder="Password" name="password2">
                                  <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                  <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
              </div>
          </div>
      </div> -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
