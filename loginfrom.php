<?php
session_start();
?>

<?php
include 'server.php';
$d=$_POST["username"];
$e=$_POST["password"];
$x=0;
$y=0;
$salt="salting" .$e;
  $e=hash('sha1',$salt);
   $sql="SELECT* FROM users WHERE username=? and Password=?";
$stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"ss",$d,$e);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
while($user=mysqli_fetch_array($select))
{
if(($d==$user['username'])&&($e==$user['password']))

{
 $fst=$user['username'];
  $x=1;
  $_SESSION['username']=$d;
  $_SESSION['password']=$e;
}
}
}
if($x)
{
  $query = "SELECT * FROM users WHERE status='Verified' ";
    $stmt = $db->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
if($num_rows > 0){


           if(!empty($_POST["remember"]))   
   {  $check=$_POST['remember'];
    setcookie ("username",$d,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("password",$_POST['password'],time()+ (10 * 365 * 24 * 60 * 60));
    $_SESSION["username"] = $username;
   }  
   else  
   {  
    if(isset($_COOKIE["username"]))   
    {  
     setcookie ("username","");  
    }  
    if(isset($_COOKIE["password"]))   
    {  
     setcookie ("password","");  
    }  
    
  else  
  {  
   $message = "Invalid Login";  
  } 
 }

header('location:home.php');
}
else{

header('location:loginfrom.php');

}}
else {
    echo "<script>alert('Wrong username or Password ')</script> ";
    include "loginfile.php";
    }
  


?>