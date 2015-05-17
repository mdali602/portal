<?php
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");

    session_start();
    if($_SESSION['username']) {
      // header("location: view_jobs.php");
       $username=$_SESSION['username'];
       $query="SELECT * FROM users WHERE username='$username'";
       $run=mysql_query("$query");
       if(mysql_num_rows($run) > 0) {
           // echo "<script> alert('You are already logged in as job-seeker....First logout from job-seeker\'s Panel!')</script>";
           // header("location: view_profile_rec.php");
           // echo "<script> window.open('view_profile.php', '_self')</script>";
           session_destroy();
           header("location: login_rec.php");
           exit();
       }
       header("location: view_profile_rec.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body> 
    <div class="container">
        <p style="margin-left: 26%; margin-top: 9%; margin-bottom: -5%;">Goto Job_Seeker Panel<a href="login.php"> Click here...</a></p>
    </div>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style="width:90%; margin-top:15%;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="login_rec.php" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
				      <input type="submit" name='login' class="btn btn-success" value='Login'>

<!--                                       <a id="btn-login" href="#" class="btn btn-success" name="login">Login  </a> -->
<!--                                       <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> -->

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="signup_rec.php" >
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     

                        </div>                     
                    </div>  
        </div>
      
    </div>
</body>
</html>
  
<?php
  
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");

  
  if(isset($_POST['login'])) {
  
    $username=$_POST['username'];
    $password=$_POST['password'];

    $check_user="SELECT * FROM recruiters WHERE username='$username' AND password='$password'";
    
    $run=mysql_query($check_user);
    
    if(mysql_num_rows($run) > 0) {
      session_start();
      $_SESSION['username']=$username;
//       echo $check_user;

      echo "<script> window.open('view_profile_rec.php', '_self')</script>";
//       echo "<script> alert('Login Successfull!')</script>";
    }
    else {
      echo "<script> alert('username or password is incorrect!')</script>";
    }
    
  }

?>