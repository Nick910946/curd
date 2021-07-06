<?php

include ("session.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
	<h1 class="bg-primary text-white text-center"> Student View Data</h1>	
	<tr class="text-center">
		
		<th>ID</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Document</th>
		<th>Image</th>
		


	</tr>	

	<?php

		include "dbmall.php";
		$id = $_GET['jay'];

		$a = "select * from mca where id = $id";
		$b = mysqli_query($sop,$a);
		$c = mysqli_fetch_array($b);

	?>
		<tr class="text-center">
			<td><?php echo $c['id']?></td>
			<td><?php echo $c['name']?></td>
			<td><?php echo $c['gender']?></td>
			<td><?php echo $c['email']?></td>
			<td><?php echo $c['phone']?></td>
			<td><?php echo $c['address']?></td>
			<td><?php echo $c['dob']?></td>
			<td><?php echo $c['document']?></td>
			<td><img src="<?php echo$c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;"></td>
			




		</tr>		


	</table>

	 <center>
  		    <a href="logout.php" class="btn btn-info ">Logout</a>



	</div>

</body>
</html>