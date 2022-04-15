<?php
$updadmin="Admin/images/admin";//Client Site
$updadmin1="images/admin/";//Admin Insert, Display
$upddoctor="Admin/images/doctor";//Client Site
$upddoctor1="images/doctor/";//Admin Insert, Display
function getCon()
{
$con=mysqli_connect("localhost","root","","newcms_db") or die("Connection Error".mysqli_error());
//mysql_select_db("student_db",$con) or die("Database Error".mysql_error());
return $con;
}
function exeNonQuery($query)
{
	$cn=getCon();
	mysqli_query($cn,$query) or die("exeNonQuery Error : ".mysqli_error());
}

function exeScaller($query)
{
	$cn=getCon();
	$rs1=mysqli_query($cn,$query) or die(mysqli_error());
	$row1=mysqli_fetch_array($rs1) or die(mysqli_error());
	return $row1[0];
}
function sendMail($to1,$msg1)
{
		$to = "<".$to1.">"; 
		$from = "getnlogo@gmail.com"; 
		$subject = "Appointment Recept";
  		$message=$msg1;		
		$headers  = "From: $from\r\n";
		$headers .= "Content-type: text/html\r\n"; 
		// now lets send the email. 
    	//mail($to, $subject, $message, $headers); 
}


function FillComboBox($query)
{
	$cn=getCon();
	$cmbStr="<option value=\"select\">Select</option>";
	$cmbRS=mysqli_query($cn,$query) or die(mysqli_error());
	while($cmbRow=mysqli_fetch_array($cmbRS))
	{
		$cmbStr=$cmbStr."<option value=".$cmbRow[0].">".$cmbRow[1]."</option>";
	}
	return $cmbStr;
}
function FillComboBoxUpdate($query,$id)
{
	$cn=getCon();
	$cmbStr="<option value=\"select\">Select</option>";
	$cmbRS=mysqli_query($cn,$query) or die(mysqli_error());
	while($cmbRow=mysqli_fetch_array($cmbRS))
	{
		if($cmbRow[0]==$id)
			$cmbStr=$cmbStr."<option selected=\"selected\" value=".$cmbRow[0].">".$cmbRow[1]."</option>";
		else
			$cmbStr=$cmbStr."<option value=".$cmbRow[0].">".$cmbRow[1]."</option>";
	}
	return $cmbStr;
}
function displayData($arr,$query,$pgEdit,$pgDelete,$folder)
{
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());
	
	$table="<table class=\"table table-striped table-bordered\" id=\"example\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."<th width=\"150px\">Action</th></tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class=\"odd gradeX\"><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
				if($i==2 && $folder!="")
				{ 
					$table=$table."<td class=\"\"><img src=\"$folder/$row[$i]\" title=\"Image\" width=\"150px\" height=\"100px\" style=\"width:100px;height:100px\" /></td>";
				}
				else
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."<td>
			<a href=\"$pgEdit?id=$row[0]\"><button class=\"btn btn-sm btn-primary\"><i class=\"glyphicon glyphicon-pencil\"></i>Edit</button></a> 
			<a href=\"$pgDelete?id=$row[0]\" onclick=\"if(!confirm('Are you sure that you want to permanently delete the selected element?'))return false\"><button class=\"btn btn-sm btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>Delete</button></a>
			</td></tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}
function display($arr,$query)
{
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysql_error());
	
	$table="<table class=\"table table-striped table-bordered\" id=\"example\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."<th width=\"150px\">Action</th></tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class=\"odd gradeX\"><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
				if($i==2 && $folder!="")
				{ 
					$table=$table."<td class=\"\"><img src=\"$folder/$row[$i]\" title=\"Image\" width=\"150px\" height=\"100px\" style=\"width:100px;height:100px\" /></td>";
				}
				else
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."</tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}

function displayData_appoitment($arr,$query,$pgEdit,$pgDelete,$folder)
{
	$cnt=1;
	$cn=getCon();
	$rs=mysqli_query($cn,$query) or die(mysqli_error());
	
	$table="<table class=\"table table-striped table-bordered\" id=\"example\"><thead><tr><th>#</th>";
	for($i=0;$i< sizeof($arr);$i++)
	{ 
		$table=$table."<th>$arr[$i]</th>";
	}
	$table=$table."<th width=\"150px\">Action</th></tr></thead><tbody>";	
	while($row=mysqli_fetch_array($rs))
	{
			$table=$table."<tr class=\"odd gradeX\"><td> $cnt</td>";
			for($i=1;$i<= sizeof($arr);$i++)
			{
				if($i==2 && $folder!="")
				{ 
					$table=$table."<td class=\"\"><img src=\"$folder/$row[$i]\" title=\"Image\" width=\"150px\" height=\"100px\" style=\"width:100px;height:100px\" /></td>";
				}
				else
					$table=$table."<td>$row[$i]</td>";
			}
			$table=$table."<td>
			<a href=\"$pgEdit?id=$row[0]\"><button class=\"btn btn-sm btn-primary\"><i class=\"glyphicon glyphicon-pencil\"></i>prescription</button></a> 
			<a href=\"$pgDelete?id=$row[0]\" onclick=\"if(!confirm('Are you sure that you want to cancel?'))return false\"><button class=\"btn btn-sm btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i>Cancel</button></a>
			</td></tr>";
	$cnt++;
	}
	$table=$table."</tbody></table>";
	echo $table;
}




