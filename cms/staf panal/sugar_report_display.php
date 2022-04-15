<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM sugar_report WHERE sugar_report_id=".$id;
	exenonQuery($q);
	header("location:sugar_report_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Staff CMS</title>
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
                                <h1>Sugar Report</h1>
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
		$q="SELECT s1.sugar_report_id,c1.lab_name,p2.patient_name,d1.doctor_name,s1.Hemoglobin_sugar,s1.tlc,s1.dlc,s1.mcv_sugar,s1.blood_urea,s1.blood_sugar,s1.serum_sodium,s1.serum_potassium from sugar_report as s1, lab_master as c1,patient as p2,doctor as d1 WHERE s1.lab_master_id = c1.lab_master_id
        and s1.doctor_id = d1.doctor_id and s1.patient_id  = p2.patient_id ";
		$arr=array("lab","Patient","Doctor","Hemoglobin_sugar","tlc","dlc","mcv_sugar","blood_urea","blood_sugar","serum_sodium","serum_potassium");
		echo displayData($arr,$q,"sugar_report_update.php","sugar_report_display.php","");
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
