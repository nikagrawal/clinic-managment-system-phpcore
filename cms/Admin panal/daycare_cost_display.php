<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q="DELETE FROM daycare_cost WHERE Daycare_Cost_id=".$id;
	exenonQuery($q);
	header("location:daycare_cost_display.php");
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
                                <h1>daycare_cost</h1>
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
		$q="SELECT s1.Daycare_Cost_id, s1.Daycare_Cost_name,s1.Daycare_Cost_amount  from daycare_cost as s1";
		$arr=array("Name","Amount");
		echo displayData($arr,$q,"daycare_cost_update.php","daycare_cost_display.php","");
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
