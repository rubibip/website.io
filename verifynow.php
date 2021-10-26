<?php 
include('server.php') 


?>
<?php 
 //LOGIN USER
if (isset($_POST['verifynow'])) {
  $d = $db->real_escape_string($_POST['username']);
  $e = $db->real_escape_string($_POST['password']);

  if (empty($d)) {
    array_push($errors, "Username required");
  }
  if (empty($e)) {
    array_push($errors, "Password required");
  }

  if (count($errors) == 0) {

     $d=$username;
    $e = sha1($password);
    $query = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss',$d,$e);
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
setcookie ("username",$_POST['username'],time()+ (10 * 365 *24 * 60 * 60));
//COOKIES for password
setcookie ("password",$e,time()+ (10 * 365 * 24 * 60 * 60));
} else {
if(isset($_COOKIE["username"])) {
setcookie ("username","");
if(isset($_COOKIE["password"])) {
setcookie ("password","");
        }
      }
  
  }
  header('location:index.php');
}
}
else{

array_push($errors, "Account Not Verified ");
header('location:Verifynow.php');
}
}else {
      array_push($errors, "Wrong username/password combination ");
    }}

?>