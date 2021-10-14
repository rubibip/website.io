<?php 
session_start();
if (isset($_POST['pass'])) {
  $new=$_POST['newpassword'];
  $newpass=$_POST['confirmpassword'];
  $a=0;
  $new=$_POST['newpassword'];
  $newpass=$_POST['confirmpassword'];
  
   if ($new!=$newpass) {
    echo '<script language="javascript">';
echo 'alert("passwors dont match");';
echo "\n";
 
header("location:resetpassword.php?new=$new");
echo '</script>';

exit();
  }
  require "server.php";
$sql="select* from resetpaswword where selector=?";
$pas= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$new);
  mysqli_stmt_execute($newpass);
  $select=mysqli_stmt_get_result($newpass);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['selector']==$new)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
  if ($a<1) {
 echo "you need to re-submit your request".$selector;
  }
  else
  {
$sql="select* from reset where email=?";
$pas= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$tokenemail);
  mysqli_stmt_execute($pas);
  $select=mysqli_stmt_get_result($pas);
  if (!$row=mysqli_fetch_assoc($select)) {
    echo "There is an error!";
  }
  else
  {
  $sql="UPDATE users set password=? where email=?";
  $pas= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  $newhash=$pass1;
  $salted="wertyuihhhh".$newhash;
  $newhash=hash('sha1', $salted);
  //$x=sha1($_POST['password']);
  mysqli_stmt_bind_param($pas,"ss",$newhash,$tokenemail);
  mysqli_stmt_execute($pas);

  $sql="delete from resetpaswword where email=?";
     $pas= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($pas,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($pas,"s",$tokenemail);
  mysqli_stmt_execute($pas);
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
?>