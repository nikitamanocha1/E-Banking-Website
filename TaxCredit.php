<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCFFCC; color:#00000">
<img src="images/way2bank.png" height="100" width="1350" />
<?php
include("topRetail.php");
?>
<br /><br /><br />
<?php
include("RetailButtons.php");
$pan=$_SESSION['pan'];
?>
<div style="margin-left:1in; margin-right:1in" >

<div style="font-size:18px"><br /><br />
<b style="font-size:24px"><br /><br />
View Tax Credit(Form 26AS) </b><br /> 
</div>
<br />
<br />
<div style="font-size:18px"><br /><br />
<b style="font-size:16px">
PAN Number List</b><br />
</div>
<br />
<br />
<?php
$con=new mysqli("localhost","root","","pnbank");
if($con==true)
{
	$cmd="select * from accountdetails where accountno='$user'";
	if($result=$con->query($cmd))
	{
		if($result->num_rows>0)
		{
			while($rows=$result->fetch_array())
			{
				echo "<table border='2' cellpadding='10px' width=1100px height=100px>
				<tr bgcolor=grey>
				<td width=300px> SELECT </td>
				<td width=300px> ACCOUNT NUMBER </td>
				<td width=300px> PAN CARD NUMBER </td>
				</tr>
				<tr>
				<td><form name='f1'>
				<input type='radio' name='r1' checked='checked'></form></td>
				<td>" . $rows[0] . "</td>
				<td>" . $rows[3] . "</td>
				</tr></table><br><br>";
			}
		}
		else
		{
			echo "no rows found";
		}
	}
	else
	{
		 echo "Query problem";
	}
}
else
{
	echo "connection problem";
}

?>
<div style="margin-left:9in">
<form name="f2" method="post" action="#">
<input type="submit" name="btn11" value="SUBMIT" style="font-size:22px; font-weight:bold; background-color:#000000; color:#CCCCCC" />
</form> 
</div>
</div>
<?php
if(isset($_POST['btn11']))
{
	header('location:incomeTax.php');
}
?>
<br /><br /><br /><br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="mobileBanking.php">MOBILE BANKING </a>

</div>
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

</body>
</html>
