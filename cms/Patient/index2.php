<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Patient CMS</title>
	
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap2.css">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 id="logo"><img src="cms1.png" height="40" width="40"> CLINIC MANAGEMENT SYSTEM</h1>
				</div>
				<div class="col-md-6">
					<ul id="menu" class="float-md-right">
						<li><B><a href="index2.php">Home</a></B></li>
						<li><B><a href="contactus.php">Contact Us</a></B></li>
						<li><B><a href="index.php">Login</a></B></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      
	<div id="banner" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-9">
					<div class="banner-title">
						
					
					 
					<h1 class="title">CLINIC MANAGEMNT SYSTEM</h1>
						<p class="lead">The CLINIC records management software keeps a track of all the operations, stores the users' data, performs its analysis and generates the reports. ... </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container section">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-head">PROVIDE SYSTEM FACILTY</h2>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="service-box">
					<i class="fa fa-heartbeat"></i>
					<h3>MANAGE PATIENT</h3>
					
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="service-box">
					<i class="fa fa-user-md"></i>
					<h3>MANAGE DOCTOR</h3>
					
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="service-box">
					<i class="fa fa-hospital-o"></i>
					<h3>MANAGE STAFF</h3>
					
				</div>
			</div>
		</div>
	</div>

	
<?php

$q="SELECT s1.doctor_id, s1.doctor_name, s1.image_name, s1.doctor_email, s1.doctor_password, c1.designation_name, s1.Experience, s1.doctor_fees , s1.degree  , s1.gender , s1.Phone_no from doctor as s1, designation_table as c1 WHERE s1.designation_id = c1.designation_id";
$cn=getCon();
	$res=mysqli_query($cn,$q) or die(mysqli_error());


?>
	<div id="news" class="container section">
		<div class="row" align="center">
			<div class="col-md-12">
				<h2 class="section-head">OUR DOCTOR</h2>
			</div>
			<?php
			while($row=mysqli_fetch_array($res)) {
			
			?>
			<div class="col-md-6 col-lg-4">
				<div class="news-post">
					<?php  echo "<img src='images/doctor/".$row['2']."' >";  ?>
					<h3><b><?php echo $row['1']; ?></b></h3>
					<h3><i class="fa fa-phone-square"></i> <b><?php echo $row['10']; ?></b></h3>
					<h3><i class="fa fa-envelope-square"></i> <b><?php echo $row['3']; ?></b></h3>
					<h3><i class="fa fa-user-md"></i> <b><?php echo $row['8']; ?></b></h3>
				</div>
			</div><?php
			}
			?>
		</div>
	</div>

	<div id="footer-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="footer-widget">
						<h4>ABOUT CLINIC</h4>
						<p>Some of the top benefits of implementing an <STRONG>CMS</STRONG> are role-based access control, data accuracy, revenue management, appointment booking, overall cost reduction, and data security.</p>
						<p>It includes the patient and doctors' records as well as the data concerning supply management, etc</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="footer-widget">
						<h4>OPENING HOUR</h4>
						<P>Monday - Friday <BR>
						   06:00 AM - 10:00 PM<BR>

						   Saturday 09:00 AM - 08:00 PM<BR>

						   Sunday Closed</P>
					</div>
				</div>
				  <div class="col-sm-6 col-md-4">
					<div class="footer-widget">
						<h4>CLINIC Address</h4>
						<address>
							<b>PARVAT PATIYA</b><br>
							OPP,RAGUVIR MARKET<br>
							SURAT,GUJARAT 395010<br>
							P : (129) 456-7890
						</address>

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">clinicmanagementsystem@gmail.com</div>
				<div class="col-md-6">
					<ul id="social-icons" class="float-md-right">
						<li><a href="" class="fa fa-facebook-square"></a></li>
						<li><a href="" class="fa fa-twitter-square"></a></li>
						<li><a href="" class="fa fa-linkedin-square"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
			<?php /*?><div class="col-sm-6 col-md-4">
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="footer-widget">
						<h4>CLINIC Address</h4>
						<address>
							<b>PARVAT PATIYA</b><br>
							OPP,RAGUVIR MARKET<br>
							SURAT,GUJARAT 395010<br>
							P : (129) 456-7890
						</address>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">clinicmanagementsystem@gmail.com</div>
				<div class="col-md-6">
					<ul id="social-icons" class="float-md-right">
						<li><a href="" class="fa fa-facebook-square"></a></li>
						<li><a href="" class="fa fa-twitter-square"></a></li>
						<li><a href="" class="fa fa-linkedin-square"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>*/?>