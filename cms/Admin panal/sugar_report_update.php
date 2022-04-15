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
	$selectQuery="SELECT * FROM sugar_report WHERE sugar_report_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("sugar_report","$id","sugar_report_id","");
	header("location:sugar_report_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">Sugar Report</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Sugar Report Details</legend>
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
                                                <label class="col-lg-2 control-label" >Hemoglobin_sugar</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtHemoglobin_sugar" name="txtHemoglobin_sugar" value="<?php echo $row['Hemoglobin_sugar'];?>">
                                                    <div id="txtHemoglobin_sugar1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >tlc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txttlc" name="txttlc" value="<?php echo $row['tlc'];?>">
                                                    <div id="txttlc1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >dlc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdlc" name="txtdlc" value="<?php echo $row['dlc'];?>">
                                                    <div id="txtdlc1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >mcv_sugar</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtmcv_sugar" name="txtmcv_sugar" value="<?php echo $row['mcv_sugar'];?>">
                                                    <div id="txtmcv_sugar1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >blood_urea</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtblood_urea" name="txtblood_urea" value="<?php echo $row['blood_urea'];?>">
                                                    <div id="txtblood_urea1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >blood_sugar</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtblood_sugar" name="txtblood_sugar" value="<?php echo $row['blood_sugar'];?>">
                                                    <div id="txtblood_sugar1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >serum_sodium</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtserum_sodium" name="txtserum_sodium" value="<?php echo $row['serum_sodium'];?>">
                                                    <div id="txtserum_sodium1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >serum_potassium</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="serum_potassium" name="txtserum_potassium" value="<?php echo $row['serum_potassium'];?>">
                                                    <div id="txtserum_potassium1"></div>
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
