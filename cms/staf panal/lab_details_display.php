<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM lab_details WHERE lab_id=".$id;
	exenonQuery($q);
	header("location:lab_details_display.php");
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
                                <h1>lab Detail</h1>
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
		$q="SELECT t1.lab_id,p1.patient_name,d1.doctor_name,d2.disease_name,r1.report_name,t1.report_charge,t1.Report_date,r2.report_times,s1.Status_name from lab_details as t1,patient as p1,doctor as d1,disease as d2,report_details as r1,report_time as r2,status as s1 WHERE 
        t1.patient_id = p1.patient_id and
        t1.doctor_id = d1.doctor_id and
        t1.disease_id = d2.disease_id and
        t1.report_name_id = r1.report_name_id and
        t1.report_time_id = r2.report_time_id and
        t1.Status_id = s1.Status_id";
		$arr=array("Patient Name","Doctor Name","Disease","Report","Charges","Date","Time","Status");
		echo displayData($arr,$q,"lab_details_update.php","lab_details_display.php","");
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
