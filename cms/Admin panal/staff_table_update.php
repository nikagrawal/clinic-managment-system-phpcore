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
	$selectQuery="SELECT * FROM staff_table WHERE staff_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("staff_table","$id","staff_id","");
	header("location:staff_table_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin CMS</title>
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
                                    <div class="text-muted bootstrap-admin-box-title">Appointment</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Appointment Details</legend>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label">Designation</label>
                                                <div class="col-lg-10">
                                               <?php $query="select designation_id,designation_name from designation_table";?>
                                                    <select id="cmbdesignation_id" class="selectize-select" style="width: 150px" name="cmbdesignation_id">
                                                        <?php echo FillComboBox($query,$row['designation_id']);?>
                                                    </select>
                                                     <div id="cmbdesignation_id1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Staff Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtstaff_name" name="txtstaff_name" value="<?php echo $row['staff_name'];?>">
                                                    <div id="txtstaff_name1"></div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                <label class="col-lg-2 control-label" >Age</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtage" name="txtage" value="<?php echo $row['age'];?>">
                                                    <div id="txtage1"></div>
                                                </div>
                                            </div>
                                                 <div class="form-group">
                                                <label class="col-lg-2 control-label">Gender</label>
                                                <div class="col-lg-10">
                                                    <select id="cmbgender" class="selectize-select" style="width: 150px" name="cmbgender">
                                                        <option value="select">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                     <div id="cmbgender1"></div>
                                                </div>
                                             </div>
                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Email Id</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txxemail_id" name="txxemail_id" value="<?php echo $row['email_id'];?>">
                                                    <div id="txxemail_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Contact No</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="ttxmobile_no" name="ttxmobile_no" value="<?php echo $row['mobile_no'];?>">
                                                    <div id="ttxmobile_no1"></div>
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
