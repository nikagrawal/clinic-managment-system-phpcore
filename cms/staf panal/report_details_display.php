<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $q="DELETE FROM report_details WHERE report_name_id =".$id;
    exenonQuery($q);
    header("location:report_details_display.php");
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
                                <h1>report_details</h1>
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
        $q="SELECT s1.report_name_id, s1.report_name, s1.report_charge from report_details as s1";
        $arr=array("Name","Charges");
        echo displayData($arr,$q,"report_details_update.php","report_details_display.php","");
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
