<?php 
session_start();
if (isset($_POST['passwreset'])) {
  $sel=$_POST['selector'];
  $a=0;
  $password=$_POST['newpassword'];
  $passwordrepeat=$_POST['confirmpassword'];
  if (empty($password) || empty($passwordrepeat)) {
    header("location:resetpassword.php");
  }
  else if ($password!=$passwordrepeat) {
    echo '<script language="javascript">';
echo 'alert("Password are not matching");';
echo "\n";
header("location:resetpassword.php?token=$sel");
echo '</script>';
exit();

  require "server.php";

$sql="select* from resetpaswword where selector=?";
$stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$sl);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['selector']==$sl)
    {
    $a=$a+1;
    $tokenemail=$row['selector'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request";
  }
  else
  {
$sql="select* from resetpaswword where email=?";
$stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$tokenemail);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  if (!$row=mysqli_fetch_assoc($select)) {
    echo "There is an error!";
  }
  else
  {
  $sql="UPDATE users set Password=? where Email=?";
  $stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  $newpwdhash=sha1($passwordrepeat);
  mysqli_stmt_bind_param($stmt,"ss",$newpwdhash,$tokenemail);
  mysqli_stmt_execute($stmt);
  $sql="delete from resetpaswword where email=?";
     $stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$token);
  mysqli_stmt_execute($stmt);
  header("location:index.php");
} 
  }
    }
}
}}}
else
{
  header("location:index.php");
}
}
?>