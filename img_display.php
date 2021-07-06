<!DOCTYPE html>
<html>
<head>
	<title></title>
		<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container bg-dark">
		
		<table class="table table-bordered">
			<h2 class="bg-secondary text-center">Data dispaly</h2>

			<tr class="text-center text-white">
				
				<th>ID</th>
				<th>Name</th>
				<th>image</th>
				<th>Action</th>



			</tr>
         		 <?php

          			include "dbmall.php";
          			$a = "select * from dukaan order by id desc";
          			$b = mysqli_query($sop,$a);
          			while($c = mysqli_fetch_array($b)){

          		
          			


         	 	?>
         	 		<tr class="text-center text-white">


					<td><?php echo $c['id']?></td>
					<td><?php echo $c['name']?></td>
					<td><img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;"></td>

					<td class="text-center">
						
						<a href="img_view.php?jay=<?php echo $c['id']?>" class="btn btn-info">View</a>
						<a href="img_edit.php?shri=<?php echo $c['id']?>" class="btn btn-warning">Edit/Update</a>
						<a href="img_delete.php?ram=<?php echo $c['id']?>" class="btn btn-danger">Delete</a>




					</td>

			
					</tr>
					<?php

					}

					?>




		</table>




	</div>

</body>
</html>