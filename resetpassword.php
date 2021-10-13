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
  <?php 
$selector=$_GET['selector'];
if(empty($selector)){
  echo " no validation to the requested";
}
else{

?>
  
  <div class="header">
  	<h2>RESET PASSWORD</h2>
  </div>
	 
  <form method="post" action="resetpass.php">
  	  	 
  	
  	<div class="input-group">
  		<label>New Password</label>
      <input type="password" name="newpassword" required="" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters">   
    </div> 
    
      
    <div class="input-group"> 
     <label>Confirm Password</label>
     <input type="password" name="confirmpassword" required="" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters">  
     
    </div> 
     
    <div class="input-group">  
     <div><input type="submit" name="pass" value="Reset" class="btn btn-success"></span></div>  
    </div> 
    <div class="input-group"> 
     <div><input type="hidden" name="selector" value="<?php echo $selector;?> "></div>

    </div> 
    
  
  	
  	
  </form>
  
</body>
</html>
<?php }?>