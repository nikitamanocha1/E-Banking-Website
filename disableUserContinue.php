<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body  style="background-color:#FFC; color:#333">
<img src="images/way2bank.png" height="100" width="1340" />
<div style="width:1300px; border-style:groove" >
<div style="height:30px width=1250px; background-color:#CCC">

<h3 style=" color:#0F0; text-align:right; margin-top:-0.01in; margin-right:0.2in"><b style="background-color:#000">A A A</b></h3>
</div>
<div style="height:900; width=800; margin-left:2in; margin-right:1in; text-align:justify;">

<div style=" border-bottom:groove; border-color:#999"><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:18px;">ONLINE USER REGISTRATION</b><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b> step 1</b><br />
</div>
<div>
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
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt1" />

<br /><br />&nbsp;&nbsp;&nbsp;
ENTER PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p1" /><br /><br />&nbsp;&nbsp;&nbsp;
CONFIRM YOUR PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p2"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="b1" value="VERIFY" style="background-color:#CF0; font-size:16px; font-weight:bold" />
<input type="submit" name="b2" value="CANCEL" style="background-color:#CF0; font-size:16px; font-weight:bold"/>
<br /><br /></div>
</form>
<br />
<div style="font-style:italic">
<br /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please note:</b>
<ol type="1">

<li>Using this facility, customers would be able to disbale Internet Banking User Id online, without visiting branch.</li><br />
<li>The facility is available only for self operated saving and current account customers.</li><br />
<li>Only customers who are registered for SMS Alerts facility with our Bank can avail this facility</li><br />
<li>Please keep following information ready before using this facility ?</li>
<ol type="a">
<li>Date of Birth or PAN No. as available in bank records</li><br />
<li>Your Mobile ( registered with the bank) for receiving One Time Password (OTP)</li></ol>
 </ol></div>
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
				$cmd="select * from newuser where accountno=$acc and ques='$ques' and ans='$ans' and Password='$passwrd1'";
				if($r=$con->query($cmd))
				{
					if($r->num_rows>0)
					{
						$cmd1="delete from newuser where accountno=$acc";
						if($con->query($cmd1)==true)
						{
							header('location:home.php');
						}
					}
					else
					{
						?>
					        <script language="javascript">
							alert("No record found");
    					    </script>
						<?php

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
				$cmd="select * from newuser1 where accountno=$acc and ques='$ques' and ans='$ans' and passWord='$passwrd1'";
				if($r=$con->query($cmd))
				{
					if($r->num_rows>0)
					{
						$cmd1="delete from newuser1 where accountno=$acc";
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