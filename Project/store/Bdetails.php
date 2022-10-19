<?php  
include('connection.php');

if (isset($_POST['submit'])){
	
$Eid = $_POST["Eid"];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT *FROM booking WHERE Eid='$Eid' ";
 
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);


}
?>


<html>
	<head>
		<title>Booking_Details</title>
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
				error_reporting(0);
				echo "welcome ".$_SESSION['user_name'];
				?> 
				<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="ahome.php">
				Home 
				<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="Edetails.php">Employee</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Booking</a>
				</div>
			</li>
     
			<li class="nav-item">
				<a class="nav-link" href="addcar.php">Add Products</a>
			</li>
			
			<li class="nav-item ">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
			 
		</ul>
    
	</div>
	</nav>

	<!--Navigation bar-->
	
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Booking Details</h1> 
    <p><b>Car Store :</b> Great Deal | Great Price</p> 
  </div>
</div>

</header>

<section>
  <div class="container mb-4">
    <h1 class="text-center text-capitalize pt-5" id="head">Booking_Details</h1>
    <hr class="w-50 mx-auto pt-4">

    <div class="w-50 mx-auto pb-5">
      <form method="post" action="">
        
          <label for="Eid"><b>Employee Id:</b></label>
          <input type="text" name="Eid" class="form-control" id="Eid" autocomplete="off">
			</br>
         <button type="submit" name="submit" class="btn btn-primary">Search</button>
        </form>
	</div>

   </div>

</section>

<section class="gray-bg">
<div class="container mb-5 pt-5">
<div class="card" >
<center>
<table width=90% border="1" cellspacing="0" align="center">
<tr>
<td align="center" colspan="8"><h1>Car Store:Booking Details</h1>
<h4></h4></td>
</tr>

<tr align="Center">
<th>Employee Id</th>
<th>Customer Name</th>
<th>Father's Name</th>
<th>Address</th>
<th>Mobile No.</th>
<th>Car Brand</th>
<th>Model</th>
<th>Price</th>
<tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['Eid']."</td>";

echo "<td>".$row['Cname']."</td>";

echo "<td>".$row['Fname']."</td>";

echo "<td>".$row['Cadd']."</td>";

echo "<td>".$row['Cmob']."</td>";

echo "<td>".$row['Brand']."</td>";

echo "<td>".$row['Model']."</td>";

echo "<td>".$row['Price']."</td>";



echo "</tr>";

}

?>

</table>
</table>
</div>
</div>
</section>


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