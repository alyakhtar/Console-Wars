<?php
  include 'database/session.php';
  include 'database/admindb.php';  
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
  <link rel="shortcut icon" href="img/logo.ico">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/admin.css" rel="stylesheet">
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
  <script src="js/admin.js" type="text/javascript"></script>    
</head>
<!-- *********************************************************************************************** -->
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
            MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                ConWars
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
            <form class="navbar-form navbar-left" method="GET" role="search">
                <div class="form-group">
                    <input type="text" name="q" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">                
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Administrator
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">SETTINGS</li>
                            <li><a href="index.php" target="_blank">Visit Site</a></li>
                            <li class=""><a href="cart.php" target="_ext">Cart</a></li>
                            <!-- <li class="divider"></li> -->
                            <li><a href="database/logout.php?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>      <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <div class="row">
    <div class="absolute-wrapper"> </div>
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#dashboard" onClick="$('#dashboard').show();$('#feedback').hide(); $('#users').hide();$('#comments').hide();$('#carousel').hide();$('#news').hide();$('#gameremove').hide();$('#gameadd').hide();"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                    <li ><a href="#feedback" onClick="$('#feedback').show(); $('#dashboard').hide();$('#users').hide();$('#comments').hide();$('#carousel').hide();$('#news').hide();$('#gameremove').hide();$('#gameadd').hide();"><span class="glyphicon glyphicon-user"></span> Feedback</a></li>
                    <li><a href="#users" onClick="$('#dashboard').hide();$('#feedback').hide(); $('#users').show();$('#comments').hide();$('#carousel').hide();$('#news').hide();$('#gameremove').hide();$('#gameadd').hide();"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                    <li><a href="#" onClick="$('#dashboard').hide();$('#feedback').hide(); $('#users').hide();$('#comments').show();$('#carousel').hide();$('#news').hide();$('#gameremove').hide();$('#gameadd').hide();"><span class="glyphicon glyphicon-comment"></span> Comments</a></li>
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#dropdown-lvl1">
                            <span class="glyphicon glyphicon-list-alt"></span> Web Pages <span class="caret"></span>
                        </a>
                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="nav navbar-nav">
                                    <li><a href="#" onClick="$('#dashboard').hide(); $('#feedback').hide();$('#users').hide();$('#comments').hide();$('#carousel').show();$('#news').hide();$('#gameremove').hide();$('#gameadd').hide();">Carousel</a></li>
                                    <li><a href="#" onClick="$('#dashboard').hide(); $('#feedback').hide();$('#users').hide();$('#comments').hide();$('#carousel').hide();$('#news').show();$('#gameremove').hide();$('#gameadd').hide();">News</a></li>
                                    <!-- <li><a href="#">Games</a></li> -->
                                    <li class="panel panel-default" id="dropdown">
                                        <a data-toggle="collapse" href="#dropdown-lvl2"><i class="fa fa-gamepad"></i></span> Games <span class="caret"></span></a>
                                        <div id="dropdown-lvl2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="#" onClick="$('#dashboard').hide(); $('#feedback').hide();$('#users').hide();$('#comments').hide();$('#carousel').hide();$('#news').hide();$('#gameremove').hide();$('#gameadd').show();">Add</a></li>
                                                    <li><a href="#" onClick="$('#dashboard').hide(); $('#feedback').hide();$('#users').hide();$('#comments').hide();$('#carousel').hide();$('#news').hide();$('#gameremove').show();$('#gameadd').hide();">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>          
