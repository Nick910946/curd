<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
	<h1 class="bg-primary text-white text-center"> Employee View Data</h1>	
	<tr class="text-center">
		
		<th>ID</th>
		<th>Name</th>
		<th>image</th>
		
		


	</tr>	

	<?php

		include "dbmall.php";
		$id = $_GET['jay'];

		$a = "select * from dukaan where id  = $id";
		$b = mysqli_query($sop,$a);
		$c = mysqli_fetch_array($b);
		

	?>
		<tr class="text-center">
			<td><?php echo$c['id']?></td>
			<td><?php echo$c['name']?></td>
			<td><img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;"></td>
			




		</tr>		


	</table>

	</div>

</body>
</html>