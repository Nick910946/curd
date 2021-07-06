<?php

include "dbmall.php";

$x = $_POST['name'];
$y = $_POST['password'];
$z = $_POST['email'];
$x1 = $_POST['dob'];
echo $y1 = $_FILES['image']['name'];
 // echo "<pre>";
 // print_r($y1);

$filename = $_FILES['image']['tmp_name'];
$file = "upload/".$y1;
move_uploaded_file($filename, $file);
//echo $w,$x,$y,$z; 



$email_check =mysqli_query($sop,"select * from mpct where email ='$z'");

if(mysqli_num_rows($email_check)>0){

	echo "<h1> email already access</h1>";
}
else{

$data = "insert into mpct(name,password,email,dob,image)value('$x','$y','$z','$x1','$file')";

 mysqli_query($sop,$data);
 header('location: mpct_login.php');


}

// $data = "insert into mpct(name,password,email,dob,image)value('$x','$y','$z','$x1','$file')";

//  mysqli_query($sop,$data);
//  header('location: mpct_login.php');

?>