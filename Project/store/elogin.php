<?php
session_start();
include("connection.php");

?>
<html>
	<head>
		<title>Login-Employee</title>
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
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			 <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="login.php">Admin</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Employee</a>
				</div>
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
    <h1 class="text-center text-capitalize pt-5" id="head">Employee</h1>
    <hr class="w-25 mx-auto pt-4">

    <div class="w-50 mx-auto pb-5">
      <form method="post" action="">
        
          <label for="username"><b>User name:</b></label>
          <input type="text" name="username" class="form-control" id="username" autocomplete="off">
			</br>
          <label for="password"><b>Password:</b></label>
          <input type="password" name="password" class="form-control" id="password" autocomplete="off">
		  </br>
		  Not Yet Registered?<a href="sign.php" id="h">Click Here..</a>
			</br>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </form>
<?php
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM emp WHERE username='$user' && password='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:home.php');
	}
	else
	{
		echo "Login Failed";
	}
}
?>
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

