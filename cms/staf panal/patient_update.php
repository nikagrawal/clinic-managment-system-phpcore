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
    $selectQuery="SELECT * FROM patient WHERE patient_id=".$id;
    $rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
    $row=mysqli_fetch_array($rs);
    //echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
    updateData("patient","$id","patient_id","");
    header("location:patient_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">patient</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>patient Details</legend>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Patient Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient_name" name="txtpatient_name" value="<?php echo $row['patient_name'];?>">
                                                    <div id="txtpatient_name1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Father Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient_Father_name" name="txtpatient_Father_name" value="<?php echo $row['patient_Father_name'];?>">
                                                    <div id="txtpatient_Father_name1"></div>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Email Id</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txxemail_id" name="txxemail_id"  value="<?php echo $row['email_id'];?>">
                                                    <div id="txxemail_id1"></div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Age</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient_age" name="txtpatient_age" value="<?php echo $row['patient_age'];?>">
                                                    <div id="txtpatient_age1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Weight</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpatient_Weight" name="txtpatient_Weight" value="<?php echo $row['patient_Weight'];?>">
                                                    <div id="txtpatient_Weight1"></div>
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
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">patient_Address</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtpatient_Address" name="txtpatient_Address" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px" value="<?php echo $row['patient_Address']; ?>"></textarea>
                                                    <div id="txtpatient_Address1"></div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label">Blood Group</label>
                                                <div class="col-lg-10">
                                               <?php $query="select Blood_id,Blood_name from blood_group";?>
                                                    <select id="cmbBlood_id" class="selectize-select" style="width: 150px" name="cmbBlood_id">
                                                        <?php echo FillComboBox($query,$row['Blood_id']);?>
                                                    </select>
                                                     <div id="cmbBlood_id1"></div>
                                                </div>
                                                </div>
                                                 <div class="form-group">
                                                <label class="col-lg-2 control-label" >password</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtpassword" name="txtpassword" value="<?php echo $row['password'];?>">
                                                    <div id="txtpassword1"></div>
                                                </div>
                                            </div>
                                           
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Contact No</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="ttxPhone_no" name="ttxPhone_no" value="<?php echo $row['Phone_no'];?>">
                                                    <div id="ttxPhone_no1"></div>
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
