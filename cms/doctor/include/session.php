<?php
session_start();
if(isset($_SESSION['userid']))
{
	$admin_id=$_SESSION['userid'];
	
}
else
{
	header("location:index.php");
}
	
?>
