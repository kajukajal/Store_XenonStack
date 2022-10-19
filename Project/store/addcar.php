<?php

include("connection.php");
error_reporting(0);


if(isset($_POST["submit"]))
{
	
	
	$Sno = $_POST["Sno"];
	$Brand = $_POST["Brand"];
	$Model = $_POST["Model"];
	$Type = $_POST["Type"];
	$Gear = $_POST["Gear"];
	$Price = $_POST["Price"];
	$target_dir = "upload/";
	$target = $target_dir .basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target);
	
	if($Sno!="" && $Brand!="" && $Model!="" && $Type!="" && $Gear!="" && $Price!="" && $target!="")
	{
	
	$query = "INSERT INTO car (Sno, Brand, Model, Type, Gear, Price, image) VALUES ('$Sno', '$Brand', '$Model', '$Type', '$Gear', '$Price', '$target')";
	$data = mysqli_query($conn, $query);
	
	
	if ( $data == TRUE )
	{
		echo "";
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
		<title>Add_Car</title>
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
			<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="Edetails.php">Employee</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="Bdetails.php">Booking</a>
				</div>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
			 
		</ul>
    
	</div>
	</nav>

	<!--Navigation bar-->
	
<section>
  <div class="container mb-4">
    <h1 class="text-center text-capitalize pt-5" id="head">Add Car</h1>
    <hr class="w-25 mx-auto pt-4">

    <div class="w-50 mx-auto pb-5">
      <form method="post" action="" enctype="multipart/form-data">
        
		  <label for="Sno"><b>Serial No. :</b></label>
          <input type="text" name="Sno" class="form-control" id="Sno" autocomplete="off">
		  </br>
          <label for="Brand"><b>Brand:</b></label>
          <input type="text" name="Brand" class="form-control" id="Brand" autocomplete="off">
		  </br>
		  <label for="Model"><b>Model:</b></label>
          <input type="text" name="Model" class="form-control" id="Model" autocomplete="off">
		  </br>
		  <label for="Type"><b>Fuel Type:</b></label>
		  <select value="Type" name="Type" class="form-control" id="Type" autocomplete="off">
			<option>Choose fuel type</option>
			<option>Petrol</option>
			<option>Diesel</option>
		  </select>
		  <br/>
		  <label for="Gear"><b>Gear:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			Automatic : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <Input type="radio" value="Automatic" name="Gear" id="Gear">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Manual : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <Input type="radio" value="Manual" name="Gear" id="Gear">
		  <br/>
		  <label for="image"><b>Picture:</b></label></br>
		  <Input type="file" name="image" id="image">
		  </br></br>
          <label for="Price"><b>Price:</b></label>
          <input type="text" name="Price" class="form-control" id="Price" autocomplete="off">
			</br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		<button type="reset" class="btn btn-primary" name="reset">Reset</button>
      </form>
    </div>

  </div>
</section>

<section class="gray-bg">
<div class="container mb-5 pt-5">
<div class="card" >

<table border="0" width=100% cellspacing="0" align="center">
<?php
include("connection.php");
$query = "SELECT *FROM car";
$result = mysqli_query($conn, $query);




while($row=mysqli_fetch_assoc($result)){

echo"<tr>";
echo"<td rowspan=6 align=center width=40%><img src=".$row['image']." width=200px height=250px id='i'></img></td>";
echo"<th align=left>Brand</th>";
echo "<td>:-&nbsp&nbsp".$row['Brand']."</td>";

echo"</tr>";

echo"<tr>";
echo"<th align=left>Model</th>";
echo "<td>:-&nbsp&nbsp".$row['Model']."</td>";
echo"</tr>";

echo"<tr>";
echo"<th align=left>Serial No.</th>";
echo "<td>:-&nbsp&nbsp".$row['Sno']."</td>";
echo"</tr>";

echo"<tr>";
echo"<th align=left>Fuel Type</th>";
echo "<td>:-&nbsp&nbsp".$row['Type']."</td>";
echo"</tr>";

echo"<tr>";
echo"<th align=left>Gear Type</th>";
echo "<td>:-&nbsp&nbsp".$row['Gear']."</td>";
echo"</tr>";

echo"<tr>";
echo"<th align=left>Price</th>";
echo "<td>:-&nbsp&nbspRs.".$row['Price']."</td>";
echo"</tr>";


echo"<tr bgcolor=black>";
echo"<th align=center></br></th>";
echo "<td></br></td>";
echo "<td></br></td>";
echo"</tr>";


}



?>

</table>

</div>
  </div>
<section>

	
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