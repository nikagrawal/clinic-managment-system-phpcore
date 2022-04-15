<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM daycare WHERE Daycare_id=".$id;
	exenonQuery($q);
	header("location:daycare_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin CMS</title>
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
                                <h1>Daycare</h1>
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
		$q="SELECT s1.Daycare_id,c1.doctor_name,p1.patient_name,s1.date,d1.Daycare_Cost_name  from daycare as s1, doctor as c1, patient as p1, daycare_cost as d1 
        WHERE s1.doctor_id = c1.doctor_id and 
              s1.patient_id = p1.patient_id and 
              s1.Daycare_Cost_id = d1.Daycare_Cost_id";
		$arr=array("Doctor name","Patient Name","Date","Daycare Cost");
		echo displayData($arr,$q,"daycare_update.php","daycare_display.php","");
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