</div>
    <div class="col-md-10 content" id="dashboard">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                This is the Administration Page. All the details and the contents of the website can be managed through this page.<br>
                Any Notification for other admins should be posted here.
            </div>
        </div>
    </div>
    <div class="col-md-10 content" id="feedback" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                Feedback
            </div>
            <ul class="list-group">
                <?php
                $query=mysql_query('select * from feedback');
                while($row=mysql_fetch_array($query)){
                    if ($row[1] != ""){
                        echo '<li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-10 col-md-11">
                                    <div>
                                        <p >'.$row[1].'</p>
                                        <div >
                                            <p>E-mail: '.$row[2].'</p> 
                                            <p>Feedback: '.$row[3].'</p>
                                        </div>
                                    </div>
                                    <div class="action">                               
                                        <a type="button" class="btn btn-danger btn-xs" title="Delete" href="database/admindb.php?feedback_id='.$row[0].'">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    }                    
                }
                ?>                   
            </ul>
        </div>
    </div>
    <div class="col-md-10 content" id="users" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of all the Users
            </div>
            <ul class="list-group">
                <?php
                $query=mysql_query('select * from users');
                while($row=mysql_fetch_array($query)){
                    if($row[1] != "admin"){
                        echo '<li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <img src="img/'.$row[6].'" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-11">
                                    <div>
                                        <p >'.$row[1].'</p>
                                        <div >
                                            <p>E-mail: '.$row[2].'</p>
                                            <p>Joioned on: '.$row[4].'</p>
                                            <p>Phone: '.$row[5].'</p> 
                                        </div>
                                    </div>
                                    <div class="action">
                                        <!-- <a type="button" class="btn btn-primary btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a type="button" class="btn btn-success btn-xs" title="Approved">
                                            <span class="glyphicon glyphicon-ok"></span>
                                        </a> -->                                
                                        <a type="button" class="btn btn-danger btn-xs" title="Delete" href="database/admindb.php?user_id='.$row[0].'">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>'; 
                    }
                }
                ?>                   
            </ul>
        </div>
    </div>
    <div class="col-md-10 content" id="comments" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of all the User Comments
            </div>
            <ul class="list-group">
                <?php
                $query=mysql_query('select * from comment');
                while($row=mysql_fetch_array($query)){
                    $query2=mysql_query("select image from users where id IN (Select user_id from comment where user = '$row[3]') ");
                    $res=mysql_fetch_array($query2);
                    echo '<li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="img/'.$res[0].'" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <p >'.$row[3].'</p>
                                    <div >
                                        <p>Comment: '.$row[1].'</p> 
                                        <p>Console: '.$row[2].'</p>
                                        <p>Comment on: '.$row[4].'</p>
                                    </div>
                                </div>
                                <div class="action">
                                    <!-- <a type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a> -->                                
                                    <a type="button" class="btn btn-danger btn-xs" title="Delete" href="database/admindb.php?comment_id='.$row[0].'">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>';                    
                }
                ?>                   
            </ul>
        </div>
    </div>
    <div class="col-md-10 content" id="carousel" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                Carausel Images
            </div>
            <div class="panel-body">
                Change the pictures of carousel here.
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel1" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 1: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload1" value="Upload" style="text-align:right;float:right;">
                                <!-- <a href="database/admindb.php?upload=1" class="btn btn-danger" style="text-align:right;float:right;">Upload</a> -->
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel2" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 2: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload2"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel3" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 3: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload3"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel4" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 4: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload4"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel5" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 5: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload5"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel6" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 6: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload6"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel7" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 7: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload7"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel8" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 8: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload8"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="carousel9" role="form" enctype="multipart/form-data">
                                <p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> Image 9: </p>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <input type="submit" class="btn btn-danger" name="upload9"  value="Upload" style="text-align:right;float:right;">
                            </form>                            
                        </div>
                    </div>
                </li>                                  
            </ul>
        </div>        
    </div>
    <div class="col-md-10 content" id="news" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                News on Index Page
            </div>
            <div class="panel-body">
                Change the News Heading , sub-heading , body and the image.
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="news1" role="form" enctype="multipart/form-data">
                                <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> News 1: </p></b>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <p style="text-align:right;float:right;margin-right:100px"> Dimension: 250 x 250</p>
                                <textarea class="form-control" name="heading" rows="1" style="margin-bottom:10px" placeholder="HEADING (MAX 50 CHARACTER)"></textarea>
                                <textarea class="form-control" name="subheading" rows="1" style="margin-bottom:10px" placeholder="SUB-HEADING (MAX 100 CHARACTER)"></textarea>
                                <textarea class="form-control" name="body" rows="5" placeholder="BODY (MAX 1000 CHARACTER)"></textarea>
                                <input type="submit" class="btn btn-danger" name="up1" value="Upload" style="text-align:right;float:right;margin-top:10px">                                
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="news2" role="form" enctype="multipart/form-data">
                                <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> News 2: </p></b>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;">
                                <p style="text-align:right;float:right;margin-right:100px"> Dimension: 250 x 250</p> 
                                <textarea class="form-control" name="heading" rows="1" style="margin-bottom:10px" placeholder="HEADING (MAX 50 CHARACTER)"></textarea>
                                <textarea class="form-control" name="subheading" rows="1" style="margin-bottom:10px" placeholder="SUB-HEADING (MAX 100 CHARACTER)"></textarea>
                                <textarea class="form-control" name="body" rows="5" placeholder="BODY (MAX 1000 CHARACTER)"></textarea>
                                <input type="submit" class="btn btn-danger" name="up2" value="Upload" style="text-align:right;float:right;margin-top:10px">                                
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="news3" role="form" enctype="multipart/form-data">
                                <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> News 3: </p></b>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <p style="text-align:right;float:right;margin-right:100px"> Dimension: 250 x 250</p>
                                <textarea class="form-control" name="heading" rows="1" style="margin-bottom:10px" placeholder="HEADING (MAX 50 CHARACTER)"></textarea>
                                <textarea class="form-control" name="subheading" rows="1" style="margin-bottom:10px" placeholder="SUB-HEADING (MAX 100 CHARACTER)"></textarea>
                                <textarea class="form-control" name="body" rows="5" placeholder="BODY (MAX 1000 CHARACTER)"></textarea>
                                <input type="submit" class="btn btn-danger" name="up3" value="Upload" style="text-align:right;float:right;margin-top:10px">                                
                            </form>                            
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1"></div>
                        <div class="col-xs-10 col-md-11">                                                            
                            <form action="" method="post" class="form-horizontal" id="news4" role="form" enctype="multipart/form-data">
                                <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px"> News 4: </p></b>
                                <input type="file" name="image" id="fileToUpload" style="text-align:left;float:left;padding-top:5px;"> 
                                <p style="text-align:right;float:right;margin-right:100px"> Dimension: 250 x 250</p>
                                <textarea class="form-control" name="heading" rows="1" style="margin-bottom:10px" placeholder="HEADING (MAX 50 CHARACTER)"></textarea>
                                <textarea class="form-control" name="subheading" rows="1" style="margin-bottom:10px" placeholder="SUB-HEADING (MAX 100 CHARACTER)"></textarea>
                                <textarea class="form-control" name="body" rows="5" placeholder="BODY (MAX 1000 CHARACTER)"></textarea>
                                <input type="submit" class="btn btn-danger" name="up4" value="Upload" style="text-align:right;float:right;margin-top:10px">                                
                            </form>                            
                        </div>
                    </div>
                </li>                                  
            </ul>
        </div>
    </div>
    <div class="col-md-10 content" id="gameremove" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                Remove Games from Game list 
            </div>
            <div class="panel-body">
                <!-- Remove from  <a href="#dashboard" onClick="$('#ps3').show();$('#ps4').hide();$('#xbox').hide();$('#xbox1').hide();"> PS3 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').show();$('#xbox').hide();$('#xbox1').hide();"> PS4 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').show();$('#xbox1').hide();"> XBOX 360 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').hide();$('#xbox1').show();"> XBOX ONE </a> -->
                Remove From
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Console
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a href="#dashboard" onClick="$('#ps3').show();$('#ps4').hide();$('#xbox').hide();$('#xbox1').hide();"> PS3 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').show();$('#xbox').hide();$('#xbox1').hide();"> PS4 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').show();$('#xbox1').hide();"> XBOX 360 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').hide();$('#xbox1').show();"> XBOX ONE </a></li>
                    </ul>
                  </div>
            </div>
            <div id="ps3" style="display:none">
                <?php
                $query=mysql_query('select * from ps3');
                while($row=mysql_fetch_array($query)){
                    echo '<ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1"></div>
                                <div class="col-xs-10 col-md-11"> 
                                    <p style="text-align:left;float:left;padding-top:5px;margin-right:300px"> Game : '.$row[1].'</p>
                                    <!--<p style="text-align:left;float:left;padding-top:5px;margin-right:-300px"> Price : '.$row[2].'</p>-->
                                    <a href="database/admindb.php?remove1='.$row[0].'" class="btn btn-danger" style="text-align:right;float:right;">Remove</a> 
                                </div>
                            </div>
                        </li>                                  
                    </ul>';
                }
                ?>
            </div>
            <div id="ps4" style="display:none">
                <?php
                $query=mysql_query('select * from ps4');
                while($row=mysql_fetch_array($query)){
                    echo '<ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1"></div>
                                <div class="col-xs-10 col-md-11"> 
                                    <p style="text-align:left;float:left;padding-top:5px;margin-right:300px"> Game : '.$row[1].'</p>
                                    <!--<p style="text-align:left;float:left;padding-top:5px;margin-right:-300px"> Price : '.$row[2].'</p>-->
                                    <a href="database/admindb.php?remove2='.$row[0].'" class="btn btn-danger" style="text-align:right;float:right;">Remove</a> 
                                </div>
                            </div>
                        </li>                                  
                    </ul>';
                }
                ?>
            </div>
            <div id="xbox" style="display:none">
                <?php
                $query=mysql_query('select * from xbox360');
                while($row=mysql_fetch_array($query)){
                    echo '<ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1"></div>
                                <div class="col-xs-10 col-md-11"> 
                                    <p style="text-align:left;float:left;padding-top:5px;margin-right:300px"> Game : '.$row[1].'</p>
                                    <!--<p style="text-align:left;float:left;padding-top:5px;margin-right:-300px"> Price : '.$row[2].'</p>-->
                                    <a href="database/admindb.php?remove3='.$row[0].'" class="btn btn-danger" style="text-align:right;float:right;">Remove</a> 
                                </div>
                            </div>
                        </li>                                  
                    </ul>';
                }
                ?>
            </div>
            <div id="xbox1" style="display:none">
                <?php
                $query=mysql_query('select * from xboxone');
                while($row=mysql_fetch_array($query)){
                    echo '<ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1"></div>
                                <div class="col-xs-10 col-md-11"> 
                                    <p style="text-align:left;float:left;padding-top:5px;margin-right:300px"> Game : '.$row[1].'</p>
                                    <!--<p style="text-align:left;float:left;padding-top:5px;margin-right:-300px"> Price : '.$row[2].'</p>-->
                                    <a href="database/admindb.php?remove4='.$row[0].'" class="btn btn-danger" style="text-align:right;float:right;">Remove</a> 
                                </div>
                            </div>
                        </li>                                  
                    </ul>';
                }
                ?>
            </div>
        </div>        
    </div>
    <div class="col-md-10 content" id="gameadd" style="display:none">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add new Games 
            </div>
            <div class="panel-body">
                <!-- Remove from  <a href="#dashboard" onClick="$('#ps3').show();$('#ps4').hide();$('#xbox').hide();$('#xbox1').hide();"> PS3 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').show();$('#xbox').hide();$('#xbox1').hide();"> PS4 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').show();$('#xbox1').hide();"> XBOX 360 </a><a href="#dashboard" onClick="$('#ps3').hide();$('#ps4').hide();$('#xbox').hide();$('#xbox1').show();"> XBOX ONE </a> -->
                Add To
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Console
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                      <li role="presentation"><a href="#dashboard" onClick="$('#p3').show();$('#p4').hide();$('#box').hide();$('#box1').hide();"> PS3 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#p3').hide();$('#p4').show();$('#box').hide();$('#box1').hide();"> PS4 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#p3').hide();$('#p4').hide();$('#box').show();$('#box1').hide();"> XBOX 360 </a></li>
                      <li role="presentation"><a href="#dashboard" onClick="$('#p3').hide();$('#p4').hide();$('#box').hide();$('#box1').show();"> XBOX ONE </a></li>
                    </ul>
                  </div>
            </div>
            <div id="p3" style="display:none">
                <form action="" method="post" class="form-horizontal" id="addgame1" role="form" enctype="multipart/form-data">
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px;padding-left:50px"> Game: </p></b>
                    <textarea name="gamename" rows="1" style="margin-bottom:10px" placeholder="Name"></textarea><br>
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:105px;padding-left:50px" > Price: </p></b>
                    <textarea rows="1" name="gameprice" style="margin-bottom:10px" placeholder="Price"></textarea>                                
                    <input type="submit" class="btn btn-danger" name="add1" value="Add" style="text-align:right;float:right;margin-top:-5px;margin-right:10px">                                
                </form>
            </div>
            <div id="p4" style="display:none">
                <form action="" method="post" class="form-horizontal" id="addgame2" role="form" enctype="multipart/form-data">
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px;padding-left:50px"> Game: </p></b>
                    <textarea name="gamename" rows="1" style="margin-bottom:10px" placeholder="Name"></textarea><br>
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:105px;padding-left:50px" > Price: </p></b>
                    <textarea rows="1" name="gameprice" style="margin-bottom:10px" placeholder="Price"></textarea>                                
                    <input type="submit" class="btn btn-danger" name="add2" value="Add" style="text-align:right;float:right;margin-top:-5px;margin-right:10px">                                
                </form>
            </div>
            <div id="box" style="display:none">
                <form action="" method="post" class="form-horizontal" id="addgame3" role="form" enctype="multipart/form-data">
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px;padding-left:50px"> Game: </p></b>
                    <textarea name="gamename" rows="1" style="margin-bottom:10px" placeholder="Name"></textarea><br>
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:105px;padding-left:50px" > Price: </p></b>
                    <textarea rows="1" name="gameprice" style="margin-bottom:10px" placeholder="Price"></textarea>                                
                    <input type="submit" class="btn btn-danger" name="add3" value="Add" style="text-align:right;float:right;margin-top:-5px;margin-right:10px">                                
                </form>
            </div>
            <div id="box1" style="display:none">
                <form action="" method="post" class="form-horizontal" id="addgame4" role="form" enctype="multipart/form-data">
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:100px;padding-left:50px"> Game: </p></b>
                    <textarea name="gamename" rows="1" style="margin-bottom:10px" placeholder="Name"></textarea><br>
                    <b><p style="text-align:left;float:left;padding-top:5px;margin-right:105px;padding-left:50px" > Price: </p></b>
                    <textarea rows="1" name="gameprice" style="margin-bottom:10px" placeholder="Price"></textarea>                                
                    <input type="submit" class="btn btn-danger" name="add4" value="Add" style="text-align:right;float:right;margin-top:-5px;margin-right:10px">                                
                </form>
            </div>
        </div>        
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
            <hr class="divider">
            Copyright &COPY; 2014-<?php echo date("Y"); ?> <a href="">ConWars</a>
        </p>
    </footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>