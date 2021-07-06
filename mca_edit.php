<?php

include ("session.php");

?>


<?php

include "dbmall.php";
 $id = $_GET['shri'];
 $a = "select * from mca where id = $id";

 $b = mysqli_query($sop,$a);
 $c = mysqli_fetch_array($b);
 // echo "<pre>";

 // print_r($c);


?>
<!DOCTYPE html>
<html>
<head>
	<title> MPCT</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon"  href="https://cdn1.vectorstock.com/i/1000x1000/30/10/logo-book-in-form-a-cap-for-college-vector-5173010.jpg">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<style type="text/css">
	
button{

	width: 100px;
}

</style>
<body style="background-color: skyblue">
	
	<div class="container-fluid">
		

		<div class="container">
			<br>
			<h1 class="text-center text-dark">Addmission Form For MCA<br><h2 class="text-center">(MPCT COLLEGE)</h2></h1>
		<br><br><br>
			<div class="col-md-8">

			<form method="post" action="mca_update.php" enctype="multipart/form-data">
				<input type="hidden" name="id" class="form-control" value="<?php echo $c['id']?>">
</div><br><br>
	
<div class="from-group ">
	<label><b>Name :</b></label>
	<input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $c['name']?>">
</div><br><br>

<div class="from-group">
	<label><b>Gender:</b></label><br>
	<input type="radio" name="gender" value="male"
	<?php
	if($c['gender']=='male'){

		echo "checked";
	}


	?>



 >Male<br>
	<input type="radio" name="gender" value="female"
	<?php
	if($c['gender']=='female'){

		echo "checked";
	}


	?>






 >FeMale<br>
	<input type="radio" name="gender" value="other"

	<?php
	if($c['gender']=='other'){

		echo "checked";
	}


	?>





	 >Other
               
</div><br><br>

<div class="from-group">
	<label><b>Email :</b></label>
	<input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $c['email']?>">
</div><br><br>

<div class="from-group">
	<label><b>Phone :</b></label>
	<input type="text" name="country code" value="+91" size="1">
	<input type="text" name="phone" size="10" value="<?php echo $c['phone']?>">

</div><br><br>
<div class="from-group">
	<label><b>Address :</b></label><br>
	<textarea cols="50" rows="4" cols="form-control" name="a"><?php echo $c['address']?></textarea>
	

</div><br><br>



<div class="from-group">
	<label><b>DOB :</b></label>
	<input type="date" name="dob" class="form-control" value="<?php echo $c['dob']?>">
</div><br><br>

<!-- <div class="from-group"> 
<label><b> Education:</b>  </label> 
		<input type="checkbox" name="b[]" value="10th">10th
        <input type="checkbox" name="b[]" value="12th">12th      
        <input type="checkbox" name="b[]" value="Graduation">Graduation
        

</div><br><br> -->

<div class="from-group">
<label><b>Document:</b></label> 
<select name="c">
			<option value="select">Select</option>
			<option value="Aadhaar Card"



			<?php

	
			if($c['document']=='Aadhaar Card'){

			echo "selected";
				}


			?>


			>Aadhaar Card</option>
			<option value="10th marksheet"

			<?php

	
			if($c['document']=='10th marksheet'){

			echo "selected";
				}


			?>





			>10th marksheet</option>
			<option value="T.C"

			<?php

	
			if($c['document']=='T.C'){

			echo "selected";
				}


			?>




			>T.C</option>
			<option value="Other"

			<?php

	
			if($c['document']=='Other'){

			echo "selected";
				}


			?>		





			>Other</option>         
		    </select>
			
</div><br><br>


<div class="from-group">
  <label><b>Document Image :</b></label>
  <input type="file" name="image" class="form-control">
  	<img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;">
</div>

<br><br>

<button class="btn btn-dark"><b>Update</b></button>
<br><br>

			</form> <br>
			 <center>
  		    <a href="logout.php" class="btn btn-info ">Logout</a>


				</div>
			
		</div><!------------container---------------->
	</div><!------------container fluid-------->
		




</body>
</html>