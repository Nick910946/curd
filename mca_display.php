<?php

include("session.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>MPCT</title>
	 <link rel="stylesheet"  href="css/mpct.css">
	  <link rel="icon"  href="https://cdn1.vectorstock.com/i/1000x1000/30/10/logo-book-in-form-a-cap-for-college-vector-5173010.jpg">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
	<div class="container bg-dark">
		
		<table class="table table-bordered">
			<h2 class="bg-secondary text-center">Student Data Dispaly</h2>

			<tr class="text-center text-white">
				
				<th>ID</th>
				<th>Name</th>
				<th>image</th>
				<th>Action</th>



			</tr>
         		 <?php

          			include "dbmall.php";
          			$email = $_SESSION['email'];
          			$a = "select * from mca where email='$email'";
          			$b = mysqli_query($sop,$a);
          			while($c = mysqli_fetch_array($b)){

          		
          			


         	 	?>
         	 		<tr class="text-center text-white">


					<td><?php echo $c['id']?></td>
					<td><?php echo $c['name']?></td>
					<td><img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;"></td>

					<td class="text-center">
						
						<a href="mca_view.php?jay=<?php echo $c['id']?>" class="btn btn-info">View</a>
						<a href="mca_edit.php?shri=<?php echo $c['id']?>" class="btn btn-warning">Edit/Update</a>
						<a href="mca_delete.php?ram=<?php echo $c['id']?>" class="btn btn-danger">Delete</a>




					</td>

			
					</tr>
					<?php

					}

					?>
					



		</table>
  <center>
  		    <a href="logout.php" class="btn btn-info ">Logout</a>



	</div>


</body>
</html>
