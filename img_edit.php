<?php

include "dbmall.php";
 $id = $_GET['shri'];
 $a = "select * from dukaan where id = $id";

 $b = mysqli_query($sop,$a);
 $c = mysqli_fetch_array($b);
 // echo "<pre>";

 // print_r($c);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="img_insert.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $c['id']?>">
	name:
	<input type="text" name="name" value="<?php echo $c['name']?>">
	<br><br>
	image:
	<input type="file" name="image">
	<img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;">
	<br><br>
	<input type="submit" name="ab" value="update"> 

</form>
</body>
</html>