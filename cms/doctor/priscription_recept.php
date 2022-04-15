<?php
include("include/connection.php");
$cn=getCon();
    
if(isset($_GET['aid']))
{
    $aid = $_GET['aid'];

$q="select t1.Prescription_id, p1.patient_name,d1.doctor_name,t1.Date,t1.Discription , appointment as a1 from prescription as t1,patient as p1,doctor as d1   WHERE 
        t1.patient_id = p1.patient_id and 
        a1.appointment_id = t1.appointment_id and 
        t1.doctor_id = d1.doctor_id and t1.appointment_id =".$aid;

}
else
{



$pid = $_GET['pid'];

$q="select t1.Prescription_id, p1.patient_name,d1.doctor_name,t1.Date,t1.Discription  from prescription as t1,patient as p1,doctor as d1   WHERE 
        t1.patient_id = p1.patient_id and 
        t1.doctor_id = d1.doctor_id and

t1.Prescription_id =".$pid;
}
echo $q;
    $res=mysqli_query($cn,$q) or die(mysqli_error());
    $row=mysqli_fetch_array($res);
   


?>
<!DOCTYPE html>
<html>
 <head>
                                <link rel="stylesheet" type="text/css" href="pdf.css">
                                <script src="pdf.js"></script>
                                <script src="bundle.js"></script>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Priscription report </title>
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
                                 <button class="btn btn-primary" id="download"> Download priscription</button>
                           
               
   
        <div class="row">

            <div class="col-md-6 col-md-offset-3 body-main">
               <div class="card" id="abc"> 
                <div class="col-md-12">
                    <div class="page-header" style="color: #F81D2D;">
                         <h2 align="center"><strong>PRISCRIPTION <i class="fas fa-notes-medical"></i> </strong></h2>
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
                                        <h4>Description</h4>
                                    </th>
                                     <th>
                                        <h4>DATE<?php// echo $row[3]; 
                                        echo "sds";
                                        print_r($row);
 ?></h4>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="col-md-7">Doctor Name</td>
                                    
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[2]; ?></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9">Patient Name</td>
                                   
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[1]; ?></td>
                                </tr>
                                
                                <tr>
                                    <td class="col-md-9">Priscription</td>
                                   
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php //echo $row[2]; ?></td>
                                </tr>
                                 <tr>
                                    <td class="col-md-9"></td>
                                   
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[4]; ?></td>
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