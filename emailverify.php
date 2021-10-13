<?php
session_start();

require_once('server.php');

// LOGIN USER
if (isset($_POST['verifybutton'])) {
  
    $email=$_SESSION['email'];
    $code=$_POST['code'];

    
   $query = "SELECT * FROM users WHERE code=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('i',$code);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
      $query = "UPDATE users SET status='Verified' WHERE email=? ";
  $stmti = $db->prepare($query);
$stmti->bind_param('s',$email);
$stmti->execute();
$stmti->close();
header('location:index.php');

    }
  else{
    echo "Wrong activation code ";
  }

  }

//..........................................
  //Verify after creating an account




?>