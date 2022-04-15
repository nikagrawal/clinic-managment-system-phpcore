<?php
ini_set("display_errors",0);
include("include/connection.php");
include("include/session.php");
$cn=getCon();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $q="DELETE FROM admin WHERE Admin_id=".$id;
    exenonQuery($q);
    header("location:admin_display.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tables | Bootstrap 3.x Admin Theme</title>
        <style >
            .card {
  background: #fff;
  border-radius: 1px;
  display: inline-table;
  height: 175px;
  margin: 1rem;
  position: relative;
  width: 250px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
   background: #fff;
  color: #F22C2C;
  opacity: 100%;
  position: relative;
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.card-2:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.15), 0 10px 10px rgba(0,0,0,0.2);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
        </style>
        <?php include('link_display.php');?>
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <?php include('header.php');?>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">

                <!-- content -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h1>ADMIN</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Bootstrap dataTables</div>
                                </div>
                                
        <div class="card card-1">
        <h2 class="fas fa-procedures" align="center"> Total Patient</h3>
            <i ></i>
          <?php
            $query1 = "SELECT count(*) from patient";
            $rs1=mysqli_query($cn,$query1) or die(mysqli_error());
            $row1=mysqli_fetch_array($rs1);
            echo "<h1 align='center'>".$row1[0]."</h1>";
            ?></div>
  <div class="card card-1"> <h2 align="center"> Total Appointment</h2>
          <?php
            $query1 = "SELECT count(*) from appointment_table";
            $rs1=mysqli_query($cn,$query1) or die(mysqli_error());
            $row1=mysqli_fetch_array($rs1);
            echo "<h1 align='center'>".$row1[0]."</h1>";
            ?></div>
  <div class="card card-1">
        <h2 align="center">Taday  Appointment</h2>
         <?php
           $query3 = "SELECT count(*) from appointment_table where appointment_date='".date("m/d/Y")."'";
            $rs3=mysqli_query($cn,$query3) or die(mysqli_error());
            $row3=mysqli_fetch_array($rs3);
            echo "<h1 align='center'>".$row3[0]."</h1>";
            ?></div>
    <div class="card card-1">
       <h2 align="center">Total Doctor</h2>
          <?php
           $query4 = "SELECT count(*) from doctor";
            $rs4=mysqli_query($cn,$query4) or die(mysqli_error());
            $row4=mysqli_fetch_array($rs4);
            echo "<h1 align='center'>".$row4[0]."</h1>";
            ?></div>
             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <?php include('footer.php');?>
    </body>
</html>
