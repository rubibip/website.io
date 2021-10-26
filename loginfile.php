<?php

include 'token.php';
 
$csrf = new csrf();
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
if($csrf->check_valid('post')) {
  var_dump($_POST[$token_id]);
} 
?>


<!DOCTYPE html>
<html>
<head>
  <title>WEB SITE</title>
  <link rel="stylesheet" type="text/css" href="css1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="verifynow.php">
  	  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required=""  onblur="if(this.name=='')this.name='Username';" onfocus="if(this.name=='username')this.name='';" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"  class="form-control" >  
    </div> 
  	</div>
  	<div class="input-group">
  		<label>Password</label>
      <input type="password" name="password" required="" onblur="if(this.name=='')this.name='Password';" onfocus="if(this.name=='Password')this.name='';" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" class="form-control">   
    </div> 
    
      
    <div class="input-group">  
     <input type="checkbox" name="remember" value="<?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?>"/>  
     <label for="remember-me">Remember me</label>  
    </div> 
     <div class="link forget-pass text-left"><a href="forgetpassword.php">Forgot password?</a></div>
    <div class="input-group">  
     <div><input type="submit" name="login" class="btn btn-success"></div>  
    </div>
    <div>
      <p><a href="verify_email.php">verify now</a></p></div> 
     
  	</div>

  </form>
  
</body>
</html>