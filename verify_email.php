<?php 
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>verify email </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css1.css">
</head>
<body>
   
            
                <form action="emailverify.php" method="POST" >
                    <h2>Verification Code</h2>
                    <div class="input-group">
      <label>ENTER your  Code</label>
      <input type="text" name="code" required value="">
    </div>
                    
                    
                    <div class="input-group">
                        <input type="submit" name="verifybutton" value="Resend">
                    </div>
                </form>
            
    
</body>
</html>