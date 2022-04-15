        <!-- footer -->
        <div class="navbar navbar-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo">
                            <p class="right"> </p>
                            <p class="right">Developed By:-  <a href="" target="_blank"> Nikhil  2021  </a></p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

<?php /*
$username=$_POST['username'];
            $password=$_POST['password'];
            $sql="SELECT doctor_name  from doctor WHERE doctor_email= '".$username."' AND doctor_password = '".$password."'";
            $cn=getCon();
            $result=mysqli_query($cn,$sql) or die("queery failed");
            while($row= mysqli_fetch_array($result))
            {

                
                $_SESSION["username"]= $row[0];
                
                $_SESSION['sdate'] = date("d/m/y- h:i:s A");
                //$_SESSION["password"]= $row[2];
                header("location:appointment_table_display.php");



 $q="SELECT t1.appointment_id,p1.patient_name,d1.doctor_name,t1.appointment_date,t1.appointment_time,s1.Status_name from appointment_table as t1,patient as p1,doctor as d1,status as s1 WHERE t1.patient_id = p1.patient_id and t1.doctor_id = d1.doctor_id and t1.Status_id = s1.Status_id and d1.doctor_id=".$_SESSION['userid'] ." and  appointment_date='".date("m/d/Y")."'";
        echo $q;
        $arr=array("Patient Name","Doctor Name","Date","Time","Status");
        echo displayData($arr,$q,"appointment_table_update.php","appointment_table_display.php","");
        */ 
        ?>