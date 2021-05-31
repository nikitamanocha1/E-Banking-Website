<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCFFCC; color:#00000">

<div style="margin-left:1in; margin-right:1in">
<div style="background-color:#FFFFFF; color:#000000">
<center><b style="font-size:24px; font-style:italic">Help for View Form 26AS Welcome Page</b></center>
</div><br /><br />
<b style="font-size:18px">Notes:
<ul type="square">
<li>Click on 'View Form 26AS' to view your Annual Tax Statement</li><br />
<li>Click on 'Register on TRACES' to register your PAN on TRACES</li><br />
<li>Individuals and non-individuals can register their PAN on TRACES</li><br />
<li>Some of the functionalities that will be available to Tax Payer after registering on TRACES are:<br /><br />
<ul type="disc">
<li>View Form 26AS</li><br />
<li>View and update Profile</li></ul></li></ul><br />
<form name="f1" method="post" action="#"><br /><br />
<center><input type="submit" value="Close Window" name="btn1" style="font-size:22px; font-weight:bold; background-color:#000000; color:#CCCCCC"  /></center>
</form>
</div>
</b>
<?php
if(isset($_POST['btn1']))
{
	header('location:incomeTaxContinue.php');
}
?>
</body>
</html>
