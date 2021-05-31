<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#66FFFF; color:#000000">
<img src="images/way2bank.png" height="100" width="1350" /><br /><br />
<div style="height:600px; width:1350px;">
<b style="font-style:italic; font-size:24px; font-stretch:expanded">ADMIN PANEL</b>
<div style="margin-left:9in; margin-right:0.3in; margin-top:-0.3in">
<?php
session_start();
$admin=$_SESSION['admin'];
?>
<form name="f1" method="post" action="#">
<b style="font-size:18px">WELCOME &nbsp;&nbsp;&nbsp; <b style="font-style:italic">"<?php echo $admin; ?> " </b></b><br /><br />
<input type="submit" name="btn1" value="VISIT SITE" style="background-color:#66FFFF; color:#000000; font-size:24px" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="btn2" value="LOGOUT" style="background-color:#66FFFF; color:#000000; font-size:24px" />
</form>
</div><br /><br /><br /><br />
<?php
include("topAdmin.php");
echo "<br><br><br><br><br>";
$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from accountdetails";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				echo "<center><table border='1' cellpadding='10px' cellspacing='10px'>
					<tr bgcolor=grey>
					<th> ACCOUNT NUMBER </th>
					<th> AMOUNT </th>
					<th> PAN CARD </th>
					</tr>";
				while($y=$result->fetch_array())
				{
					echo "<tr> <td>" . $y[0] . "</td>";
					echo "<td>" . $y[2] . "</td>";
					echo "<td>" . $y[3] . "</td></tr>";
				}
					echo "</table></center>";
			}
			else
			{
				$check=1;
			}
		}
		else
		{
				?>
			        <script language="javascript">
					alert("No Record Found");
    				</script>
				<?php
		}
	}
	else
	{
		echo "connection problem";
	}

if(isset($_POST['btn1']))
{
	header('location:home.php');
}
else if(isset($_POST['btn2']))
{
	header('location:adminLogout.php');
}
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>

<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="retailUser.php">INTERNET BANKING |</a>
<a href="home.php">HOME</a>
</div>
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

</body>
</html>
