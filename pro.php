<?php
session_start();
include_once('db.php');
$un=$_POST['usename'];
$pasw=$_POST['passw'];
$_SESSION['usename']=$un;
 $sql=mysqli_query($conn,"SELECT * FROM sign_up WHERE passw='$pasw'")or die(mysqli_error($conn));
while($row=mysqli_fetch_array($sql))
{
	$pword=$row['passw'];
	
	
}
if($pasw==$pword){
	header('location:dash.php');
	//echo $pword;
}
if(!$pasw==$pword){
	$_SESSION['msg']="Wrong credentials,Check Username or Password and try again";
	header('location:create.php');
	//echo $pword;
}
?>
