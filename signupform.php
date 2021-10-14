<?php 
session_start();
include "server.php";

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = sha1($password_1);//encrypt the password before saving in the database
    $code= mt_rand(100000, 999999);
$status="Not verified";
    //$_POST['code'];
    $query = "INSERT INTO users VALUES(NULL,?,?,?,?,?,?,?)";
    mysqli_query($db, $query);
    $stmti = $db->prepare($query);
    $salt="salting" .$password_1;
  $password=hash('sha1',$salt);
$stmti->bind_param('sssssss',$firstname,$lastname,$username,$email,$password,$code,$status);
$stmti->execute();
$stmti->close();
$_SESSION['username'] = $firstname;
$_SESSION['username'] = $lastname;
$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['code'] = $code;
     $to=$email;
    $from="From: rubiibipaul2018@gmail.com";
    $subject="Verification Code are";
    $message =$code;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location: verify_email.php');
  }
}

?>