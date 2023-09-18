<?php
include_once('db.php');

$nc=$_POST['name_card'];
$cn=$_POST['card_num'];
$ed=$row['ex_date'];
$sc=$row['s_code'];
$result=mysqli_query($conn,"INSERT INTO payment(name_card,card_num,ex_date,s_code) VALUES('$nc','$cn','$ed','$sc')");

if($save=('location:login.php')){
	($_SESSION['messages']="Payment sucessful");
	header('location:create.php');
}
else{
	($_SESSION['messages()']="Payment Failed");
	header('location:payment.php');		
}
?>