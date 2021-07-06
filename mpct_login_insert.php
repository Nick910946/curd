<?php

session_start();


include "dbmall.php";
$email = $_POST['email'];
$password = $_POST['password'];
 $data = "select * from mpct where email ='$email' and password ='$password'";
$data = mysqli_query($sop,$data);
// echo "<pre>";
// print_r($data);


echo $total= mysqli_num_rows($data);

$a = mysqli_fetch_array($data); 
 if($total == 1){

 	$_SESSION['name']=$a['name'];
 	$_SESSION['email']=$email;

 	header('location:mpct_course.php');
 }
  else{
  	echo "worng email OR password";
  }

?>