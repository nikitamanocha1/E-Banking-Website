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
<br /><br /><br /><br />
<?php
include("RetailButtons.php");

?>
<div style="margin-left:2in; margin-right:2in" >

<div style="font-size:18px; border-bottom:groove; border-bottom-color:#333333"><br /><br />
<b style="font-size:24px">
Set Account Nik Name</b><br /> 
</div>
<br />
<br />
</div>
</body>
<?php

$con=new mysqli("localhost","root","","pnbank");
if($con==true)
{
	$cmd="select * from personalDetails where accountNo='$user'";
	if($result=$con->query($cmd))
	{
		if($result->num_rows>0)
		{
			while($rows=$result->fetch_array())
			{
				echo "<br><br> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; User Accounts <br>";
				echo "<table border='2' cellpadding='10px' width=1300px height=100px><tr bgcolor=grey>
				<td width=20px>SELECT</td>
				<td width=300px>CUSTOMER ID</td>
				<td width=300px>ACCOUNTS LINKED</td>
				<td width=300px>ACCOUNT NICKNAME</td>
				</tr>
				<tr>";
				echo "<td><form name='f1'>
				<input type='radio' name='r1' checked='checked'></td>";
				echo "<td>" . $rows[4] . "</td>";
				echo "<td>" . $rows[0] . "</td>";
				echo "<td>" . $rows[3] . "</td>";
				echo "</tr></table>";
			}
		}
		else
		{
			?>
	    	    <script language="javascript">
				alert("Password Updated");
				</script>	
			<?php
		}
	}
	else
	{
		echo "connection problem";
	}
}


?>
<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="">PRIVACY POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFO |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="mobileBanking.php">MOBILE BANKING |</a>
</div>
<div style="height:30px; width:300px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK
</div>

</body>
</html>
