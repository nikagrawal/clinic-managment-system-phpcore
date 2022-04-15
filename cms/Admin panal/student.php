<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("student","student_id",$updstudent1);
	$msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
                                    <div class="text-muted bootstrap-admin-box-title">Student</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Student Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Student Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtstudent_name" name="txtstudent_name">
                                                    <div id="txtstudent_name1"></div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-lg-2 control-label">Course</label>
                                                <div class="col-lg-10">
                                               <?php $query="select course_id,course_name from course";?>
                                                    <select id="cmbcourse_id" class="selectize-select" style="width: 150px" name="cmbcourse_id">
														<?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbcourse_id1"></div>
                                                </div>
                                            </div>


											
											
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Birth date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtbirth_date" name="txtbirth_date">
                                                   <div id="txtbirth_date1"></div>
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
                                                    <input type="text" class="form-control col-md-6" id="ttxmobile_no" name="ttxmobile_no">
                                                    <div id="ttxmobile_no1"></div>
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
                                                <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileimage_name" type="file" name="fileimage_name">
                                                    <div id="fileimage_name1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Description</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtdescription" name="txtdescription" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"></textarea>
                                                    <div id="txtdescription1"></div>
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
