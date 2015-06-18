<?php
include 'login.php'; 
include 'signup.php';
// if(isset($_SESSION['login_user'])){
//     header("location: ../index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>iBuy</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/custom.css" rel="stylesheet">	
		<link href="../css/font-awesome.min.css" rel="stylesheet">	
        <style type="text/css">
        @font-face { font-family: Anothershabby; src: url('fonts/Anothershabby.ttf'); } 
        @font-face { font-family: Hallosans; src: url('fonts/Hallosans.otf');}
        @font-face { font-family: orangejuice; src: url('fonts/orangejuice.ttf'); }
        @font-face { font-family: ZOMBIFIED; src: url('fonts/ZOMBIFIED.ttf'); } 
        @font-face { font-family: BlackWidow; src: url('fonts/BlackWidow.ttf'); }
        @font-face { font-family: Blazed; src: url('fonts/Blazed.ttf'); }   
        body 
        {
            background: #ffffff url(../img/news.jpg) repeat-x fixed center top;
            background-size:cover; 
            padding-bottom:70px;
            padding-top:50px;
        }   
        </style>  	 
	</head>
<body>


<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                   
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('#loginbox').hide(); $('#forgotbox').show()">Forgot password?</a></div>
                    </div> 

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                           
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="">  
                            <?php echo '<span style="color:red">'.$error.'</span>'; ?>                       
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username or Email">                                        
                            </div>                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="Password" value="">
                            </div>    
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                      <!--<a id="btn-login" href="home.html" class="btn btn-success">Login  </a>-->
                                       <p><input type="submit" class="btn btn-success" name="login" value="Login"></p>  
                                       <!-- <a id="btn-fblogin" href="https://www.fb.com" class="btn btn-primary">Login with Facebook</a> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Sign Up Here</a>
                                    </div>
                                </div>
                            </div>    
                        </form> 
                    </div>                     
            </div>  
        </div>

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                </div>  
                <div class="panel-body" >
                    <form id="signupform" class="form-horizontal" role="form" method="POST" action="">
                        
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p><?php echo $err?></p>
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name" >
                            </div>
                        </div>                                                         
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" placeholder="Email Address">
                            </div>
                        </div>                                
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpassword" class="col-md-3 control-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="cpasswd" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9" >
                                <!--<button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>-->
                                    <input type="submit" class="btn btn-danger" name="signup" value="Sign Up">      
                                <!-- <span style="margin-left:8px;">or</span>   -->
                            </div>
                        </div>
                        <!-- <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">                                    
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                            </div>
                         </div> -->                                     
                    </form>
                 </div>
            </div>
        </div>

        <div class="container">    
        <div id="forgotbox" style=" display:none;margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                   
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Forgot Password</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onclick="$('#forgotbox').hide(); $('#loginbox').show()">Sign In?</a></div>
                    </div> 

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                           
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="">  
                            <?php echo '<span style="color:red">'.$error.'</span>'; ?>                       
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="usrname" value="" placeholder="Username or Email">                                        
                            </div>                            
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success"  onclick="$('#forgotbox').hide(); $('#message').show()">Retrive</a>
                                       <!-- <p><input type="submit" class="btn btn-success" name="login" value="Retrieve"></p>   -->
                                       <!-- <a id="btn-fblogin" href="https://www.fb.com" class="btn btn-primary">Login with Facebook</a> -->
                                </div>
                            </div>    
                        </form> 
                    </div>                     
            </div>  
        </div>

        <div class="container">    
        <div id="message" style=" display:none;margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                   
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">MESSAGE</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onclick="$('#message').hide(); $('#loginbox').show()">Sign In?</a></div>
                    </div> 

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                           
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="">  
                            <p>AN EMAIL HAS BEEN SENT TO YOUR ACOUNT<br>PLEASE FOLLOW THE STEPS TO RESET YOUR PASSWORD.</p>    
                        </form> 
                    </div>                     
            </div>  
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- ===================================================== -->	
	
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>
</html>


