<html>
	<head></head>
	<body>
		<form method="post" action="">
			<center><h2>Excel</h2></center>
			<table align="center" border=1 cellspacing=5>
				<th>Roll No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Password</th>
				<?php
				$con = mysqli_connect("localhost","root","","student_mca_db");
				$q = "select * from student";
				$result = mysqli_query($con,$q);
				while($row=mysqli_fetch_array($result))
				{
				?>
					<tr>
						<td><?php echo $row['0']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['password']; ?></td>
					</tr>
				<?php
				}
				?>
				<tr>
					<td align="center" colspan=6><input type="submit" name="save" value="save to excel"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_REQUEST['save']))
	{
		header("Content-Type.: application/xml");
		header("Content-Disposition: attachment; filename=download.xls");
	}
?>