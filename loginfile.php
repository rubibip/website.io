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
	 
  <form method="post" action="verifynow.php">
  	  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required="" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="form-control" >  
    </div> 
  	</div>
  	<div class="input-group">
  		<label>Password</label>
      <input type="password" name="password" required="" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="form-control">   
    </div> 
    
      
    <div class="input-group">  
     <input type="checkbox" name="remember" value="<?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?>"/>  
     <label for="remember-me">Remember me</label>  
    </div> 
     
    <div class="input-group">  
     <div><input type="submit" name="verifynow" value="Login" class="btn btn-success"></span></div>  
    </div> 
     
  	</div>

  </form>
  
</body>
</html>