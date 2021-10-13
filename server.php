<?php
// initializing variables

$firstname="";
$lastname="";
$email = "";
$username = "";
$password="";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'webdesigndb');
if (mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
        }

 
?>