<?php
include("include/connection.php");
include("include/session.php");
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Patient CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/css/style.css">
	<style type="text/css">
		#header{
	color: #fff;
	background: #e74c3c;
}

#logo{
	font-size: 2rem;
	margin-top: 2px;
}

#menu{
	list-style: none;
	margin: 0;
	padding: 0;
}

#menu li{
	display: inline-block;
}

#menu li a{
	color: #fff;
	padding: 15px 10px;
	display: block;
}

#menu li a:hover{
	background: #c0392b;
}

	</style>

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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">CONTACT US</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Submit" class="btn btn-danger">
													
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<?php
$con=mysqli_connect("localhost","root","","newcms_db") or die("Connection Error".mysqli_error());
if(isset($_POST['submit'])){
$sql = "INSERT INTO contactus (name,email,subject,message)
values('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
echo $sql;
mysqli_query($con,$sql);

}
mysqli_close($con);
?>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-danger w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> PARVAT PATIYA
							OPP,RAGUVIR MARKET
							SURAT,GUJARAT 395010</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">clinicmanagementsystem@gmail.com</a></p>
					          </div>
				          </div>
				     
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/js/jquery.min.js"></script>
  <script src="js/js/popper.js"></script>
  <script src="js/js/bootstrap.min.js"></script>
  <script src="js/js/jquery.validate.min.js"></script>
  <script src="js/js/main.js"></script>

	</body>
</html>

