
<html>
	<head>
		<title>Cars</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		
		<style>
		fieldset
		{
		height:1200px;
		overflow:auto;
		}
		</style>
		
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
				<a class="nav-link" href="home.php">
				<?php
				session_start();
				include("connection.php");
				error_reporting(0);
				echo "welcome ".$_SESSION['user_name'];
				?> 
				<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="home.php">Home</a>
			</li>
     
			<li class="nav-item active">
				<a class="nav-link" href="#">Cars</a>
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

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Our Products</h1> 
    <p><b>Car Store :</b> Great Deal | Great Price</p> 
  </div>
</div>

</header>

<section>

<table border="0" width=100% cellspacing="0" align="center">
<tr valign="top">
<td width=70% align="center">
<fieldset>
<section class="gray-bg">
<div class="container mb-5 pt-2">
<div class="card" >

<table border="0" width=100% cellspacing="0" align="center">
<?php

include("connection.php");
$query = "SELECT *FROM car";
$result = mysqli_query($conn, $query);




while($row=mysqli_fetch_assoc($result)){

echo"<tr>";
echo"<th align=center></br></th>";
echo "<td></br></td>";
echo "<td></br></td>";
echo"</tr>";

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

echo"<tr align=center>";
echo"<th colspan=3 ></th>";
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
</fieldset>
</td>

<td width=30% align="center">

<section>
  <div class="container mb-4">
    <h2 class="text-center text-capitalize pt-5" id="head">Booking Details</h2>
    <hr class="w-50 mx-auto pt-4">

    <div class="w-50 mx-auto pb-5">
      <form method="post" action="" enctype="multipart/form-data">
        <h4>Employee Details</h4>
		  <label for="Eid"><b>Employee Id :</b></label>
          <input type="text" name="Eid" value="<?php echo $_SESSION['user_name'] ?>" class="form-control" id="Eid" autocomplete="off">
		  </br>
		<h4>Car Details</h4>
          <label for="Brand"><b>Brand:</b></label>
          <input type="text" name="Brand" class="form-control" id="Brand" autocomplete="off">
		  </br>
		  <label for="Model"><b>Model:</b></label>
          <input type="text" name="Model" class="form-control" id="Model" autocomplete="off">
		  </br>
          
		<h4>Customer Details</h4>
		  <label for="Cname"><b>Name:</b></label>
          <input type="text" name="Cname" class="form-control" id="Cname" autocomplete="off">
		  </br>
		  <label for="Fname"><b>Father's Name:</b></label>
          <input type="text" name="Fname" class="form-control" id="Fname" autocomplete="off">
		  </br>
          <label for="Cadd"><b>Address:</b></label>
          <input type="text" name="Cadd" class="form-control" id="Cadd" autocomplete="off">
		  </br>
		  <label for="Cmob"><b>Mobile No.:</b></label>
          <input type="text" name="Cmob" class="form-control" id="Cmob" autocomplete="off">
		  </br>
		 <h4>Payment</h4>
		  <label for="Price"><b>Total Amount (Rs.):</b></label>
          <input type="text" name="Price" class="form-control" id="Price" autocomplete="off">
		  </br>
		  <label for="Payment"><b>Method of Payment:</b></label>
		  <select value="Payment" name="Payment" class="form-control" id="Payment" autocomplete="off">
			<option>Choose Payment type</option>
			<option>Cash</option>
			<option>Card</option>
			<option>Cheque</option>
		  </select>
		  <br/>
        <button type="submit" class="btn btn-primary" name="submit">Checkout</button>
		<button type="reset" class="btn btn-primary" name="reset">Reset</button>
      </form>
    </div>
	
	<?php

include("connection.php");
error_reporting(0);


if(isset($_POST["submit"]))
{
	
	
	$Eid = $_POST["Eid"];
	$Brand = $_POST["Brand"];
	$Model = $_POST["Model"];
	$Cname = $_POST["Cname"];
	$Fname = $_POST["Fname"];
	$Cadd = $_POST["Cadd"];
	$Cmob = $_POST["Cmob"];
	$Price = $_POST["Price"];
	$Payment = $_POST["Payment"];
	
	if($Eid!="" && $Brand!="" && $Model!="" && $Cname!="" && $Fname!="" && $Cadd!="" && $Cmob!="" && $Price!="" && $Payment!="")
	{
	
	$query = "INSERT INTO booking (Eid, Brand, Model, Cname, Fname, Cadd, Cmob, Price, Payment) VALUES ('$Eid', '$Brand', '$Model', '$Cname', '$Fname', '$Cadd', '$Cmob', '$Price', '$Payment')";
	$data = mysqli_query($conn, $query);
	
	
	if ( $data == TRUE )
	{
		echo "Booking Successful";
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

  </div>
</section>

</td>
</tr>
</table>
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