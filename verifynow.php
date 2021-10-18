<?php 
 //LOGIN USER
if (isset($_POST['login ']) {
  $d = $db->real_escape_string($_POST['username']);
  $e = $db->real_escape_string($_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {

    $cpassword=$password;
    $password = sha1($password);
    $query = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss',$username,$password);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
    
$query = "SELECT * FROM users WHERE status='Verified' ";
    $stmt = $db->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
   
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";

      // if remember me clicked . Values will be stored in $_COOKIE  array
      if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("memberlogin",$_POST["username"],time()+ (10 * 365  24 * 60 * 60));
//COOKIES for password
setcookie ("memberpassword",$cpassword,time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["memberlogin"])) {
setcookie ("memberlogin","");
if(isset($_COOKIE["memberpassword"])) {
setcookie ("memberpassword","");
        }
      }
  
  }
  header('location:index.php');
}
}
else{

array_push($errors, "Account Not Verified ");
array_push($verifynow, "Verify Now ");
}
}else {
      array_push($errors, "Wrong username/password combination ");
    }}

?>