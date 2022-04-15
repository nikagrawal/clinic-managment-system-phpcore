<?php
//ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{   
    
    insertData("appointment_table","appointment_id ","");
    header('location:recept.php');
    $did=$_REQUEST['cmbdoctor_id'];
    $pid=$_REQUEST['cmbpatient_id'];

    $token=1;

    $query="select * from token where doctor_id = $did AND date='".date("d-m-y")."' order by token_no desc ";
    $cn=getCon();
    $res=mysqli_query($cn,$query) or die(mysqli_error());
    if(mysqli_num_rows($res)==0)
    {
        $q="insert into token ( patient_id, doctor_id,date,token_no,Status_id) values ($pid,$did,'".date('d-m-y')."',$token,1)";
    }
    else
    {
    $row=mysqli_fetch_array($res);
    $token = $row['token_no']+1;
    $q="insert into token ( patient_id, doctor_id,date,token_no,Status_id) values ($pid,$did,'".date('d-m-y')."',$token,1)";
}
/*$mq="select t.token_id , p.patient_name ,d.doctor_name ,t.token_no,t.date,a1.appointment_time,d.doctor_fees ,p.email_id
from token  as t , patient as p , doctor as d , appointment_table as a1
where t.patient_id = p.patient_id   and
t.doctor_id = d.doctor_id";

    $re=mysqli_query($cn,$mq) or die(mysqli_error());
    $ro=mysqli_fetch_array($re);
$to="clinicmanagementsystemproject@gmail.com";
        
            
            if(mail($_POST['email'],$_POST['subject'],$_POST['message'])){ ?>
                <script>
                function myFunction() {
                alert("mail is sent");
                }
                </script>
                
            <?php
            }
            else
            {?>
                <script>
                function myFunction() {
                alert("mail is not sent");
                }
                </script>

            <?php
            }*/
        
    

    exeNonQuery($q);

   $query="select * from token order by  token_id desc ";
    $res=mysqli_query($cn,$query) or die(mysqli_error());
    $row=mysqli_fetch_array($res);
  
header("location:recept.php?tid=$row[0]");
    
    
        
    
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
                                    <div class="text-muted bootstrap-admin-box-title">appointment_table</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-conten8t collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Appointment Table</legend>
                                           
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
                                           <input type="hidden"  id="email" name="email"  value="<?php echo $ro[7]; ?>">
                                            <input type="hidden" id="subject" name="subject" VALUE="WELCOME CLINIC MANAGEMENT SYSTEM <?php echo $ro[3]; ?>" >
                                              <input type="hidden" id="message" name="message" VALUE="your Token No : <?php echo $ro[3]; ?> " >
                                                                                          <button type="submit" class="btn btn-primary" onclick="myFunction()" name="btnsubmit" 0b  >Save changes</button>
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
