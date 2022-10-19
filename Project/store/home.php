
<html>
	<head>
		<title>Home-employee</title>
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
			<li class="nav-item active">
				<a class="nav-link" href="#">
				<?php
				session_start();
				include("connection.php");
				error_reporting(0);
				echo "welcome ".$_SESSION['user_name'];
				?> 
				<span class="sr-only">(current)</span></a>
			</li>
     
			<li class="nav-item">
				<a class="nav-link" href="cars.php">Cars</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Ebooking.php">Booking</a>
			</li>
			
			<li class="nav-item ">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
			 
		</ul>
    
	</div>
	</nav>

	<!--Navigation bar-->

<!--Slider start-->

	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
		</ul>
	<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slider_1.jpg" alt="Infrastructure" width="1100" height="300">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider_2.jpg" alt="fest" width="1100" height="300">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider_3.jpg" alt="Classroom" width="1100" height="300">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/slider_4.jpg" alt="Library" width="1100" height="300">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>

<!--Slider end-->
</header>

<!--Service start-->



  <section class="gray-bg">
  <div class="container mb-5 pt-5">
       <div class="section-container text-center pb-5">
      <h2>Find the Best <span>Car ForYou</span></h2>
      <p>Car buying is always everybody's dream and it is very special occasion, we as a premium car dealership always endeavor to achieve highest level of customer satisfaction and improving the buying experience for our customers.</p>
    </div>

   

    
    <div class="row text-center">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="image/car1.jpg" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">Lamberghini</h4>
          <p class="card-text"></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="image/car2.png" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">Ford</h4>
          <p class="card-text"></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" >
          <img class="card-img-top" src="image/car3.jpg" alt="Card image">
          <div class="card-body">
          <h4 class="card-title">BMW</h4>
          <p class="card-text"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<section>

  <!--Service End-->
  
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