function insertData($tableName,$id,$folder)
{
	$cn=getCon();
	$result1 = '';
	$result2 = '';
	foreach ($_POST as $key => $value) 
	{
		if($value!=NULL)
		{
			if(substr($key,0,3)=="ttt" ||substr($key,0,3)=="txt" || substr($key,0,3)=="ttx" || substr($key,0,3)=="txx" || substr($key,0,3)=="cmb" || substr($key,0,3)=="rbt" || substr($key,0,3)=="t11" || substr($key,0,3)=="pwd")
			{
			$result1 .= substr($key,3).",";
			$result2 .= "'$value',";
			}
		}
	}
	foreach ($_FILES as $key => $value) 
	{
		if($key=="fileimage_name")
		{
			if($_FILES["fileimage_name"]["size"]>0)
			{
				if(substr($key,0,4)=="file")
				{
					$result1 .= substr($key,4).",";
					$result2 .= "'".uploadImage($id,$tableName,$folder)."',";
				}
			}
		}
		if($key=="pdffile_name")
		{
			if($_FILES["pdffile_name"]["size"]>0)
			{
				if(substr($key,0,3)=="pdf")
				{
					$result1 .= substr($key,3).",";
					$result2 .= "'".uploadPdf($id,$tableName,$folder)."',";
				}
			}
		}
		if(substr($key,0,3)=="iex")
		{
			if($_FILES["iexexcel_file"]["size"]>0)
			{
				if(substr($key,0,3)=="iex")
				{
					$result1 .= substr($key,3).",";
					$result2 .= "'".uploadexcel($id,$tableName,$folder)."',";
				}
			}
		}
	}
	$result1=substr($result1,0,strlen($result1)-1);
	$result2=substr($result2,0,strlen($result2)-1);
	$q="INSERT INTO $tableName ($result1) VALUES ($result2)";
//	echo $q;
	mysqli_query($cn,$q) or die(mysqli_error());
}
function updateData($tableName,$id,$strid,$folder)
{
	$cn=getCon();
	$result = '';
	foreach ($_POST as $key => $value) 
	{
			if(substr($key,0,3)=="ttt" ||substr($key,0,3)=="txt" || substr($key,0,3)=="ttx" || substr($key,0,3)=="txx" || substr($key,0,3)=="cmb" || substr($key,0,3)=="rbt" || substr($key,0,3)=="t11" || substr($key,0,3)=="pwd" || substr($key,0,3)=="uex")
			{
			$result .= substr($key,3)."='$value',";
			}
	}
	foreach ($_FILES as $key => $value)
	{
		if($key=="fileimage_name")
		{
			if($_FILES["fileimage_name"]["size"]>0)
			{
				if(substr($key,0,4)=="file")
				{
					$result .= substr($key,4)."='".uploadImageUpdate($id,$tableName,$folder)."',";
				}
			}
		}
		if($key=="pdffile_name")
		{
			if($_FILES["pdffile_name"]["size"]>0)
			{
				if(substr($key,0,3)=="pdf")
				{
					$result .= substr($key,3)."='".uploadPdfUpdate($id,$tableName,$folder)."',";
				}
			}
		}
		if(substr($key,0,3)=="uex")
		{
			if($_FILES["uexexcel_file"]["size"]>0)
			{
				if(substr($key,0,3)=="uex")
				{
					$result .= substr($key,3)."='".uploadexcelUpdate($id,$tableName,$folder)."',";
				}
			}
		}
	}
	$result=substr($result,0,strlen($result)-1);
	$q="UPDATE $tableName SET $result WHERE $strid=$id";
	//echo $q;exit;
	mysqli_query($cn,$q) or die(mysqli_error());
}
function uploadImage($id,$tableName,$folder)
{
	$selectQuery="SELECT MAX($id) FROM $tableName";
	$cnt=((int)exeScaller($selectQuery)+1);
	$imgName="image".$cnt.".jpg";
	move_uploaded_file($_FILES["fileimage_name"]["tmp_name"],$folder."//".$imgName);
	return $imgName;
}
function uploadImageUpdate($id,$tableName,$folder)
{
	$imgName="image".$id.".jpg";
	move_uploaded_file($_FILES["fileimage_name"]["tmp_name"],$folder."//".$imgName);
	return $imgName;
}
?>