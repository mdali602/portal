<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bootstrap jQuery Validate form : twitterbootstrap.org</title>
<meta name="viewport" content="width=device-width">
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
<div class="container">
  <div class="row-fluid">
    <div class="span12">
    <h1>Twitter Bootstrap jQuery Validate Registration form</h1>
    </div>
  </div>
  <div class="row-fluid">
  <div class="span6 offset6">
    <div id="maincontent" class="span8"> 
      
      <form id="registration-form" class="form-horizontal">
       
          <h1>Sample Registration form <small>(Fill up the forms to get register)</small></h1>
          <br/>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Your Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="name" id="name">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">User Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="username" id="username">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Password</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="password" id="password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name"> Retype Password</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="confirm_password" id="confirm_password">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email">
            </div>
          </div>
          <div class="form-control-group">
            <label class="control-label" for="message">Your Address</label>
            <div class="controls">
              <textarea class="input-xlarge" name="address" id="address" rows="3"></textarea>
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="message"> Please agree to our policy</label>
            <div class="controls">
             <input id="agree" class="checkbox" type="checkbox" name="agree">
            </div>
          </div>
          
          <div class="form-actions">
            <button type="submit" class="btn btn-success btn-large">Register</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
  
      </form>
    </div>
    <!-- .span --> 
  </div>
  <!-- .row -->
  
</div>
<!-- .container --> 

<script src="assets/js/jquery-1.7.1.min.js"></script> 

<script src="assets/js/jquery.validate.js"></script> 

<script src="script.js"></script> 
<script>
		addEventListener('load', prettyPrint, false);
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
		</script> 

</body>
</html>
