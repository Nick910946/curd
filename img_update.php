<?php
 
 include "dbmall.php";

 $id = $_POST['id'];
 $name = $_POST['name'];

 $b = $_FILES['image']['name'];
 $c = $_FILES['image']['tmp_name'];
//echo $a,$b;
//echo "<pre>";
 //print_r($b);
  $file = "upload/".$b;  
 move_uploaded_file($c, $file);
 

 echo $name,$gender,$gender,$email,$password,$education,$college;
die;
  // $data = "update dukaan SET name ='$name',image='$file' where id =$id";

  // mysqli_query($sop,$data);
  // header('location:img_display.php');             




?>