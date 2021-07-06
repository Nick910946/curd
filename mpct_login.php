<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MPCT</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon"  href="https://cdn1.vectorstock.com/i/1000x1000/30/10/logo-book-in-form-a-cap-for-college-vector-5173010.jpg">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<style type="text/css">
	.f{
	    padding-top: 60px;
	    padding-bottom: 40px;
	  	margin-top:80px;
	  	margin-left: 302px;
      }
    .b{
	    background-color: ;
      }
    .mt{
		margin-top: 10px;
	  }
	.ttt{
		margin-top: 77px;
		height: 610px;
	  }
	.t{
		color:black;

	  }
	.ceate{
		 text-decoration: none;
		 font-size: 20px;
		 margin-left: 40px;
	  }
	.lo{
		text-decoration: none;
		color: black;
	  }
	  body{
	  	background-image: url(https://storage.googleapis.com/ezap-prod/colleges/8207/maharana-pratap-college-of-technology-and-management-gwalior-campus.jpeg);
	  	background-size: cover;
	  	background-repeat: no-repeat; 
	  }
	  .lobo{
	  	width: 250px;          
	  	margin-left: 120px;
	  	margin-top: 70px;
	  }
	  .envelope{
	  	position:absolute;
	  	left: 630px;
	  	right: 300px;
	  	top: 384px;
	  }
	   .lock{
	  	position:absolute;
	  	left: 630px;
	  	right: 300px;
	  	top: 478px;
	  	font-size: 18px;
	  }

</style>
</head>
<body>

    <div class="container-fluid mt"><!---------container-fluid start----->
    	<center>
    		  <img src="http://www.mpct.org/images/logo.png"><br><br>
		<h1 class="text-uppercase clgname"><b> Maharana Pratap College of Technology & Management</b></h1>
		</center>
	    <div class="container"><!------container start-------->

	    	<div class="row">
         
		    	<div class="col-md-6">
		    		<br>
		    		
		    		<form class="form-group" method="post" action="mpct_login_insert.php" >
				          <h2 class="text-info text-center ">Already applied</h2>
				          <br>
				
					   
					       <div class="form-group">
					      <label><h5 class="text-white">Email :</h5></label>
						  <input type="text" name="email" class="form-control col-sm-12" placeholder="Enter Email">
						  <span class="input-group-addon envelope">
						    <i class="fa fa-envelope "></i>
						  </span>
					    </div>
					      <br>
				
					    <div class="form-group">
					      <label><h5 class="text-white">Password :</h5></label>
						  <input type="password" name="password" class="form-control col-sm-12" placeholder="Enter Password">
						    <span class="input-group-addon lock">
						    <i class="fa fa-lock "></i>
				        </div>
					      <br><br>

					     
					    <div>
						  <a href="mpct_course.php"><button class="btn btn-warning lo">Login</button></a>
						  <a href="mpct_create.php" class="ceate text-primary"><b>New Applicant</b></a>
					    </div>


			        </form>

			    </div><!-----------col6 end--------->

			    	
			   

		   </div>

		</div>

	</div><!------container end-------->

    </div><br><!---------container-fluid end----->

</body>
</html>