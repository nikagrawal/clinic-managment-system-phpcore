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
	$selectQuery="SELECT * FROM blood_report WHERE Blood_Report_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("blood_report","$id","Blood_Report_id","");
	header("location:blood_report_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">Blood report</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Blood Rep Details</legend>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label">lab ID</label>
                                                <div class="col-lg-10">
                                               <?php $query="select lab_master_id,lab_name from lab_master";?>
                                                    <select id="cmblab_master_id" class="selectize-select" style="width: 150px" name="cmblab_master_id">
                                                        <?php echo FillComboBox($query,$row['lab_master_id']);?>
                                                    </select>
                                                     <div id="cmblab_master_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Patient</label>
                                                <div class="col-lg-10">
                                               <?php $query="select patient_id,patient_name from patient";?>
                                                    <select id="cmbpatient_id" class="selectize-select" style="width: 150px" name="cmbpatient_id">
                                                        <?php echo FillComboBox($query,$row['patient_id']);?>
                                                    </select>
                                                     <div id="cmbpatient_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Doctor</label>
                                                <div class="col-lg-10">
                                               <?php $query="select doctor_id,doctor_name from  doctor";?>
                                                    <select id="cmbdoctor_id" class="selectize-select" style="width: 150px" name="cmbdoctor_id">
                                                        <?php echo FillComboBox($query,$row['doctor_id']);?>
                                                    </select>
                                                     <div id="cmbdoctor_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Hemoglobin</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtHemoglobin" name="txtHemoglobin" value="<?php echo $row['Hemoglobin'];?>">
                                                    <div id="txtHemoglobin1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >RBC_of_blood</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtRBC_of_blood" name="txtRBC_of_blood" value="<?php echo $row['RBC_of_blood'];?>">
                                                    <div id="txtRBC_of_blood1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >WBC_of_blood</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtWBC_of_blood" name="txtWBC_of_blood" value="<?php echo $row['WBC_of_blood'];?>">
                                                    <div id="txtWBC_of_blood1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >mcv_of_blood</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtmcv_of_blood" name="txtmcv_of_blood" value="<?php echo $row['mcv_of_blood'];?>">
                                                    <div id="txtmcv_of_blood1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >mch_of_blood</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtmch_of_blood" name="txtmch_of_blood" value="<?php echo $row['mch_of_blood'];?>">
                                                    <div id="txtmch_of_blood1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Protein</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtProtein" name="txtProtein" value="<?php echo $row['Protein'];?>">
                                                    <div id="txtProtein1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Calcium</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtCalcium" name="txtCalcium" value="<?php echo $row['Calcium'];?>">
                                                    <div id="txtCalcium1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Cholesterol</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtCholesterol" name="txtCholesterol" value="<?php echo $row['Cholesterol'];?>">
                                                    <div id="txtCholesterol1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Sodium</label>
                                                <div class="col-lg-10" value="<?php echo $row['Sodium'];?>">
                                                    <input type="text" class="form-control col-md-6" id="txtSodium" name="txtSodium">
                                                    <div id="txtSodium1"></div>
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
