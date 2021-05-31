<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCFFCC; color:#00000">
<img src="images/way2bank.png" height="100" width="1400" />
<?php
include("topRetail.php");

?>
<br /><br /><br /><br />
<?php
include("RetailButtons.php");
$name=$_SESSION['name'];
?>
<div style="margin-left:1in; margin-right:1in">
<div style="margin-left:2in; margin-right:2in">
<div style="font-size:18px"><br /><br />
<b style="font-size:24px">
New Complaint/Request</b><br /><br />
</div>
<br />

<form name="f1" method="post" action="#">
Account Type <sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="r1" checked="checked" value="own account" />Own Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="r1" value="other account" /> Other Account<br /><br />

Request Type <sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="request">
<option value="select">Select</option>
<option value="request">Request&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
<option value="complaint">Complaint</option>
</select><br /><br />

Select Category<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="category">
<option value="select">Select</option>
<option value="atm">ATM</option>
<option value="credit">Credit Card</option>
<option value="deposit">Deposits</option>
<option value="banking">General Banking</option>
<option value="govt scheme">Goverenment Scheme &nbsp;&nbsp;&nbsp;</option>
<option value="remittance">Remittance</option>
<option value="technology">Technology</option>
</select><br /><br />

Category Type<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" /><br /><br />

Category Sub Type<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t2" /><br /><br />

Customer Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t3" value="<?php echo $name; ?>" />
<br /><br />

Country Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t4" /><br /><br />

Mobile Number<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t5" /><br /><br />

Email Id<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t6" /> <br /><br />
Pin Code<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t7" /><br /><br />
Remarks &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t8" /> <br /><br /><br /><br />
<center>
<input type="submit" name="btn1" value="Submit" style="background-color:#FFFF00; color:black; font-size:24px; font-weight:bold" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="btn2" value="Clear" style="background-color:#FFFF00; color:black; font-size:24px; font-weight:bold"/></center>
</form>
</div></div>
<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="mobileBanking.php">MOBILE BANKING </a>

</div>
<div style="height:30px; width:300px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK
<?php
if(isset($_POST['btn1']))
{
	$at=$_POST['r1'];
	$r=$_POST['request'];
	$c=$_POST['category'];
	$ct=$_POST['t1'];
	$cst=$_POST['t2'];
	$name=$_POST['t3'];
	$code=$_POST['t4'];
	$mn=$_POST['t5'];
	$eid=$_POST['t6'];
	$pcode=$_POST['t7'];
	$remrks=$_POST['t8'];
	session_start();
	$date=$_SESSION['date'];
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{	
		$cmd="insert into complaint values('$date','$at','$r','$c','$ct','$cst','$name','$code','$mn','$eid','$pcode','$remrks')";
		if($con->query($cmd)==true)
		{
			?>
			        <script language="javascript">
					alert("Complaint Submitted");
    				</script>
				<?php
		}
		else
		{
			?>
			        <script language="javascript">
					alert("Complaint Not Submitted");
    				</script>
				<?php
		}
	}
	else
	{
		?>
			<script language="javascript">
			alert("Connection Problem");
    		</script>
		<?php
	}
	
}
?>
 
</body>
</html>
