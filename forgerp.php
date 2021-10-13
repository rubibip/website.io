<?php 
session_start();

if (isset($_POST['subm'])) {
  $emil=$_POST['email'];
  $a=0;
  include("server.php");
  $sql="select* from users where email=?";
$stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$emil);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$emil)
    {
    $a=$a+1;
    $tokenemail=$row['email'];
}
  }
}
  if($a>=1){
  $selector=bin2hex(random_bytes(8));
 $token=random_bytes(32);
  
  $url="http://localhost:82/Design/resetpassword.php?selector=".$selector;
  $expires=date("U")+1800;
  
     $sql="delete from resetpaswword where email=?";
     $stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"s",$emil);
  mysqli_stmt_execute($stmt);
}
$q="insert into resetpaswword(email,selector) values(?,?)";
$stmt= mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt,$q)) {
 echo "statement failed";
}
else{
  //$hashedtoken=password_hash($token,PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt,"ss",$emil,$selector);
  mysqli_stmt_execute($stmt);
}
//mysqli_stmt_close($stmt);
$from="From: rubiibipaul2018@gmail.com";
$to = $emil;
$subject = 'Reset password';
$message = '<p>Here is the link you need to follow';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
 

echo "inserted";
}
else{
 echo "not inserted";
}
}
?>