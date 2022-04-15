<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
$msg="";
$appointment_id ="";
$doctor_id="";
$patient_id="";
$discription="";
if(isset($_GET['id']))
{
	$appointment_id = $_GET['id'];
	$query = "SELECT t1.appointment_id,t1.patient_id,t1.doctor_id,p1.patient_name,d1.doctor_name,t1.appointment_date,t1.appointment_time,t1.Status_id from appointment_table as t1,patient as p1,doctor as d1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id and p1.patient_id =".$_SESSION['userid'] ." and  t1.appointment_id =".$_GET['id'];
$rs=mysqli_query($cn,$query) or die(mysqli_error());
	$row=mysqli_fetch_array($rs);



    
}


$query1 = "SELECT t1.Prescription_id,p1.patient_name,d1.doctor_name,t1.Date,t1.Discription from prescription as t1,patient as p1,doctor as d1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id
        ";
$rs1=mysqli_query($cn,$query1) or die(mysqli_error());
    $row1=mysqli_fetch_array($rs1);
  

    
    $msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";

//header("location:appointment_total_display.php");


?>
<html>
 <head>
                                <link rel="stylesheet" type="text/css" href="pdf.css">
                                 <script src="pdf.js"></script>
                             <script src="bundle.js"></script>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Priscription recept </title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel=' stylesheet'>
                               <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
                                <style> .body-main {
     background: #ffffff;
     border-bottom: 20px solid #1E1F23;
     border-top: 15px solid #1E1F23;
     margin-top: 10px;
     margin-bottom: 30px;
     padding: 20px 10px !important;
     position: relative;
     box-shadow: 0 1px 21px #808080;
     font-size: 10px
 }

 .main thead {
     background: #1E1F23;
     color: #fff
 }

 .img {
     height: 100px
 }

 h1 {
     text-align: center
 }</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                                 <button class="btn btn-danger" id="download"><i class="fas fa-file-medical"></i> Priscription bill</button>
                           
               
   
        <div class="row">

            <div class="col-md-6 col-md-offset-3 body-main">
               <div class="card" id="abc"> 
                <div class="col-md-12">
                    <div class="page-header">
                         <h1 style="color: #F81D2D;"><i class="fas fa-file-medical"></i> <B>PRISCRIPTION RECEPT</B></h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="redlogo-cms.png" /> </div>
                            <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>CLINIC MANAGEMENT SYSTEM</strong></h4>
                            <p>PRAVAT PATIYA ,SURAT</p>
                            <p>8200644803</p>
                            <p>clinicmanagmentsystem@gmail.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                       
                    </div> <br />
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h3>Description</h3>
                                    </th>
                                    <th>
                                        <h5>DETAIL</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9"><B>PATIENT NAME </B></td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[3]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><B>DOCTOR NAME</B></td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[4]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">DATE </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[5]; ?></td>
                                </tr><tr>
                                    <td class="col-md-9">TIME </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[6]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Priscription</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> </td>
                                </tr>
                                <tr>

                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row1[4]; ?></td>
                                    
                                </tr>
                                 <tr>
                                    <td class="col-md-9"></td>
                                    <td class="col-md-3"><i area-hidden="true"></i> </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <h1><i class= "fas fa-user-shield">KEEP SAFE</i></h1>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
   
</div>

                            </body>
                        </html>