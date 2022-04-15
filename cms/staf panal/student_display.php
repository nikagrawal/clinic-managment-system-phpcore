<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM student WHERE student_id=".$id;
	exenonQuery($q);
	header("location:student_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tables | Bootstrap 3.x Admin Theme</title>
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
                                <h1>Student</h1>
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
		$q="SELECT s1.student_id, c1.course_name, s1.image_name, s1.student_name, s1.birth_date, s1.mobile_no, s1.email_id, s1.description, s1.gender from student as s1, course as c1 WHERE s1.course_id = c1.course_id";
		$arr=array("Couse","Image","Student name","Birthdate","Contact No","Email Id","Description","Gender");
		echo displayData($arr,$q,"student_update.php","student_display.php",$updstudent1);
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
