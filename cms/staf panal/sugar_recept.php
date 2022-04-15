<?php
include("include/connection.php");
$cn=getCon();
$sid = $_GET['sid'];
$query="select t1.sugar_report_id,p1.lab_name,t1.Hemoglobin_sugar,t1.tlc,t1.dlc,t1.mcv_sugar,t1.blood_urea,t1.blood_sugar,t1.serum_sodium,t1.serum_potassium ,p2.patient_name,d1.doctor_name from sugar_report as t1,lab_master as p1,patient as p2 ,doctor as d1 WHERE 
t1.lab_master_id = p1.lab_master_id and
t1.doctor_id = d1.doctor_id and
t1.patient_id  = p2.patient_id  and
t1.sugar_report_id  = ".$sid;
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
                                <title>Sugar report </title>
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
                                 <button class="btn btn-primary" id="download"> Download Report</button>
                           
               
   
        <div class="row">

            <div class="col-md-6 col-md-offset-3 body-main">
               <div class="card" id="abc"> 
                <div class="col-md-12">
                    <div class="page-header" style="color: #F81D2D;">
                         <h2 align="center"><strong>SUGAR Report <i class="fas fa-notes-medical"></i> </strong></h2>
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
                                    <td class="col-md-7">Patient Name </td>
                                    
                                    <td class="col-md-4"><i area-hidden="true"></i> <?php echo $row[10]; ?></td>
                                </tr>
                            
                            
                                <tr>
                                    <th>
                                        <h4>Description</h4>
                                    </th>
                                     <th>
                                        <h4>Range-</h4>
                                    </th>
                                    <th>
                                        <h4>Result</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="col-md-7">Hemoglobin Sugar </td>
                                    <td class="col-md-9">14-18 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[2]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">RBC of blood</td>
                                    <td class="col-md-9">4.5-6.5 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[3]; ?></td>
                                </tr>
                                
                                <tr>
                                    <td class="col-md-9">WBC_of_blood</td>
                                    <td class="col-md-9">4000-11000 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[4]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">mcv_of_blood</td>
                                    <td class="col-md-9">75-95 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[5]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">mch_of_blood</td>
                                    <td class="col-md-9">27-32</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[6]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Protein</td>
                                    <td class="col-md-9">6-8 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[7]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Calcium</td>
                                    <td class="col-md-9">8.6-10.3</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[8]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Cholesterol</td>
                                    <td class="col-md-9">100-127 </td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[9]; ?></td>
                                </tr>
                                
                            <tr>
                                    <td class="col-md-9"></td>
                                    <td class="col-md-9"> </td>
                                    <td class="col-md-3"></td>
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