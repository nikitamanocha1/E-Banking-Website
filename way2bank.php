<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="f1" method="post" action="way2bank.php">
	<img src="../projectWork/images/way2bank.png" height="150" width="1350" />
    <br />
    <br />
    <center>
    
<table border="0" bgcolor="#CCCCFF" width="1350">
<tr>
</tr>
<tr>
</tr>
<tr>
	<td>
    </td>
    <td>
    </td>
	<td>
     <select name="ways">
    	<option value="1"> ATM </option>
        <option value="2"> BRANCHES </option>
        </select>
        
    </td>
    <td>
<form name="ff" method="post" action="way2bank.php">
    <select name="state">
    <option>SELECT STATE</option>
    <option value="punjab">PUNJAB</option>
    <option value="goa">GOA</option>
    <option value="chandigarh">CHANDIGARH</option>
    <option value="delhi">DELHI</option>
    </select><input type=submit name="b2" value="s" /></form>
    
    </td>
    <td>
    <?php
	if(isset($_POST['b2']))
	{
$con=new MySQLi("localhost","root","","pnbank");

	$sta=$_POST['state'];
	session_start();
	$_SESSION['sta']=$sta;

	if($con==true)
	{
	$cmd="select * from detailState where State='$sta'"; 
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				echo "<select name=city>";
				echo "<option>SELECT CITY</option>";
				while($rows=$result->fetch_array())
				{
					
    					
    					echo "<option value=".$rows[1].">".$rows[1] . "</option>";
    
				}
				echo "</select>";
			}
			else
			{
				echo " no rows found";
			}
		}
		else
		{
			echo "query problem";
		}
	}
	else
	{
		echo "connection problem";
	
}}
?>
    </td>
    <td>
    <input type="submit" name="b1" value="go"  />
    </td>
    
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
</table>
</center>
</form>
</body>
</html>
<?php
$con=new MySQLi("localhost","root","","pnbank");
if(isset($_POST['b1']))
{
	session_start();
	$state1=$_SESSION['sta'];
	$city1=$_POST['city'];

	if($con==true)
	{
	$cmd="select * from detailatm where state='$state1' and city='$city1'"; 
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($rows=$result->fetch_array())
				{
					echo "<br><br>";
					echo "<table border='1' cellpadding='6' cellspacing='6'>";
					echo "<tr><td>"; 
					echo "ATM ID : " . $rows[0] . "</td>";
					echo "<td> ADDRESS : " .$rows[1]. "</td></tr>";
					echo "<tr><td>";
					echo "CITY : " .$rows[2] . "</td>";
					echo "<td> STATE : " .$rows[3]. "</td></tr>";
					echo "<tr><td>";
					echo "CIRCLE : " .$rows[4] . "</td>";
					echo "<td>PIN CODE :" .$rows[5] . "</td></tr>";
					echo "<tr><td>";
					echo "AREA : " .$rows[6] . "</td>";
					echo " <td>SITE : " .$rows[7] . "</td>";
					echo "</table>";
					echo "<br><br>";
				}
			}
			else
			{
				echo " no rows found";
			}
		}
		else
		{
			echo "query problem";
		}
	}
	else
	{
		echo "connection problem";
	}
}
?>