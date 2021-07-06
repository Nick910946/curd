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
	  <style type="text/css">
	  	
	  	*{
	margin: 0px;
	padding: 0px;
}
body{
	  	background-image: url(https://content3.jdmagicbox.com/comp/gwalior/73/9999pmulmumstd502273/catalogue/maharana-pratap-college-of-technology-gwalior-ho-gwalior-institutes-v2rupt4.jpg);
	  	background-size: cover;
	  	background-repeat: no-repeat;: 


	  }
	

	  .arrow{
	  	margin-top: 65px;
	  	margin-left: 530px;
	  	height: 50px;
	  }

	  .arrow1{ 
	  	margin-top: 35px;
	  	margin-left: 530px;
	  	height: 50px;

	  }
	  .admission{
	  	width: 250px;
	  	height: 40px;
	  	margin-top: 70px;
	  margin-left: 30px;
	  font-size: 19px;
	  position: fixed;
	  border-radius: 50px;
	  
	  }

	   .admission1{
	  	width: 250px;
	  	height: 40px;
	  	margin-top: 70px;
	  margin-left: -50px;
	  font-size: 19px;
	  position: fixed;
	  border-radius: 50px;
	  
	  }
	  .aa{
	  	margin-left: 770px;
	  }

     .clgname{

     	font-family: 'Mate SC', serif;
     }
     .mpctlobo{
     	width: 250px;
     	height: 250px;
     	margin-left: -400px;
     	margin-top: -100px;
     }


    

.logout{
margin-left: 250px;
margin-top: -70px;



}
	  </style>

</head>
<body>

	<div class="container-fluid "><!---------container-fluid start----->
		<center>
		<img src="http://www.mpct.org/images/logo.png"><br><br>
		<h1 class="text-uppercase clgname"><b> Maharana Pratap College of Technology & Management</b></h4>

		<h4 class=" text-white"><?php echo $_SESSION['name']?></p>  <a href="logout.php" class="btn btn-info logout">Logout</a>
		</center>
	
	    	
	    	<?php 

	    	include "dbmall.php";
	    	 $e=$_SESSION['email'];
	    	$data = "select * from mca where email ='$e'";
				$data = mysqli_query($sop,$data);
				// echo "<pre>";
				// print_r($data);


				echo $total= mysqli_num_rows($data);
				$a = mysqli_fetch_array($data);

				 if($total == 0){

				?>
				 <a href="mca.php"><button class="animate__animated animate__heartBeat bg-primary text-white admission aa <?php echo $disabled ?>">MCA Form</button></a>

				 <?php
				}

				else{

				 ?>
				 

				 <a href="mca_display.php" ><button class="animate__animated animate__heartBeat bg-primary text-white admission aa">Display</button></a>

				 <?php
				 	}
				 ?>


          <!-- <img src="https://i.pinimg.com/originals/29/d3/ae/29d3ae03293f54659c15f9aa4d87c26c.gif" class="arrow"> -->
           <!-- <a href="mca.php"><button class="animate__animated animate__heartBeat bg-primary text-white admission">MCA Form</button></a>  -->

           <br><br><br>
<!--             <img src="https://i.pinimg.com/originals/29/d3/ae/29d3ae03293f54659c15f9aa4d87c26c.gif" class="arrow"> -->
<center>
           <a href=""><button class="animate__animated animate__heartBeat bg-primary text-white admission">M.Tech Form</button></a>

           <br><br><br>
           <!--  <img src="https://i.pinimg.com/originals/29/d3/ae/29d3ae03293f54659c15f9aa4d87c26c.gif" class="arrow1"> -->
           <a href=""><button class="animate__animated animate__heartBeat bg-primary text-white admission1">B.Tech Form</button></a>

           <img src="https://thumbs.gfycat.com/BestCheerfulCapeghostfrog-max-1mb.gif" class="mpctlobo">
</center>
          

           

	   
    </div><br><!---------container-fluid end----->

</body>
</html>