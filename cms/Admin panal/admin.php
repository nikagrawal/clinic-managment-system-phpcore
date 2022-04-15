<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";	
if(isset($_REQUEST['btnsubmit']))
{
	insertData("admin","Admin_id",$updadmin1);
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
                                    <div class="text-muted bootstrap-admin-box-title">Admin</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>
                                            Admin Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Admin Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtAdmin_Name" name="txtAdmin_Name">
                                                    <div id="txtAdmin_Name1"></div>
                                                </div>
                                            </div>
                                           
                                           
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Email-id</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txxAdmin_Email" name="txxAdmin_Email">
                                                    <div id="txxAdmin_Email1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Password</label>
                                                <div class="col-lg-10">
                                                    <input type="password" class="form-control col-md-6" id="txtpassword" name="txtpassword">
                                                    <div id="txtpassword1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="fileInput">IMAGE</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileimage_name" type="file" name="fileimage_name">
                                                    <div id="fileimage_name1"></div>
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
