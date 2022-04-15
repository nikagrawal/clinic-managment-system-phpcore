<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
$appointment_id ="";
$doctor_id="";
$patient_id="";
$discription="";
if(isset($_GET['id']))
{
	$appointment_id = $_GET['id'];
	$query = "SELECT t1.appointment_id,t1.patient_id,t1.doctor_id,p1.patient_name,d1.doctor_name,t1.appointment_date,t1.appointment_time,t1.Status_id from appointment_table as t1,patient as p1,doctor as d1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id and  t1.appointment_id =".$_GET['id'];
//echo $query;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());
	$row=mysqli_fetch_array($rs);
$doctor_id= $row[2];
$patient_id=$row[1];


    $query1 = "SELECT * from prescription  where appointment_id =".$appointment_id;
  //  echo $query1;
$discription=['txtDiscription'];
$rs1=mysqli_query($cn,$query1) or die(mysqli_error());
    $row1=mysqli_fetch_array($rs1);
}


if(isset($_REQUEST['btnsubmit']))
{
  
$date=date("d/m/y");
$Discription=$_REQUEST['txtDiscription'];
   $insert="insert into prescription(doctor_id,patient_id,Date,Discription	,appointment_id) values($patient_id,$doctor_id,'$date','$Discription',$appointment_id)";
 //  echo  $insert;
   $cn=getCon();
	$rs=mysqli_query($cn,$insert) or die(mysqli_error());

   $update="update appointment_table set 	Status_id = 'checked' where appointment_id=$appointment_id";
$rs=mysqli_query($cn,$update) or die(mysqli_error());

$update="update token set 	Status_id = 'checked' where appointment_id=$appointment_id";



   //insertData("prescription","Prescription_id","");
    $query2="select * from prescription ";
    $res=mysqli_query($cn,$query2) or die(mysqli_error());
    $row1=mysqli_fetch_array($res);
    header("location:priscription_recept.php?pid=$row1[0]");
    $msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";

//header("location:appointment_total_display.php");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Patient CMS</title>
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
                                    <div class="text-muted bootstrap-admin-box-title">Prescription View</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Prescription</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Patient  Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient" name="txtpatient" value = "<?php  echo $row[3];?>" READONLY>
                                                    <div id="txtpatient1"></div>
                                                </div>
                                               </div>  


                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Doctor  Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtdoctor" name="txtdoctor" value = "<?php  echo $row[4];?>" READONLY>
                                                    <div id="txtdoctor1"></div>
                                                </div>
                                            </div>
                                                   <input type="hidden" class="form-control datepicker" id="txtdate" name="txtdate">
                                                   
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Prescription</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtDiscription" name="txtDiscription" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px" value="<?php  echo $row1[4];?>" > <?php  echo $row1[4];?></textarea>
                                                    <div id="txtDiscription1"></div>
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
