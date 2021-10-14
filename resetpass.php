<?php 
if (isset($_POST['pass'])) {
  $t=$_POST['selector'];
  $a=0;
  
  $pd=$_POST['newpassword'];
  $rpd=$_POST['confirmpassword'];
   if ($pd==$rpd) {
  require "server.php";
$sql="select* from resetpaswword where selector=?";
$st= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$selector);
  mysqli_stmt_execute($st);
  $result=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($result)) {
    if($row['selector']==$t)
    {
    $k=$k+1;
    $eml=$row['email'];
}
  }
  if ($a<1) {
 echo "Submit first your request".$selector;
  }
  else
  {
$sql="select* from resetpaswword where email=?";
$st= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement is now failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$eml);
  mysqli_stmt_execute($st);
  $result=mysqli_stmt_get_result($st);
  if (!$row=mysqli_fetch_assoc($result)) {
    echo "Error has been found";
  }
  else
  {
  $sql="UPDATE users set Password=? where email=?";
  $st= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  $hashed=sha1($rpd);
  mysqli_stmt_bind_param($st,"ss",$hashed,$eml);
  mysqli_stmt_execute($st);

  $sql="delete from password where email=?";
     $st= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement is also  failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$eml);
  mysqli_stmt_execute($st);
  header("location:index.php");
} 
  }

    }
}
}}}
else
{
 echo '<script>alert("Password do not much")</script>';

echo "\n";
  
header("location:index.php?t=$selector");
}
}
?>
