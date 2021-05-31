
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCFFCC; color:#00000">
<br />
<div style="margin-left:1in; margin-right:1in;">
<div style="background:#CCCCFF; height:50px">
<form name="f1" method="post" action="#"><br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="btn1" value="Home" style="background-color:#FFFFFF; color:black; font-size:18px"/>&nbsp;
|&nbsp;<input type="submit" name="btn2" value="Logout" style="background-color:#FFFFFF; color:black; font-size:18px"/>

</div>

<div style="height:200px">
<br />
<img src="images/TDSlogo.jpg" height="150px" width="200px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/traces1.png" height="150px" width="450px" />

</div>
<div style="background:#CCCCFF; height:50px"><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href= "TaxCredit.php" style="color:#000000"> View Tax Credit (form 26AS)</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Register.php" style="color:#000000"> Register From Traces</a>
<form name="f1" method="post" action="#">
<input type="submit" name="btn3" value="Help" style="background-color:#FFFFFF; color:black; margin-top:-0.2in; margin-left:11in; font-size:18px" />
</form>
</div>

<br /><br /><br /><br />
<div style="margin-left:2in; margin-right:2in">
<b style="font-size:24px">Annual Tax Statement(Form 26AS) is now generated from Traces.</b>
<br /><br /><br />
<b style="font-size:18px">Form 26AS contains details of: <br /><br />
<ul type="square">
<li> Tax deducted by deductors on behalf of Tax Payer.</li>
<li> Tax Collected by collectors on behalf of Tax Payer. </li>
<li> Advance/ Self-Assessment tax deposited by Tax Payer. </li>
<li> Refund paid by ITD to Tax Payer. </li>
<li> AIR Transactions. </li>
</ul><br /><br /><br /><br />
Form 26AS can be viewed by registering with TRACES or through net banking account of tax payers held with banks that have registered with TRACES to provide this facility. <br /><br /><br /><br />
Click <b style="color:#000066">&nbsp;&nbsp;&nbsp;&nbsp;VIEW TAX CREDIT(FORM 26AS)&nbsp;&nbsp;&nbsp;&nbsp;</b> to view your form 26AS.<br /><br /><br />
</div>
</div>
<?php
if(isset($_POST['btn2']))
{
	header('location:RetailMainPage.php');
}
else if(isset($_POST['btn3']))
{
	header('location:help.php');	
}

?>
</body>
</html>
