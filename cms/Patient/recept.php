<?php
include("include/connection.php");
$cn=getCon();
    
$tokenid = $_GET['tid'];

$query="select t.token_id , p.patient_name , d.doctor_name ,t.token_no,t.date
from token  as t , patient as p , doctor as d 
where t.patient_id = p.patient_id  and
t.doctor_id = d.doctor_id  and
t.token_id  = ".$tokenid;

    $res=mysqli_query($cn,$query) or die(mysqli_error());
    $row=mysqli_fetch_array($res);
   
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php ;?>
    <link rel="stylesheet" type="text/css" href="pdf.css">
    <script src="pdf.js"></script>
    <script src="bundle.js"></script>
     <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>recept </title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
                                <style> .body-main {
     background: #ffffff;
     border-bottom: 15px solid #1E1F23;
     border-top: 15px solid #1E1F23;
     margin-top: 30px;
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

<body>
   
      
            
                <button class="btn btn-primary" id="download"> Download bill</button>
            
            
                <div class="card" id="abc">
                    <div class="container">
                             <div class="card" id="abc">
                     <div class="col-md-12">
                    <div class="page-header">

        <h1>APPOINTMENT RECEPT</h1>
    </div>
                    <div class="row">
                        <div class="col-md-4"> <img class="img" alt="Invoce Template" src="cms.jpg" /> </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>CLINIC MANAGEMENT SYSTEM</strong></h4>
                            <p>PRAVAT PATIYA ,SURAT</p>
                            <p>8200644803</p>
                            <p>clinicmanagmentsystem@gmail.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>TOKEN NO</h2>
                            <h3><?php echo $row[3]; ?></h3>
                        </div>
                    </div> <br />
                    <div>
              
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
                                    <td class="col-md-9">Fees</td>
                                    <td class="col-md-3"><i area-hidden="true"></i> <?php echo $row[6]; ?></td>
                                </tr>
                                
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Total:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> <?php echo $row[6]; ?></strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       </div>
                    <div>
                        <div class="col-md-12">
                            <p><b>Date :</b><?php  echo $row[4]; ?></p> <br />
                           
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>                                           
           
    </div>
</body>

</html>