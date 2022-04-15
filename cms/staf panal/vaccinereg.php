<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$msg="";
if(isset($_REQUEST['btnsubmit']))
{
	insertData("vaccinereg","vaccinereg_id ","");
    $cn=getCon();
    $query="select * from vaccinereg order by vaccinereg_id  desc ";
    $res=mysqli_query($cn,$query) or die(mysqli_error());
    $row=mysqli_fetch_array($res);
    header("location:vaccine_recept.php?vid=$row[0]");
	$msg="<div class=\"alert alert-success\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><strong>Success!</strong>Data save successfully.</div>";
	

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Staff CMS</title>
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
                                    <div class="text-muted bootstrap-admin-box-title">Vaccine Registration</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Vaccine Details</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" > Aadhar Card NO .</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtaadharcard" name="txtaadharcard">
                                                    <div id="txtaadharcard1"></div>
                                                </div>
                                            </div>
                                          <div class="form-group">
                                                <label class="col-lg-2 control-label">Vaccine Name</label>
                                                <div class="col-lg-10">
                                                    <select id="cmbvname" class="selectize-select" style="width: 150px" name="cmbvname">
                                                        <option value="select">Select Vaccine</option>
                                                        <option value="COVAXIN">COVAXIN</option>
                                                        <option value="COVIDSHIELD">COVIDSHIELD</option>
                                                        <option value="SPUNTNIK">SPUNTNIK</option>
                                                    </select>
                                                     <div id="cmbvname1"></div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label" > Name of Member.</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtname" name="txtname">
                                                    <div id="txtname1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">CHARGE</label>
                                                <div class="col-lg-10">
                                                    <select id="cmbprice" class="selectize-select" style="width: 150px" name="cmbprice">
                                                        <option value="select">Select Vaccine</option>
                                                        <option value="150">150</option>
                                                        <option value="250">250</option>
                                                        <option value="900">900</option>
                                                    </select>
                                                     <div id="cmbprice1"></div>
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
                                                <label class="col-lg-2 control-label">Birth date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtdate" name="txtdate">
                                                   <div id="txtdate1"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="btnsubmit">Save</button>
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
