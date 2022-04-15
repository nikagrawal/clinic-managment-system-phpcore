<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";	
if(isset($_GET['id']))
{
	$query = "SELECT t1.appointment_id,t1.patient_id,t1.doctor_id,p1.patient_name,d1.doctor_name,t1.appointment_date,t1.appointment_time,s1.Status_name from appointment_table as t1,patient as p1,doctor as d1,status as s1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id and t1.Status_id = s1.Status_id and d1.doctor_id=".$_SESSION['userid'] ." and  appointment_date='".date("m/d/Y")."' and t1.appointment_id =".$_GET['id'];
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysql_error());
	$row=mysqli_fetch_array($rs);


}/*
$patient=$_REQUEST['txtpatient'];
$doctor=$_REQUEST['txtdoctor'];
$date=$_REQUEST['txtdoctor'];
$doctor=$_REQUEST['txtdoctor'];*/

if(isset($_REQUEST['btnsubmit']))
{
   /* $insert="insert into prescription(doctor_id,patient_id,Date,Discription) values()";*/
	insertData("prescription","Prescription_id","");
	$msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor CMS</title>
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
                                            <legend>Prescription Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Patient  Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient" name="txtpatient" value = "<?php  echo $row[3];?>" READONLY>
                                                    <div id="txtpatient1"></div>
                                                </div>
												 


                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Doctor  Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor" name="txtdoctor" value = "<?php  echo $row[4];?>" READONLY>
                                                    <div id="txtdoctor1"></div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-lg-2 control-label">Date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtdate" name="txtdate">
                                                   <div id="txtdate1"></div>
                                                </div>
                                            </div>

										   
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Priscription</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtpatient_Address" name="txtpatient_Address" class="form-control textarea-wysihtml5" placeholder="Enter text..." values="<?php  echo $row[4];?>" style="width: 100%; height: 200px"></textarea>
                                                    <div id="txtpatient_Address1"></div>
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
