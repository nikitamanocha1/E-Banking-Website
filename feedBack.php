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
FEEDBACK</b><br />
</div>
<br />
You are requested to provide your ratings with regard to the Internet Banking Services on the following parameters on the scale of 1 to 5 with being maximum rating and 5 being maximum rating so that we can improve our Internet Banking Services.<br /><br />
<div style="border-bottom:groove; border-bottom-color:#666666; font-size:18px"><br /><br />
<b style="font-size:16px">
FEEDBACK</b><br />
</div>
<br />
<form name="f1" method="post" action="#">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Overall experience &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="experience" style="padding-left:150px">
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round the Clock Availablity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="availability" style="padding-left:150px">
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Response Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="time" style="padding-left:150px">
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Success Rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="successrate" style="padding-left:150px">
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Availability of Help/Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="help" style="padding-left:150px">
<option value="5">5</option>
<option value="4">4</option>
<option value="3">3</option>
<option value="2">2</option>
<option value="1">1</option>
</select><br /><br /><br /><br /><br />
<center><input type="submit" name="btn1" value="Submit" style="font-weight:bold; font-style:italic; font-size:16px; background-color:#669900" /></center>
</form>

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
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

<?php
if(isset($_POST['btn1']))
{
	$e=$_POST['experience'];
	$a=$_POST['availability'];
	$t=$_POST['time'];
	$sr=$_POST['successrate'];
	$h=$_POST['help'];
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="insert into feedback values($e,$a,$t,$sr,$h)";
		if($con->query($cmd)==true)
		{
		?>
        	<script language="javascript">
			alert("FeedBack Submitted");
        	</script>
		<?php

		}
		else
		{
			echo "query problem";
		}
	}
	else
	{
		echo "Connection problem";
	}
}
?>
</body>
</html>
