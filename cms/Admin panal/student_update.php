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
	$selectQuery="SELECT * FROM student WHERE student_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("student","$id","student_id",$updstudent1);
	header("location:student_display.php");
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
                                                    <input type="text" class="form-control col-md-6" id="txtstudent_name" name="txtstudent_name" value="<?php echo $row['student_name'];?>">
                                                    <div id="txtstudent_name1"></div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-lg-2 control-label">Course</label>
                                                <div class="col-lg-10">
                                               <?php $query="select course_id,course_name from course";?>
                                                    <select id="cmbcourse_id" class="selectize-select" style="width: 150px" name="cmbcourse_id">
														<?php echo FillComboBoxUpdate($query,$row['course_id']);?>
                                                    </select>
                                                     <div id="cmbcourse_id1"></div>
                                                </div>
                                            </div>
											
											
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Birth date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtbirth_date" name="txtbirth_date" value="<?php echo $row['birth_date'];?>">
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
                                                    <input type="text" class="form-control col-md-6" id="ttxmobile_no" name="ttxmobile_no" value="<?php echo $row['mobile_no'];?>">
                                                    <div id="ttxmobile_no1"></div>
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
                                                <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control uniform_on" id="fileimage_name" type="file" name="fileimage_name">
                                                    <div id="fileimage_name1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Description</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtdescription" name="txtdescription" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px"><?php echo $row['description'];?></textarea>
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
