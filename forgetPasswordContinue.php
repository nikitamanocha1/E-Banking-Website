<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">
<div style="width:1350px; border:thick;">
<img src="images/way2bank.png" height="100" width="1350" />
<div style="border-bottom:groove; border-color:#666">
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ONLINE PASSWORD RESET<br /><br /></div>
<form name="f1" method="post" action="#"><br />
<center><b>Please fill in the complete information and click on 'VERIFY' link</b></center>
<br /><br />&nbsp;&nbsp;&nbsp;
<select name="ques" style="background-color:#FFC">
<option value="Favourite Novel">Favourite Novel</option>
<option value="School name"> School Name</option>
<option value="Favourite Actor">Favourite Actor</option>
<option value="Favourite Teacher">Favourite Teacher</option>
<option value="Favourite Word">Favourite Word</option>
<option value="favourite colour">Favourite Colour</option>
<option value="First School">First School</option>
<option value="Favourite Actor">Favourite Actor</option>
<option value="First Crush">First Crush</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt1" />
<br /><br />&nbsp;&nbsp;&nbsp;
ENTER PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p1" /><br /><br />&nbsp;&nbsp;&nbsp;
CONFIRM YOUR PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p2"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="b1" value="VERIFY" />
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
	session_start();
	$acc=$_SESSION['acc'];
	$passwrd1=$_POST['p1'];
	$passwrd2=$_POST['p2'];
	$ques=$_POST['ques'];
	$ans=$_POST['txt1'];
	$check=$_SESSION['check'];
	if($passwrd2==$passwrd1)
	{
		switch($check)
		{
			case "1":
			$con=new mysqli("localhost","root","","pnbank");
			if($con==true)
			{
				$cmd="select * from newuser where accountno=$acc and ques='$ques' and ans='$ans'";
				if($r=$con->query($cmd))
				{
					if($r->num_rows>0)
					{
						$cmd1="update newuser set password='$passwrd1' where accountno=$acc";
						if($con->query($cmd1)==true)
						{
							header('location:home.php');
						}
					}
					else
					{
						echo "no  record found";
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
			break;
			case "2":
			$con=new mysqli("localhost","root","","pnbank");
			if($con==true)
			{
				$cmd="select * from newuser1 where accountno=$acc and ques='$ques' and ans='$ans'";
				if($r=$con->query($cmd))
				{
					if($r->num_rows>0)
					{
						$cmd1="update newuser set password='$passwrd1' where accountno=$acc";
						if($con->query($cmd1)==true)
						{
							header('location:home.php');
						}
					}
					else
					{
						echo "no  record found";
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
			break;
		}
	}
	else
	{
		?>
        <script language="javascript">
		alert("Password not match");
        </script>
		<?php
	}
}
 if(isset($_POST['b2']))
{
	header('location:retailUser.php');
}

?>


</body>
</html>