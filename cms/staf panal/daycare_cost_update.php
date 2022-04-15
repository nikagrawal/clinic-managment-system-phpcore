<?php
//ini_set("display_errors",0);
include('include/connection.php');
include("include/session.php");
$id="";
$msg="";
if(isset($_GET['id']))
{
	$cn=getCon();
	$id=$_GET['id'];
	//echo $id;
	$selectQuery="SELECT * FROM daycare WHERE Daycare_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("daycare_cost","$id","Daycare_Cost_id","");
	header("location:daycare_cost_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Staff CMS</title>
		<?php include('link.php')?>
    </head>
    <body class="bootstrap-admin-with-small-navbar">
	<?php include('header.php')?>
        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">

                <!-- content -->
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Daycare</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Daycare Details</legend>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label" >daycare_cost Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtDaycare_Cost_name" name="txtDaycare_Cost_name" value="<?php echo $row['Daycare_Cost_name'];?>">
                                                    <div id="txtDaycare_Cost_name1"></div>
                                                </div>
                                            </div>
                                          <div class="form-group">
                                                <label class="col-lg-2 control-label" >daycare_cost Amount</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtDaycare_Cost_amount" name="txtDaycare_Cost_amount" value="<?php echo $row['Daycare_Cost_amount'];?>">
                                                    <div id="txtdDaycare_Cost_amount1"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="btnsubmit">Save changes</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </fieldset>
                                    </form>
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
