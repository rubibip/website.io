<?php
session_start();
?>

<?php

include 'server.php';
$username=$_POST["username"];
$password=sha1($_POST["password"]);
   $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){  
           header("location:home.php");
            if(!empty($_POST["remember"])) {
            setcookie ("username",$username,time()+ 3600*3600);
            setcookie ("password",sha1($password),time()+ 3600*3600);
           
            }
            else{
              setcookie ("username",$username,time()-8);
            setcookie ("password",$password,time()-9);
            }
            $_SESSION['username']=$username;
            $_SESSION['password']=sha1($password); 
        }  
        else{  
            echo "<h1> failed to LOGIN totally correct it.</h1>";  
        } 


    
 

?>