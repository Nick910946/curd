<?php
 
 include "dbmall.php";

 $id = $_POST['id'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$a = $_POST['a'];
$dob = $_POST['dob'];
// $b = $_POST['b'];
$c = $_POST['c'];
$d = $_FILES['image']['name'];

 $d = $_FILES['image']['name'];
 $e = $_FILES['image']['tmp_name'];
//echo $a,$b;
//echo "<pre>";
 //print_r($b);
  $file = "upload/".$d;  
 move_uploaded_file($e, $file);
 
  // $a1 = implode(',', $b);
 //echo $name,$gender,$gender,$email,$password,$education,$college;

  $data = "update mca SET name='$name',gender='$gender',email='$email',phone='$phone',address='$a',dob='$dob',document='$c',image='$file' where id =$id";

  mysqli_query($sop,$data);
  header('location:mca_display.php');             




?>