<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("doctor","doctor_id",$upddoctor1);
	$msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";
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
                                    <div class="text-muted bootstrap-admin-box-title">Doctor</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Doctor Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Doctor Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor_name" name="txtdoctor_name">
                                                    <div id="txtdoctor_name1"></div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="fileInput">IMAGE</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileimage_name" type="file" name="fileimage_name">
                                                    <div id="fileimage_name1"></div>
                                                </div>
                                                 </div>
											 <div class="form-group">
                                                <label class="col-lg-2 control-label" >Email-id</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txxdoctor_email" name="txxdoctor_email">
                                                    <div id="txxdoctor_email1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control col-md-6" id="txtdoctor_password" name="txtdoctor_password">
                                                    <div id="txtdoctor_password1"></div>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-lg-2 control-label">Designation</label>
                                                <div class="col-lg-10">
                                               <?php $query="select designation_id,designation_name from designation_table";?>
                                                    <select id="cmbdesignation_id" class="selectize-select" style="width: 150px" name="cmbdesignation_id">
														<?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbdesignation_id1"></div>
                                                </div>
                                            </div>
                                                                     <div class="form-group">
                                                <label class="col-lg-2 control-label" >Experience</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtExperience" name="txtExperience">
                                                    <div id="txtExperience1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Fees</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor_fees" name="txtdoctor_fees">
                                                    <div id="txtdoctor_fees1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Degree</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdegree" name="txtdegree">
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
                                                    <input type="text" class="form-control col-md-6" id="ttxPhone_no" name="ttxPhone_no">
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
