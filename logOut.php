<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">
<img src="images/way2bank.png" height="100" width="1350" />
<div style="margin-left:2in; margin-right:2in" >
<div style="border-bottom:groove; border-bottom-color:#666666; font-size:18px"><br /><br />
<b style="font-size:24px">Thank you for banking with Punjab National Bank</b>
</div><br /><br />
You have been logged out of Internet Banking of Punjab National Bank.<br /><br />
Please close this window for security reasons.<br /><br />
<form name="f1" method="post" action="#">
<input type="submit" name="b1" value="GO TO LOGIN PAGE" style="font-weight:bold; font-style:italic; font-size:16px; background-color:#CF0" />

</form>
<center><img src="images/logout.jpg" height="300" width="500" /></center>
</div>
<?php
if(isset($_POST['b1']))
{
	header('location:retailUser.php');
}
?>
</body>
</html>
