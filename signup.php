<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>WEB SITE</title>
  <link rel="stylesheet" type="text/css" href="css1.css">
  

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="signupform.php">
  	
  <div class="input-group">
      <label>First name</label>
      <input type="text" name="firstname" value="<?php echo $firstname; ?>" required >
    </div>
    <div class="input-group">
      <label>Last name</label>
      <input type="text" name="lastname" value="<?php echo $lastname; ?>" required >
    </div>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" required >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters" required=""  >
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters" required  >
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">SignUp</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>