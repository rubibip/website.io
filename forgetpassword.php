<?php 
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css1.css">
</head>
<body>
   
            
                <form action="forgerp.php" method="POST" >
                    <h2>Forget Password</h2>
                    <div class="input-group">
      <label>ENTER your Email</label>
      <input type="email" name="email" required value="">
    </div>
                    
                    
                    <div class="input-group">
                        <input type="submit" name="subm" value="Click and Resend">
                    </div>
                </form>
            
    
</body>
</html>