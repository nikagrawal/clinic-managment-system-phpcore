<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";    
if(isset($_REQUEST['btnsubmit']))
{
    insertData("staff_table","staff_id","");
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
                                    <div class="text-muted bootstrap-admin-box-title">Staff</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Staff Details</legend>
                                           
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
                                                <label class="col-lg-2 control-label" >Staff Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtstaff_name" name="txtstaff_name">
                                                    <div id="txtstaff_name1"></div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                <label class="col-lg-2 control-label" >Age</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtage" name="txtage">
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
                                                    <input type="text" class="form-control col-md-6" id="txxemail_id" name="txxemail_id">
                                                    <div id="txxemail_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Contact No</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="ttxmobile_no" name="ttxmobile_no">
                                                    <div id="ttxmobile_no1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Password</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpassword" name="txtpassword">
                                                    <div id="txtpassword1"></div>
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
