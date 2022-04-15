<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM doctor WHERE doctor_id=".$id;
	exenonQuery($q);
	header("location:doctor_display.php");
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
                                <h1>doctor</h1>
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
		$q="SELECT s1.doctor_id, s1.doctor_name, s1.image_name, s1.doctor_email, s1.doctor_password, c1.designation_name, s1.Experience, s1.doctor_fees , s1.degree  , s1.gender , s1.Phone_no from doctor as s1, designation_table as c1 WHERE s1.designation_id = c1.designation_id";
		$arr=array("Name","Image","Email","Password","Designation","Experience","Fees","Degree","Gender","Phone.NO");
		echo displayData($arr,$q,"doctor_update.php","doctor_display.php",$upddoctor1);
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
