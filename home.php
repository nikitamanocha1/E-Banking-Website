<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<img src="images/way2bank.png" height="100" width="1350" />
<div style="border-style:groove; width:1350px">

<br />
<img src="../../projectWork/images/new.gif" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Corporate Internet Banking Services have been upgraded to new version with better interface(Details at <a href="userGuide.pdf">User guide</a>)<br /><br />

<?php
include("top.php");
?>

<br />
<div style="background-image:url(images/family2.jpg); border-style:groove; width:1350px">
<div style="height:130px; width:250px; border-style:groove; border-color:#000000; margin-left:1in; margin-top:0.2in; background-color:#999999">
<div style="border-bottom:groove; border-bottom-color:#000000">
<b><br />
Internet Banking Login<br /></b></div>

<form name="f1" method="post" action="#"><br />
<input type="submit" name="b1" value="Retail User" style="font-size:18px; font-style:italic; font-weight:bolder; margin-left:0.3in; background-color:#FFFF33; color:#000000; width:200px " />
<br /><br />
<input type="submit" name="b2" value="Corporate User" style="font-size:18px; font-style:italic; font-weight:bolder; margin-left:0.3in; background-color:#FFFF33; color:#000000; width:200px " /><br />

</form>
</div>
<div style="height:120px; width:250px; border-style:groove; border-color:#000000; margin-left:1in; margin-top:0.1in; background-color:#999999">
<div style="border-bottom:groove; border-bottom-color:#000000">
<b><br />New User<br /></b></div>
<p>Register online for internet banking. <br /> Use "New User" Link on Retail Login Page.</p>
</div>
<div style="height:150px; width:250px; border-style:groove; border-color:#000000; margin-left:1in; margin-top:0.1in; background-color:#999999; border-bottom:groove">
<div style="border-bottom:groove; border-bottom-color:#000000">
<b><br />
Apply Online for<br /></b></div><br />
<a href="carLoan.php"> Car Loan</a><br /><br />
<a href="homeLoan.php"> Home Loan</a><br /><br />
<a href="creditCard.php"> Credit Card</a>
</div>
<div style="height:120px; width:630px; margin-left:4.9in; border-style:groove; border-color:#333333; background-color:#999999; margin-top:0.1in">
<div style="margin-left:0.3in; margin-top:0.5in"><b style="font-size:16px; font-style:italic"> PNB is also <br />available on </b></div>
<div style="margin-left:2in; margin-top:-0.8in">
<a href="home.php"><img src="images/internet.jpg" height="100" width="100" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mobileBanking.php"><img src="images/mobile.jpg" height="100" width="100" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="phoneBanking.php"><img src="images/telephone.jpg" height="100" width="100" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div></div><br />
</div>
</div>
<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="">PRIVACY POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">MOBILE BANKING |</a>
<a href="admin.php">ADMIN </a>

</div>
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

<?php
if(isset($_POST['b1']))
{
	header('location:retailUser.php');
}
else if(isset($_POST['b2']))
{
	header('location:CorporateUser.php');
}
?>
</body>
</html>
