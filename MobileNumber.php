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

<div style="font-size:18px; border-bottom:groove; border-bottom-color:#000000"><br /><br />
<b style="font-size:24px">
View Registered Mobile Number</b><br /> 
</div>
<br />
<br />
</div>
<div style="font-size:18px; margin-left:3in"><br /><br />
<b style="font-size:16px">
Primary Customer Id :  <?php echo $cID; ?>  <br>
<br><br> <b> Mobile Number Linked To CustomerID </b><br>

</b><br />
</div>
<br />
<br />

				
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
				
				
				
                echo "<table border='2' cellpadding='10px' width=1300px height=100px><tr bgcolor=grey>
				<td>CUSTOMER ID</td>
				<td>ACCOUNTS LINKED</td>
				<td>MOBILE NUMBER</td>
				</tr>
				<tr>
				<td width=300px>" . $rows[4] . "</td>
				<td width=300px>" . $rows[0] . "</td>
				<td width=300px>" . $rows[11] . "</td>
				</tr></table>";
                
			}
		}
		else
		{
			?>
	    	    <script language="javascript">
				alert("No Mobile Number Has Beem Registered");
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
</body>
</html>
