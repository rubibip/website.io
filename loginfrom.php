<?php
session_start();
?>

<?php
include 'server.php';
$d=$_POST["username"];
$e=$_POST["password"];
$salt="salting" .$e;
  $e=hash('sha1',$salt);
   $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){ 
$query = "SELECT * FROM users WHERE status='Verified' ";
    $stmt = $db->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
if($num_rows > 0){


            //echo "<h1><center> Login successful </center></h1>";  
            include "home.php";
            if (!empty($_POST['name'])) {
                $name=$_POST['name'];
          setcookie("username",$d,time()+3600*24*7);
          setcookie("password",$e,time()+3600*24*7);
          setcookie("remember",$name,time()+3600*24*7);
            }
            else
            {
                setcookie("username",$d,2);
                setcookie("password",$e,2);
            }
        }
        header("location:logs.php");
        }

        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>".$e;  
        }
?>