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

<div style="font-size:18px"><br /><br />
<b style="font-size:24px">
Set Debit Card Pin Home</b><br /> 
</div>
<form name="f1" method="post" action="#"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="account">
<option value="select">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select</option>
<option value="<?php echo $user; ?> ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $user; ?> </option>
</select>
<br /><br /><br /><br />
<input type="submit" name="btn1" value="Continue" style="background-color:#CF0; font-size:16px; font-weight:bold"  />
</form><br /><br /><br />
</div>
<div style="margin-left:0.7in; margin-right:0.7in">
<b>Please Note: </b>
<ol type="1">
<li>You can set your ATM PIN here. For this you need OTP, which can be obtained by sending sms as DCPIN Cardnumber to 5607040 or 9264092640.</li>
<li>Select Account Number from above dropdown menu. Click on Continue.</li>
</ol>
</div>
<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="">PRIVACY POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="mobileBanking.php">MOBILE BANKING |</a>

</div>
<div style="height:30px; width:300px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

<?php
if(isset($_POST['btn1']))
{
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from accountdetails where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				header('location:cardPinContinue.php');
			}
			else
			{
				echo "no rows found";
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

</body>
</html>
