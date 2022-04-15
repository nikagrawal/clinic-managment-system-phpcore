<?php
include("include/connection.php");
include("include/session.php");

$cn=getCon();

$query = "insert into session(name,type,startdate,enddate) values ('".$_SESSION["username"]."','patient' ,'".$_SESSION['sdate']."','".date("d/m/y- h:i:s A")."' )";

mysqli_query($cn,$query) or die("exeNonQuery Error : ".mysqli_error());




session_destroy();
header("location:index.php");
?>