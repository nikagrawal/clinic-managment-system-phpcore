   <?php
session_start();
   
if(isset($_SESSION['username']))
{
	
	$admin_name=$_SESSION['username'];
}
else
{
	header("location:index.php");
}
	
?>
