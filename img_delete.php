<?php

include "dbmall.php";

$id= $_GET['ram'];         
$a = "DELETE FROM dukaan WHERE id =$id";
$b = mysqli_query($sop,$a);
 header('location:img_display.php');      