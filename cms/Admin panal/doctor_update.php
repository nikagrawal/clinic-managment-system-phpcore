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
	$selectQuery="SELECT * FROM doctor WHERE doctor_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("doctor","$id","doctor_id",$upddoctor1);
	header("location:doctor_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">doctor</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>doctor Details</legend>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label" >doctor Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor_name" name="txtdoctor_name" value="<?php echo $row['doctor_name'];?>">
                                                    <div id="txtdoctor_name1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileimage_name" type="file" name="image_name">
                                                    <div id="fileimage_name1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >doctor_email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txxdoctor_email" name="txxdoctor_email" value="<?php echo $row['doctor_email'];?>">
                                                    <div id="txxdoctor_email1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >doctor_password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control col-md-6" id="txtdoctor_password" name="txtdoctor_password" value="<?php echo $row['doctor_password'];?>">
                                                    <div id="txtdoctor_password1"></div>
                                                </div>
                                            </div>
                                         <div class="form-group">
                                                <label class="col-lg-2 control-label">Designation</label>
                                                <div class="col-lg-10">
                                               <?php $query="select designation_id,designation_name from designation_table";?>
                                                    <select id="cmbcourse_id" class="selectize-select" style="width: 150px" name="cmbdesignation_id">
                                                        <?php echo FillComboBoxUpdate($query,$row['designation_id']);?>
                                                    </select>
                                                     <div id="cmbdesignation_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Experience</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtExperience" name="txtExperience" value="<?php echo $row['Experience'];?>">
                                                    <div id="txtExperience1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >doctor_fees</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor_fees" name="txtdoctor_fees" value="<?php echo $row['doctor_fees'];?>">
                                                    <div id="txtdoctor_fees1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >degree</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdegree" name="txtdegree" value="<?php echo $row['degree'];?>">
                                                    <div id="txtdegree1"></div>
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
                                                <label class="col-lg-2 control-label" >Contact No</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="ttxPhone_no" name="ttxPhone_no" value="<?php echo $row['Phone_no'];?>">
                                                    <div id="ttxPhone_no1"></div>
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
