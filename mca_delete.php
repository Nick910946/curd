<?php

include ("session.php");

?>

<?php

include "dbmall.php";

$id= $_GET['ram'];         
$a = "DELETE FROM mca WHERE id =$id";
$b = mysqli_query($sop,$a);
 header('location:mca_display.php');      