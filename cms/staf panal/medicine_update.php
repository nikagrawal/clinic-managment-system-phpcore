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
	$selectQuery="SELECT * FROM medicine WHERE Medicine_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("medicine","$id","Medicine_id","");
	header("location:medicine_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">medicine</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>medicine Details</legend>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >Medicine_name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtMedicine_name" name="txtMedicine_name" value="<?php echo $row['Medicine_name'];?>">
                                                    <div id="txtMedicine_name1"></div>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" >Manufacture_company</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtManufacture_company" name="txtManufacture_company" value="<?php echo $row['Manufacture_company'];?>">
                                                    <div id="txtManufacture_company1"></div>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <label class="col-lg-2 control-label" >Quantity</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtQuantity" name="txtQuantity" value="<?php echo $row['Quantity'];?>">
                                                    <div id="txtQuantity1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Manufacture_date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtManufacture_date" name="txtManufacture_date" value="<?php echo $row['Manufacture_date'];?>">
                                                   <div id="txtManufacture_date1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Exprie_date</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control datepicker" id="txtExprie_date" name="txtExprie_date" value="<?php echo $row['Exprie_date'];?>">
                                                   <div id="txtExprie_date1"></div>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-lg-2 control-label" >Medicine_charge</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtMedicine_charge" name="txtMedicine_charge" value="<?php echo $row['Medicine_charge'];?>">
                                                    <div id="txtMedicine_charge1"></div>
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
