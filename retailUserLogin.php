<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">

<div style="width:1350px; border:thick;" >
<img src="images/way2bank.png" height="100" width="1350" />
<div style="height:30px width=1350px; background-color:#CCC">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO PNB BANK</b>
</div>
<?php
session_start();
$u=$_SESSION['user'];
$pic=$_SESSION['pic'];
$p=$_SESSION['p'];
?>
<div style="height:520px; width:400px; margin-top:0.1in; margin-left:1in; border-style:groove; border-width:thin">
<form name="f1" method="post" action="#"><br />&nbsp;&nbsp;
ACCOUNT NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"  value=<?php echo $u; ?> /><br /><br />
&nbsp;&nbsp; Selected Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=<?php echo $pic; ?>    height="100px" width="100px" />
<br /><br />
&nbsp;&nbsp; Entered Phrase&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt1" value="<?php echo $p; ?>" />
<br /><br />
&nbsp;&nbsp;PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p1" /><br /><br />
&nbsp;&nbsp;LANGUAGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="lang">
<option value="english">English</option>
<option value="Hindi">HINDI</option>
</select><br /><br />
&nbsp;&nbsp;DEFAULT LOGIN PAGE&nbsp;&nbsp;<select name="login">
<option value="personal">Personal Settings</option>
<option value="Funds">Funds Transfer</option>
<option value="dashboard">Dashboard</option>
<option value="account">Account Summary</option>
<option value="credit">Credit Cards</option>
<option value="OnlineFD">Open Online FD</option>
</select>
<br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="b1" value="LOG IN" style="font-weight:bold; background-color:#CF0; font-size:14px" />
</form>
</div>
<div style="margin-left:5.5in; margin-top:-5.4in">
<img src="images/retailUser.jpg" height="400" width="630" />
</div>
<div style="margin-left:5.5in; border-style:groove; border-color:#333; height:100px; width:300px; margin-top:0.1in">
<a href="forgetPassword.php" style="margin-top:-0.8in; color:#000"><b> FORGET PASSWORD</b></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/forgetpasswrd.jpg" height="90" width="100" />
</div>
<div style="margin-left:8.8in; border-style:groove; border-color:#333; height:100px; width:300px; margin-top:-1.1in">
<a href="troubleRetail.php" style="color:#000"> <b> TROUBLE LOGGING IN</b></a>&nbsp;&nbsp;&nbsp;
<img src="images/errorTriangle.jpg" height="90" width="100"  style="margin-top:-0.00001in"/>
</div>
</div>
<?php
if(isset($_POST['b1']))
{
	session_start();
	$tm=0;
	$user=$_SESSION['user'];
	$pass=$_POST['p1'];
	$lang=$_POST['lang'];
	$check=$_POST['login'];
	$_SESSION['check']=$check;
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from newuser where accountNo='$user' and Password='$pass'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				if($check=="account")
				{
				header('location:RetailMainPage.php');
				}
				else if($check=="personal")
				{
					header('location:RetailMainPage.php');
				}
			}
			else
			{
				$tm=1;			
	}		}
		else
		{
				?>
			        <script language="javascript">
					alert("Query Prob");
    				</script>
				<?php
		}
	}
	else
	{
		echo "connection problem";
	}
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from newuser1 where accountNo='$user' and Password='$pass'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				if($check=="account")
				{
				header('location:RetailMainPage.php');
				}
			}
			else
			{
				$tm++;
			}
	}	else
		{
				?>
			        <script language="javascript">
					alert("Query Prob");
    				</script>
				<?php
		}
	}
	else
	{
		echo "connection problem";
	}
	if($tm==2)
	{
	?>
			    	    <script language="javascript">
						alert("Incorrect password");
        				</script>
					
	<?php
	
	}
}
?>
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

</body>
</html>