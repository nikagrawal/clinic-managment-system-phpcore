<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
       $id=$_GET['id'];
    $update="update appointment_table set   Status_id = 'pending' where appointment_id=$id";
    echo $update;
  exenonQuery($update);
    header("location:appointment_today_display.php");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor CMS</title>
        <?php include('link_display.php');?>
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <?php include('header.php');?>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">

                <!-- content -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>Today Cancel Appointment</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Bootstrap dataTables</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                                                <?php

       $q="SELECT t1.appointment_id,p1.patient_name,tk.token_no ,d1.doctor_name,t1.appointment_date,t1.appointment_time,t1.status_id from appointment_table as t1,patient as p1,doctor as d1,token as tk WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id  and d1.doctor_id=".$_SESSION['userid'] ." and  appointment_date='".date("m/d/Y")."' and tk.appointment_id =t1.appointment_id and t1.	Status_id = 'cancel'";
     //  echo $q;
        $arr=array("Patient Name","Token Number","Doctor Name","Date","Time","Status");
         echo displayData_appoitmentcancel($arr,$q,"","appointment_today_cancel_display.php","");
                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?php include('footer.php');?>
    </body>
</html>
