<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCFFCC; color:#00000">
<img src="images/way2bank.png" height="100" width="1350" />
<div>
<?php
include("topRetail.php");
echo "<br><br><br><br><br>";
include("RetailButtons.php");
	$check=$_SESSION['check'];
if($check=="account")
{
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from personaldetails where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($ee=$result->fetch_array())	
				{
					echo "<table border='2' cellpadding='10px' width=1300px height=100px><tr bgcolor=grey>
					<td width=20px>SELECT</td>
					<td width=300px>Account Number</td>
					<td width=300px>Name</td>
					<td width=300px>Currency</td>
					<td width=300px>Balance</td></tr>
					<tr>";
					echo "<td><form name='f1'>
					<input type='radio' name='r1' checked='checked'></td>";
					echo "<td> " . $ee[0] . "</td>";
					echo "<td> " . $ee[3] . "</td>";
					
				}
			}
			else
			{
				$tm=1;			
			}
		}
		else
		{
				?>
			        <script language="javascript">
					alert("Query Problem");
    				</script>
				<?php
		}
	}
	else
	{
		echo "connection problem";
	}
		$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from accountdetails where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($ee=$result->fetch_array())	
				{
					
					echo "<td> " . $ee[1] . "</td>";
					echo "<td> " . $ee[2] . "</td>";
					
				}
			}
			else
			{
				$tm=1;			
			}
		}
		else
		{
				?>
			        <script language="javascript">
					alert("Query Problem");
    				</script>
				<?php
		}
	}
	else
	{
		echo "connection problem";
	}
}?>
</tr></table>
<?php
if($check=="personal")
{
	?>
    <br /><br />
    <form name="f1" method="post" action="#">
    <div style="margin-left:1.5in; border-style:groove; background-color:#FFFF99; height:300px; width:250px ">
    <div style="border-bottom:groove; border-bottom-color:#000000; background-color:#FFFFCC"><br />
    <center><b style="font-size:18px">My ShortCuts</b></center><br /></div>
<center>   <br /> <input type="submit" name="btn1" value="Account Summary" style="font-size:18px; font-weight:bold"/><br /><br />
    <input type="submit" name="btn1" value="Account Statement" style="font-size:18px; font-weight:bold" /><br /><br />
    <input type="submit" name="btn1" value="Operative Accounts" style="font-size:18px; font-weight:bold" /><br /><br />
    <input type="submit" name="btn1" value="Deposit Accounts&nbsp;&nbsp;&nbsp;" style="font-size:18px; font-weight:bold" /><br /><br /></center>
    </div>
	<div style="margin-left:5.5in; margin-top:-3in">
   <b>Option:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="personal" style="background-color:#CCCCCC; font-size:18px">
    <option value="1"> Change Login Password</option>
    <option value="2"> Change Image </option>
    <option value="3"> Change Phrase</option>
    <option value="4"> Set Account Nick Name</option>
    <option value="5"> View Registered Mobile Number</option>
    <option value="6"> View Personal Details</option>
    <option value="7"> Set PIN for Debit Card</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="b1" value="GO" style="font-weight:bold; background-color:#CF0; font-size:18px" /></div>
    </form></center>
	<?php
	if(isset($_POST['b1']))
	{
		$check=$_POST['personal'];
		switch($check)
		{
			case 1:
					header('location:chngePasswrd.php');
					break;
			case 2:
					header('location:chngeImage.php');
					break;
			case 3:
					header('location:chngePhrase.php');
					break;
			case 4:
					header('location:nikName.php');
					break;
			case 5:
					header('location:MobileNumber.php');
					break;
			case 6:
					header('location:PersonalDetails.php');
					break;
			case 7:
					header('location:');
					break;
			default:
						echo "Choose the correct option";
		}
	}
}

?>

</div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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
