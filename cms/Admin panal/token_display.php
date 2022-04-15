<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM token WHERE Token_id=".$id;
	exenonQuery($q);
	header("location:token_display.php");
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
                                <h1>token</h1>
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
		$q="SELECT t1.Token_id, p1.patient_name,d1.doctor_name,t1.date,s1.Status_name from token as t1,patient as p1
        ,doctor as d1 ,status as s1  WHERE 
        t1.patient_id = p1.patient_id and 
        t1.doctor_id = d1.doctor_id and 
        t1.Status_id = s1.Status_id";
		$arr=array("Patient Name","Doctor Name","Date","Status");
		echo displayData($arr,$q,"token_update.php","token_display.php",$updtoken1);
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
