<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">
<img src="images/way2bank.png" height="100" width="1330" />
<div style="width:1335px; border-style:groove" >
<div style="height:30px width=1250px; background-color:#CCC">

<h3 style=" color:#0F0; text-align:right; margin-top:-0.01in; margin-right:0.2in"><b style="background-color:#000">A A A</b></h3>
</div>
<div style="height:900; width=800; margin-left:2in; margin-right:1in; text-align:justify;">

<div style=" border-bottom:groove; border-color:#999"><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:18px;">ONLINE USER REGISTRATION</b><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b> step 1</b><br />
</div>
<div>
<script language="javascript">
function checkdata()
{
	var c=document.f1.t1;
	

if(c.value=="")
{
alert("Required Field");
c.focus();
return false;
}

var flag=false;
	var svalue;
	cls=document.f1.r2;
		for(i=0;i<cls.length;i++)
	{
		if(cls[i].checked)
		{
			svalue=cls[i].value;
			flag=true;
		}
	}
	if(flag==false)
	{
		alert("Please select one option");
		return false;
	}
	return true;

}


</script>
<form name="f1" method="post" action="newUser.php" onsubmit="return checkdata()"><br />
<center><b>Please fill in the complete information and click on 'VERIFY' link</b></center>
<br /><br />&nbsp;&nbsp;&nbsp;

<input type="radio" name="r1" />

ACCOUNT NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="r2" value="1"/>

DATE OF BIRTH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="date">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>&nbsp;&nbsp;&nbsp;
<select name="month">
<option value="january">JANUARY</option><option value="febuary">FEBUARY</option><option value="march">MARCH</option><option value="april">APRIL</option><option value="may">MAY</option><option value="JUNE">JUNE</option><option value="JULY">JULY</option><option value="AUGUST">AUGUST</option><option value="SEPTEMBER">SEPTEMBER</option><option value="OCTOBER">OCTOBER</option><option value="NOVEMBER">NOVEMBER</option><option value="DECEMBER">DECEMBER</option></select>&nbsp;&nbsp;&nbsp;
<select name="year">
<option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option></select>
<br /><br />&nbsp;&nbsp;&nbsp;

<b>OR</b><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="r2" value="2"/>ENTER PAN CARD NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t3"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="r3" />TYPE OF FACILITY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="r4" value="vo" />View Only<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="r4" value="vt" />View And Transaction<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="b1" value="VERIFY" />
<input type="submit" name="b2" value="CANCEL" />
<br /><br />
</form>
<br />
<div style="font-style:italic">
<br /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please note:</b>
<ol type="1">

<li>Using this facility, customers would be able to register for PNB’s Internet Banking Services online, without visiting branch.</li><br />
<li>The facility is available only for self operated saving and current account customers.</li><br />
<li>Only customers who are registered for SMS Alerts facility with our Bank can avail this facility</li><br />
<li>Please keep following information ready before using the facility of online registration –<br /><br />
<ol type="a">
<li>Account Number (For which Internet banking is to be registered)</li><br />
<li>Date of Birth or PAN No. as available in bank records</li><br />
<li>Debit Card No. and ATM PIN (Linked with the account number for which Internet banking is being registered)</li><br />
<li>Your Mobile ( registered with the bank) for receiving One Time Password (OTP)</li></ol><br />
<li>Only in case of providing above information correctly, you will be able to complete the password resetting process.</li><br />
<li>Post successful registration for Internet banking services, the user would be instantly activated and can login to internet banking. However, complete data and account related information will be available only after 24-48 hrs.</li><br />
<li>Only in case of providing above information correctly, you will be able to complete the password resetting process.</li><br />
<li>In case you are not able to reset the password online, you may request for the same by speaking to our24 hour Customer Careor by contacting a branch and passwords will be delivered through your branch within 7 working days.</li>
 </li></ol>
</div>
</div>
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
	if(isset($_POST['b1']))
{

	$acc=$_POST['t1'];
	session_start();
	$_SESSION['acc']=$acc;
	$type=$_POST['r4'];
    $check=$_POST['r2'];
	$_SESSION['check']=$check;
	switch($check)
	{
		case "1":
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$con=new mysqli("localhost","root","","pnbank");
		if($con==true)
		{
			$cmd="insert into newuser values('$acc','$date','$month','$year','$type','','','','','')";
			if($con->query($cmd)==true)
			{
				header('location:newUserContinue.php');
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
		break;
		case "2":
		$panCard=$_POST['t3'];
		$con=new mysqli("localhost","root","","pnbank");
		if($con==true)
		{
			$cmd="insert into newuser1 values('$acc','$panCard','$type','','','','','')";
			if($con->query($cmd)==true)
			{
				header('location:newUserContinue.php');
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
		break;
	}
}


else if(isset($_POST['b2']))
{
	header('location:retailUser.php');
}

?>
</body>
</html>