<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("lab_details","lab_id","");
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
                                    <div class="text-muted bootstrap-admin-box-title">lab Details</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>lab_details Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Patient </label>
                                                <div class="col-lg-10">
                                               <?php $query="select patient_id,patient_name from patient";?>
                                                    <select id="cmbpatient_id" class="selectize-select" style="width: 150px" name="cmbpatient_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbpatient_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Doctor</label>
                                                <div class="col-lg-10">
                                               <?php $query="select doctor_id,doctor_name from doctor";?>
                                                    <select id="cmbdoctor_id" class="selectize-select" style="width: 150px" name="cmbdoctor_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbdoctor_id1"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Disease</label>
                                                <div class="col-lg-10">
                                               <?php $query="select disease_id,Disease_name from disease";?>
                                                    <select id="cmbdisease_id" class="selectize-select" style="width: 150px" name="cmbdisease_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbdisease_id1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label">Report Detail</label>
                                                <div class="col-lg-10">
                                               <?php $query="select report_name_id,report_name from report_details";?>
                                                    <select id="cmbreport_name_id" class="selectize-select" style="width: 150px" name="cmbreport_name_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbreport_name_id1"></div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Report Charge</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtreport_charge" name="txtreport_charge">
                                                    <div id="txtreport_charge1"></div>
                                                </div>
                                            </div>
											
											

											
											
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtReport_date" name="txtReport_date">
                                                   <div id="txtReport_date1"></div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label">Report Time</label>
                                                <div class="col-lg-10">
                                               <?php $query="select report_time_id,report_times from report_time";?>
                                                    <select id="cmbreport_time_id" class="selectize-select" style="width: 150px" name="cmbreport_time_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbreport_time_id1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">status</label>
                                                <div class="col-lg-10">
                                               <?php $query="select Status_id,Status_name from status";?>
                                                    <select id="cmbStatus_id" class="selectize-select" style="width: 150px" name="cmbStatus_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbStatus_id1"></div>
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
