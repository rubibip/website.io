<?php
session_start();
include "server.php";
$d=$_POST['username'];
$e=$_POST['password'];
$salted="saltedsfgfgbgvg".$d;
 	$saltsh=hash('sha1', $salted);
$t=0;


$f=mysqli_query($db,"select * from users where username='$username'");
while ($p=mysqli_fetch_array($f)) {
	if ($uname==$p['username'] and $saltsh==$p['password']) {
		$t=1;
		$h=$p['username'];
		$b=$p['password'];
	}
}
if ($t==1) {
	$query = "SELECT * FROM users WHERE username='$username' AND status='Verified' ";
    $stmt = $db->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }

  if($num_rows > 0){

header("location:home.php");
//echo "<button><a href='logout.php'>logout</a></button>";


$_SESSION['k1']=$h;
$_SESSION['k2']=$b;
if(!empty($_POST['remember'])) {
	setcookie("memberlogin",$_POST['username'],time()+ 3600);
	setcookie("memberpassword",$_POST['password'],time()+ 3600);
	echo "cookies.set.successfully";

}}
else{
	header("location:loginfile.php");
}
}
else
{
	echo "<script>alert('username or password incorrect!')</script>";
 	echo "<script>location.href='index.php'</script>";
}

?>