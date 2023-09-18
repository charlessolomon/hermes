<?php
include_once('db.php');

$em=$_POST['email'];
$un=$_POST['usename'];
$pn=$row['p_num'];
$pw=$row['passw'];
$result=mysqli_query($conn,"INSERT INTO sign_up(email,usename,p_num,passw) VALUES('$em','$un','$pn','$pw')");

if($save=('location:login.php')){
	($_SESSION['messages']="Sign up sucessful");
	header('location:create.php');
}
else{
	($_SESSION['messages()']="Sign up Failed");
	header('location:index.html');		
}
?>