<?php

include 'token.php';
 
$csrf = new csrf();
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
if($csrf->check_valid('post')) {
  var_dump($_POST[$token_id]);
} 
?>

<?php 
include('server.php') 


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
	 
  <form method="post" action="loginfrom.php">
  	  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required="" value="<?php if(isset($_COOKIE["memberlogin"])) { echo $_COOKIE["username"]; } ?>" class="form-control" >  
    </div> 
  	</div>
  	<div class="input-group">
  		<label>Password</label>
      <input type="password" name="password" required="" value="<?php if(isset($_COOKIE["memberpassword"])) { echo $_COOKIE["password"]; } ?>" class="form-control">   
    </div> 
    
      
    <div class="input-group">  
     <input type="checkbox" name="remember" value="<?php if(isset($_COOKIE["membername"])) { ?> checked <?php } ?>" >  
     <label for="remember-me">Remember me</label>  
    </div> 
     
    <div class="input-group">  
     <div><input type="submit" name="login" value="Login" class="btn btn-success"></span></div>  
    </div> 
    <div class="input-group">
      <div class="link forget-pass text-left"><a href="forgetpassword.php">Forgot password?</a></div>
      </div> 
  	</div>
  	
  	<p>
  	Signup for a new member? <a href="signup.php">Sign up</a>
  	</p>
    <input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
  </form>
  
</body>
</html>