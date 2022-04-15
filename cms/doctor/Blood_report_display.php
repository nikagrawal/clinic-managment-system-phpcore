<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $q="DELETE FROM appointment_table WHERE appointment_id=".$id;
    exenonQuery($q);
    header("location:appointment_patient_table_display.php");
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
                                <h1>Blood report</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Blood Report</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                                                <?php
        $q=" SELECT s1.Blood_Report_id,c1.lab_name,p2.patient_name,s1.Hemoglobin,s1.RBC_of_blood,s1.WBC_of_blood,s1.mcv_of_blood,s1.mch_of_blood,s1.Protein,s1.Calcium,s1.Cholesterol,s1.Sodium,p2.patient_name from blood_report as s1, lab_master as c1,patient as p2,doctor as d1 WHERE 
         s1.patient_id  = p2.patient_id and
         s1.doctor_id = d1.doctor_id and
        s1.lab_master_id = c1.lab_master_id and d1.doctor_id='".$_SESSION['userid']."'";
       // echo $q;
        $arr=array("lab","Patient Name");
       echo displayData_report($arr,$q,"blood_recept.php","urine report_display.php","");
        
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
