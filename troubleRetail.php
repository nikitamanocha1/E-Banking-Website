<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">
<img src="images/way2bank.png" height="150" width="1350" />
<center><h2>Trouble logging in?</h2></center>
<ul type="disc">  
<li>Before using PNB Internet Banking you need to ensure that you are using the recommended browser. 
</li> 
<ul type="circle">
<br /><h4 style="color:#000"><li>Browser</h4>
Our application supports Internet Explorer Browser version 8.0 and 9.0, Mozilla Firefox versions 15, 16 , 17, Google Chrome versions 21, 22 and 23 and Safari Apple Mac versions 5.1 and 6.<br />
To check the version of Browser that you are using, please click here</li>

<li><h4 style="color:#000">Java Applet Plug-in software</h4> 
Our application is only supported when Java Applet (JRE) is available and enabled in your PC.</li>
</ul>
<br /><li>Please make sure you are entering correct login id, login password and transaction password. The passwords filed is case sensitive, <b style="font-weight:bold; color:#000000">For example</b> if the password is <b style="font-weight:bold; color:#000000">Abc@123</b> then it should enter the same <b style="font-weight:bold; color:#000000">Abc@123</b> not <b style="font-weight:bold; color:#000000">abc@123</b>.</li>

<br /><li>If your user id has been disabled (for having entered login information incorrectly for 5 times in succession) call our call center at 1800 180 2222 (Toll Free number) to enable it for you.</li>

<br /><li>If you have forgotten your Login Id or Password,you can use forgot password option in the login window or please call the call center to guide on reissuing your login id or password. Or please download the form filled in form, duly signed by all account holders, can be given at any branch.You can collect your user-id and passwords from your originating branch after 7 working days of our receipt of the request.</li>
</ul>
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#000">For any clarifications, you can Contact us at our Customer Care Centre at 1800 180 2222 (Toll Free number) or write to <b style="font-weight:100; color:#F00"> <u>callcentre@pnb.co.in</u></b></b><br /><br /><br /><br />
<center><form name="f1" action="#" method="post"><input type="submit" value="Close window" name="b1" style="background-color:#FF0; color:#000; font-size:18px; font-style:italic" /></form></center>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
	header('Location:retailUser.php');
}
?>