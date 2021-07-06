<?php
include "dbmall.php";
$a = $_POST['name'];
$b = $_FILES['image']['name'];
$c = $_FILES['image']['tmp_name'];
// //echo $a,$b;
// echo "<pre>";
//  print_r($b);
 
 $file = "upload/".$b; 
move_uploaded_file($c, $file);

$data = "insert into dukaan(name,image)value('$a','$file')";
 mysqli_query($sop,$data);


 
?>