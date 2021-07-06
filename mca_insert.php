<?php

include "dbmall.php";

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$a = $_POST['a'];
$dob = $_POST['dob'];
// $ba = $_POST['b'];
$cb = $_POST['c'];

$d = $_FILES['image']['name'];
$e = $_FILES['image']['tmp_name'];
// //echo $a,$b;
// echo "<pre>";
//  print_r($b);
 
 $file = "upload/".$d; 
move_uploaded_file($e, $file);

 // $a1 = implode(',',$b);

 //echo $name,$gender,$email,$phone,$a,$dob,$cb,$file;

$data = "insert into mca(name,gender,email,phone,address,dob,document,image)value('$name','$gender','$email','$phone','$a','$dob','$cb','$file')";

mysqli_query($sop,$data);
 header('location: mca_display.php');



?>