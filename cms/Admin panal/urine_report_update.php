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
	$selectQuery="SELECT * FROM urine_report WHERE urine_report_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("urine_report","$id","urine_report_id","");
	header("location:urine_report_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">Urine report</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Urine Report Details</legend>
                                           
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
                                                <label class="col-lg-2 control-label" >urine_color</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txturine_color" name="txturine_color" value="<?php echo $row['urine_color'];?>">
                                                    <div id="txturine_color1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >sugar_urine</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtsugar_urine" name="txtsugar_urine" value="<?php echo $row['sugar_urine'];?>">
                                                    <div id="txtsugar_urine1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >quantity</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtquantity" name="txtquantity" value="<?php echo $row['quantity'];?>">
                                                    <div id="txtquantity1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >pus_cells</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpus_cells" name="txtpus_cells" value="<?php echo $row['pus_cells'];?>">
                                                    <div id="txtpus_cells1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Epithelial_cells</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtEpithelial_cells" name="txtEpithelial_cells" value="<?php echo $row['Epithelial_cells'];?>">
                                                    <div id="txtEpithelial_cells1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Crystals</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtCrystals" name="txtCrystals" value="<?php echo $row['Crystals'];?>">
                                                    <div id="txtCrystals1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >RBC_urine</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtRBC_urine" name="txtRBC_urine" value="<?php echo $row['RBC_urine'];?>">
                                                    <div id="txtRBC_urine1"></div>
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
