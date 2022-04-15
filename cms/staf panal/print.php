<?php

include("include/connection.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download bill</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="abc">
             
                     <div class="bootstrap-admin-panel-content">
                                                                
               <?php
		$q="SELECT t1.appointment_id,p1.patient_name,d1.doctor_name,t1.appointment_date,t1.appointment_time,s1.Status_name from appointment_table as t1,patient as p1,doctor as d1,status as s1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id and t1.Status_id = s1.Status_id ";
		$arr=array("Patient Name","Doctor Name","Date","Time","Status");
		echo displayData($arr,$q,"appointment_table_update.php","appointment_table_display.php","");
				?>
                                </div>



            </div>
        </div>
        </div>
    </div>
</body>

</html>