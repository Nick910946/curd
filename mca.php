<?php

include ("session.php");

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
.menu{
	text-align: right;
	font-size: 17px;

	margin-right: 100px;
	line-height: 50px;
}
.logout{
margin-left: 1400px;
margin-top: -100px;



}
</style>
<body style="background-color: skyblue">
	
	<div class="container-fluid">
		
		<p class="menu text-dark"><?php echo $_SESSION['name']?></p> <a href="logout.php" class="btn btn-dark logout">Logout</a>
		
		<div class="container">
			<br>
			<h1 class="text-center text-dark">Addmission Form For MCA<br><h2 class="text-center">(MPCT COLLEGE)</h2></h1>
		<br><br><br>
			<div class="col-md-8">

			<form method="post" action="mca_insert.php" enctype="multipart/form-data">
		
		


<div class="from-group ">
	<label><b>Name :</b></label>
	<input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $_SESSION['name']?>">
</div><br><br>

<div class="from-group">
	<label><b>Gender:</b></label><br>
	<input type="radio" name="gender" value="male" >Male<br>
	<input type="radio" name="gender" value="female" >FeMale<br>
	<input type="radio" name="gender" value="other" >Other
               
</div><br><br>

<div class="from-group">
	<label><b>Email :</b></label>
	<input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $_SESSION['email']?>">
</div><br><br>

<div class="from-group">
	<label><b>Phone :</b></label>
	<input type="text" name="country code" value="+91" size="1">
	<input type="text" name="phone" size="10">

</div><br><br>
<div class="from-group">
	<label><b>Address :</b></label><br>
	<textarea cols="50" rows="4" cols="form-control" name="a"></textarea>
	

</div><br><br>



<div class="from-group">
	<label><b>DOB :</b></label>
	<input type="date" name="dob" class="form-control">
</div><br><br>

<!-- <div class="from-group"> 
<label><b> Education:</b>  </label> 
		<input type="checkbox" name="b[]" value="10th">10th
        <input type="checkbox" name="b[]" value="12th">12th      
        <input type="checkbox" name="b[]" value="graduation">Graduation
        

</div><br><br> -->

<div class="from-group">
<label><b>Document:</b></label> 
<select name="c">
			<option value="select">Select</option>
			<option value="Aadhaar Card">Aadhaar Card</option>
			<option value="10th marksheet">10th marksheet</option>
			<option value="T.C">T.C</option>
			<option value="Other">Other</option>         
		    </select>
			
</div><br><br>


<div class="from-group">
  <label><b>Document Image :</b></label>
  <input type="file" name="image" class="form-control">
</div>

<br><br>

<button class="btn btn-dark"><b>Save</b></button>
<br><br>

			</form>
				</div>
			
		</div><!------------container---------------->
	</div><!------------container fluid-------->
		




</body>
</html>