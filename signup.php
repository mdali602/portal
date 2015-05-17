
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    
    
  <link href="form/style.css" rel="stylesheet" type="text/css">
<!--
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->

    
</head>
<body>
<div class="container">    
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
              
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px">Already Registered? <a id="signinlink" href="login.php">Sign In</a></div>
            </div>  
                
            <div class="panel-body" id="maincontent">
                <form class="form-horizontal" id="registration-form" action="signup.php" method="POST">
                                 
                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Your Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="confirm_password" class="col-md-3 control-label">Confirm-Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm-Password" />
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" />
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label for="phone" class="col-md-3 control-label">Phone No.</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone no." />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name='submit' class="btn btn-info" value='Sign Up' />
                            <span style="margin-left:8px;"></span>  
                        </div>
                   </div>
                          <!--       
                        <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">            
                <div class="col-md-offset-3 col-md-9">
                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                            </div>         
                        </div> -->
                                
                    </form> <!-- end form -->
                </div>      <!-- panel body -->
            </div>  <!-- ebd panel info -->
    
         </div>     <!-- end sign up box --> 
    </div>  <!-- end panel body -->
    </div>  <!-- end container -->
    <script src="form/assets/js/jquery-1.7.1.min.js"></script>

    <script src="form/assets/js/jquery.validate.js"></script> 

    <script src="form/script.js"></script> 
    <script>
    addEventListener('load', prettyPrint, false);
    $(document).ready(function(){
    $('pre').addClass('prettyprint linenums');
    });
    </script> 


</body>		<!-- end body -->
</html>
 
<?php
  
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");

    if(isset($_POST['submit'])) {
  
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    if($password!=$confirm_password) {
      echo "<script> alert('Please.. fill all the details correctly!') </script>";
      exit();
    }
    
    $check="SELECT * FROM users where username='$username'";
    
    $run=mysql_query($check);
    
    if(mysql_num_rows($run) > 0) {
      echo "<script> alert('Username $username is already exist in our database. Please try another one!') </script>";
      exit();
    }
    
    $check_email="SELECT * FROM users where email='$email'";
    
    $run=mysql_query($check_email);
    
    if(mysql_num_rows($run) > 0) {
      echo "<script> alert('Email $email is already exist in our database. Please try another one!') </script>";
      exit();
    }  
    
    $query="Insert into users (name, username , password, email, phone) values ('$name', '$username', '$password', '$email', '$phone')";
    
    if(mysql_query($query)>0) {
      session_start();
      $_SESSION['username']=$username;

      echo "<script> window.open('welcome.php', '_self')</script>";
    }
  }

?>