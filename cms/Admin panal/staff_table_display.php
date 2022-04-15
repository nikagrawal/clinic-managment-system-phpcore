<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM staff_table WHERE staff_id=".$id;
	exenonQuery($q);
	header("location:staff_table_display.php");
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
                                <h1>Staff</h1>
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
		$q="SELECT t1.staff_id,p1.designation_name,t1.staff_name,t1.age,t1.email_id,t1.gender,t1.mobile_no from staff_table as t1,designation_table as p1 WHERE t1.designation_id = p1.designation_id" ;
		$arr=array("DESIGNATION","STAFF Name","AGE","EMAIL","GENDER","MOBILE");
		echo displayData($arr,$q,"staff_table_update.php","staff_table_display.php","");
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
