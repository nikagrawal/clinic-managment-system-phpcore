<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{   
    
    insertData("appointment_table","appointment_id ","");
     $msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin CMS</title>
        <script src="pdf.js"></script>
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
                                    <div class="text-muted bootstrap-admin-box-title">APPOINTMENT </div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-conten8t collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend> Appointment Table</legend>
                                           
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label">Patient</label>
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
                                               <?php $query="select doctor_id,doctor_name from  doctor";?>
                                                    <select id="cmbdoctor_id" class="selectize-select" style="width: 150px" name="cmbdoctor_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbdoctor_id1"></div>
                                                </div>
                                            </div>
                                         <div class="form-group">
                                                <label class="col-lg-2 control-label">Appointment Date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtappointment_date" name="txtappointment_date">
                                                   <div id="txtappointment_date1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label">Time</label>
                                                <div class="col-lg-10">
                                                    <input type="time" class="form-control " id="txtappointment_time" name="txtappointment_time">
                                                   <div id="txtappointment_time1"></div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-lg-2 control-label">Status</label>
                                                <div class="col-lg-10">
                                               <?php $query="select Status_id,Status_name from  status";?>
                                                    <select id="cmbStatus_id" class="selectize-select" style="width: 150px" name="cmbStatus_id">
                                                        <?php echo FillComboBox($query);?>
                                                    </select>
                                                     <div id="cmbStatus_id1"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="btnsubmit" id="download"  >Save changes</button>
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
