<?php
include("include/connection.php");
$cn=getCon();
$lid = $_GET['lid'];
$query="select t1.lab_id,p1.patient_name,d1.doctor_name,d2.disease_name,r1.report_name,t1.report_charge,t1.Report_date,r2.report_times,s1.Status_name from lab_details as t1,patient as p1,doctor as d1,disease as d2,report_details as r1,report_time as r2,status as s1 WHERE 
t1.patient_id = p1.patient_id and
t1.doctor_id = d1.doctor_id and
t1.disease_id = d2.disease_id and
t1.report_name_id = r1.report_name_id and
t1.report_time_id = r2.report_time_id and
t1.Status_id = s1.Status_id and
t1.lab_id  = ".$lid;
$res=mysqli_query($cn,$query) or die(mysqli_error());
    $row=mysqli_fetch_array($res);
    
 

?>
<html>
 <head>
                                <link rel="stylesheet" type="text/css" href="pdf.css">
                                 <script src="pdf.js"></script>
                             <script src="bundle.js"></script>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>lab report </title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
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
                                 <button class="btn btn-primary" id="download"> Download bill</button>
                           
               
   
        <div class="row">

            <div class="col-md-6 col-md-offset-3 body-main">
               <div class="card" id="abc"> 
                <div class="col-md-12">
                    <div class="page-header">
                         <h1>LAB REPORT</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="cms.jpg" /> </div>
                            <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>CLINIC MANAGEMENT SYSTEM</strong></h4>
                            <p>PRAVAT PATIYA ,SURAT</p>
                            <p>8200644803</p>
                            <p>clinicmanagmentsystem@gmail.com</p>
                          
                        </div>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h5>Description</h5>
                                    </th>
                                    <th>
                                        <h5>DETAIL</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-9">PATIENT NAME </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[1]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">DOCTOR NAME</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[2]; ?></td>
                                </tr>
                                
                                <tr>
                                    <td class="col-md-9">Disease</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[3]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Report Name</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[4]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Report CHARGES</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[5]; ?></td>
                                </tr>
                            
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $row[5]; ?></strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <table >
                            <tr><td><h5><b>Status  </b></td> <td><h5><b> : </b></td><td><?php  echo $row[8]; ?></h5></td> </tr>
                            <tr><td><h5><b>Time   </b></td><td><h5><b> : </b></td><td><?php  echo $row[6]; ?></h5></td> </tr>
                            <tr><td><h5><b>Date   </b></td><td><h5><b> : </b></td><td><?php  echo $row[7]; ?></h5></td> </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
   
</div>

                            </body>
                        </html>