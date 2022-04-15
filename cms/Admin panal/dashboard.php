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
        <title>Admin CMS</title>
          <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
          <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
        <style >
            .card {
  background: #fff;
  border-radius: 1px;
  display: inline-table;
  height: 165px;
  margin: 1rem;
  position: relative;
  width: 260px;

}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  background:#fff;
  color:#B93A2F;
  opacity:100%;
  position: relative;
  border-radius: 18px;
  box-shadow: 0 0 10px 1px #B93A2F;
}
.card-2 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  background:#fff;
  color: #B93A2F;
  opacity: 100%;
  height: 110px;
  position: relative;
  width: 1110px;
  border-radius: 18px;
  box-shadow: 0 0 10px 1px #B93A2F;
}
.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
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
                                  <h4 align="center">DASHBOARD</h4>
                                </div>
                         <br>  

        <div class="card card-1">
        <h2 align="center"><i align="left" class="fa fa-procedures"></i><br>Total Patient</h2>
        
           <?php
            $query = "SELECT count(*) from patient";
            $rs=mysqli_query($cn,$query) or die(mysqli_error());
            $row=mysqli_fetch_array($rs);
            echo "<h1 align='center'>".$row[0]."</h1>";
            ?></div>
         <div class="card card-1">
        <h2 align="center"><i align="left" class="far fa-calendar-check"></i><br>Total Appointment</h2>
          <?php
            $query1 = "SELECT count(*) from appointment_table";
            $rs1=mysqli_query($cn,$query1) or die(mysqli_error());
            $row1=mysqli_fetch_array($rs1);
            echo "<h1 align='center'>".$row1[0]."</h1>";
            ?></div>
            <div class="card card-1">
        <h2 align="center"><i align="left" class="fa fa-calendar-check"></i><br>Today Appointment</h2>
         <?php
           $query3 = "SELECT count(*) from appointment_table where appointment_date='".date("m/d/Y")."'";
            $rs3=mysqli_query($cn,$query3) or die(mysqli_error());
            $row3=mysqli_fetch_array($rs3);
            echo "<h1 align='center'>".$row3[0]."</h1>";
            ?></div>
       
    <div class="card card-1">
       <h2 align="center"><i align="left" class="fa fa-user-md"></i><br>Total Doctor</h2>
          <?php
           $query4 = "SELECT count(*) from doctor";
            $rs4=mysqli_query($cn,$query4) or die(mysqli_error());
            $row4=mysqli_fetch_array($rs4);
            echo "<h1 align='center'>".$row4[0]."</h1>";
            ?></div>
            <div class="card card-2">
       <h2 align="center"><i align="left" class="fa fa-calendar-plus"></i><br>Last Seven Day Appointment</h2>
          <?php
           $query2 = "SELECT COUNT(t1.appointment_id),p1.patient_name,d1.doctor_name,t1.appointment_date from appointment_table as t1,patient as p1,doctor as d1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id group by appointment_date HAVING t1.appointment_date BETWEEN date_format(curdate()-7, '%m/%d/%Y') and date_format(curdate(), '%m/%d/%Y' ) order by t1.appointment_date desc ";
            $rs2=mysqli_query($cn,$query2) or die(mysqli_error());
           
            
        
            ?>
            <!-- table for seven record fetch-->
            <br>
            <br>
            <table class="table" >
  <thead border="1">
    <tr>
     
      <th scope="col"><h4 align='center'><b>Date</b></th>
      
      <th scope="col"><h4 align='center'><b>Total NO Appointment</b></th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row2=mysqli_fetch_array($rs2)){ ?> 
    <tr>
      

      <td><?php echo "<h4 align='center'>".$row2[3]."</h4>" ; ?></td>
      
      <td><?php echo "<h4 align='center'>".$row2[0]."</h4>"; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
          
</div>

             <!-- completre-->
             </div>
                    </div>
                   
                </div>
            </div>
        </div>

       <?php include('footer.php');?>
    </body>
</html>
