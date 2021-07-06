<!DOCTYPE html>
<html>
<head>
	<title>MPCT</title>
  <link rel="icon"  href="https://cdn1.vectorstock.com/i/1000x1000/30/10/logo-book-in-form-a-cap-for-college-vector-5173010.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 
  </style>
</head>
<body>
 
<div class="modal fade" id="nik">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Create Account</h5>
    
      </div>
      <div class="modal-body bg-light">
      	
      	<div class="col-md-12">
	

<form method="post" action="mpct_insert.php" enctype="multipart/form-data">
	
<div class="from-group ">
	<label>Name :</label>
	<input type="text" name="name" class="form-control">


</div><br>

<div class="from-group">
	<label>Password:</label>
	<input type="password" name="password" class="form-control">
</div><br>

<div class="from-group">
	<label>Email :</label>
	<input type="Email" name="email" class="form-control">
</div><br>

<div class="from-group">
	<label>DOB :</label>
	<input type="date" name="dob" class="form-control">
</div><br>

<div class="from-group">
  <label>Image :</label>
  <input type="file" name="image" class="form-control">
</div>

<br><br>
<!-- <a href="http://localhost/curd/mpct_login.php"><button class="btn btn-info">Submit</button></a> -->
<a href="http://localhost/curd/mpct_login.php"><button class="btn btn-info">Submit</button></a>   
    </div>

</div><!-----end con------->

      	</div>
         </div>
            

</body>
<script>
    $(document).ready(function(){
        $('#nik').modal('show');
    });
    </script>
</html>