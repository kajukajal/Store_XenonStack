<?php
session_start();
include("connection.php");




if(isset($_POST["submit"]))
{
	
	
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$Name = $_POST["Name"];
	$Address = $_POST["Address"];
	$Email = $_POST["Email"];
	$Mobile = $_POST["Mobile"];

	
	if($Name!="" && $username!="" && $password!="" && $Address!="" && $Email!="" && $Mobile!="")
	{
	
	$query = "INSERT INTO emp (username, password, Name, Address, Email, Mobile) VALUES ('$username', '$password', '$Name', '$Address', '$Email', '$Mobile')";
	$data = mysqli_query($conn, $query);
	
	
	if ( $data == TRUE )
	{
		echo "<script type='text/javascript'>alert('Registration Successful')</script>";
	}
	else
	{
		echo "There was a problem";
	}
	}
	else
	{
		echo "<script type='text/javascript'>alert('Please fill all column')</script>";
	}
}

?>
<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
	</head>

<body>
<header>

	<!--Navigation bar-->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#"><img src="image/logo.png" class="img-fluid"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="elogin.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About Us</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="contact.php">Contact Us</a>
			</li>
		</ul>
    
	</div>
	</nav>

	<!--Navigation bar-->

	
	<!--Registration Start-->

<section>
  <div class="container mb-4">
    <h1 class="text-center text-capitalize pt-5" id="head">Registration</h1>
    <hr class="w-50 mx-auto pt-4">

    <div class="w-50 mx-auto pb-5">
      <form method="post" action="" enctype="multipart/form-data">
		  <label for="Name"><b>Name:</b></label>
          <input type="text" name="Name" class="form-control" id="Name" autocomplete="off">
			</br>
          <label for="username"><b>User Name:</b></label>
          <input type="text" name="username" class="form-control" id="username" autocomplete="off">
			</br>
          <label for="password"><b>Password:</b></label>
          <input type="password" name="password" class="form-control" id="password" autocomplete="off">
			</br>
		  <label for="Address"><b>Address:</b></label>
          <textarea name="Address" class="form-control" id="Address" autocomplete="off"></textarea>
			</br>
		  <label for="Email"><b>E-mail:</b></label>
          <input type="text" name="Email" class="form-control" id="Email" autocomplete="off">
			</br>
          <label for="Mobile"><b>Mobile No.:</b></label>
          <input type="text" name="Mobile" class="form-control" id="Mobile" autocomplete="off">
			</br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Reset</button>
      </form>
    </div>

  </div>
</section>

<!--Registration End-->

<!--footer Start-->
  
  <footer class="footer bg-dark text-white py-3">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 footer-info">
          <img src="image/foot.png" class="img-fluid">
         
        </div>
		<div class="col-lg-2 col-md-6 footer-links">
          
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4><Br></h4>
         
        </div>
        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            Aamgola Road,<br>
            Near Over Bridge.,Muz-1,<br>
            <strong>Phone:</strong>+91-8292412488<br>
            <strong>E-mail:</strong>carstore@yahoo.com<br>
          </p>
          <div class="social-links">
            <a href="#"><img src="icon/fb.svg" id="social" class="img-fluid"></a>&nbsp;&nbsp;
            <a href="#"><img src="icon/whatsapp.svg" id="social" class="img-fluid"></a>&nbsp;&nbsp;
            <a href="#"><img src="icon/twitter.svg" id="social" class="img-fluid"></a>&nbsp;&nbsp;
            <a href="#"><img src="icon/google.svg" id="social" class="img-fluid"></a>&nbsp;&nbsp;
          </div>
        </div>
      </div>
    </div>
  </div>
  <center>@copyright</center>
</footer>

<!--footer End-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>