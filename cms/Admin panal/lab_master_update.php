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
	$selectQuery="SELECT * FROM lab_master WHERE lab_master_id=".$id;
	$rs=mysqli_query($cn,$selectQuery) or die("".mysqli_error());
	$row=mysqli_fetch_array($rs);
	//echo $selectQuery;
}
if(isset($_REQUEST['btnsubmit']))
{
	updateData("lab_master","$id","lab_master_id","");
	header("location:lab_master_display.php");
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
                                    <div class="text-muted bootstrap-admin-box-title">Lab Master</div>
                                </div>
                                <?php echo $msg;?>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" onSubmit="return validate(this);" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>lab </legend>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" >lab_name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="txtlab_name" name="txtlab_name" value="<?php echo $row['lab_name'];?>">
                                                    <div id="txtlab_name1"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Address</label>
                                                <div class="col-lg-10">
                                                    <textarea id="txtlab_address" name="txtlab_address" class="form-control textarea-wysihtml5" placeholder="Enter text..." style="width: 100%; height: 200px" value="<?php echo $row['lab_address'];?>"></textarea>
                                                    <div id="txtlab_address1"></div>
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
