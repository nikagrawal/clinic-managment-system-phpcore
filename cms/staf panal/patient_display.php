<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $q="DELETE FROM patient WHERE patient_id=".$id;
    exenonQuery($q);
    header("location:patient_display.php");
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
                                <h1>patient</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title"></div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                                                <?php
        $q="SELECT s1.patient_id, s1.patient_name, s1.patient_Father_name,s1.email_id, s1.patient_age, s1.patient_Weight, s1.gender, s1.patient_Address, c1.Blood_name, s1.Phone_no,s1.password from patient as s1, blood_group as c1 WHERE s1.Blood_id = c1.Blood_id order by s1.patient_id desc";
        $arr=array("Name","Father Name","E-Mail","Age","Weight","Gender","Address","Blood Group","Phone no","password");
        echo displayData($arr,$q,"patient_update.php","patient_display.php","");
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
