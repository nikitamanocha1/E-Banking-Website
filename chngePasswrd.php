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
Reset Password</b><br /> 
</div>
<br />
<br />
<div style="border-bottom:groove; border-bottom-color:#666666; font-size:18px"><br /><br />
<b style="font-size:16px">
Reset Password</b><br />
</div>
<br />

<form name="f1" method="post" action="#">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"  value=<?php echo $user; ?> /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Existing Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p1" /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p2" /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p3" /><br /><br /><br /><br />
<center><input type="submit" name="b1" value="Submit" style="background-color:#CF0; font-size:16px; font-weight:bold" /></center>
</form>
</div>
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
</div>
<?php
$check=0;
if(isset($_POST['b1']))
{
	$user=$_POST['t1'];
	$passwrd1=$_POST['p1'];
	$passwrd2=$_POST['p2'];
	$passwrd3=$_POST['p3'];
	if($passwrd3==$passwrd2)
	{
		$con=new mysqli("localhost","root","","pnbank");
		if($con==true)
		{
			$cmd="select * from newuser where accountNo='$user' and Password='$passwrd1'";
			if($result=$con->query($cmd))
			{
				if($result->num_rows>0)
				{
					$cmd1="update newuser set Password='$passwrd2' where accountNo='$user'";
					if($con->query($cmd1)==true)
					{
							header('location:retailUser.php');
					}
					else
					{
						?>
			   		 	    <script language="javascript">
							alert("Password not Updated");
        					</script>
						<?php
					}
				}
				else
				{
					$check=1;
				}
			}
			else
			{
					?>
				        <script language="javascript">
						alert("No Record Found");
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
			$cmd="select * from newuser1 where accountNo='$user' and Password='$passwrd1'";
			if($result=$con->query($cmd))
			{
				if($result->num_rows>0)
				{
					$cmd1="update newuser1 set Password='$passwrd2' where accountNo='$user'";
					if($con->query($cmd1)==true)
					{
						header('location:retailUser.php');				
					}
					else
					{
						?>
				    	    <script language="javascript">
							alert("Password not Updated");
        					</script>
						<?php
					}
				}
				else
				{
					$check++;
				}
			}
			else
			{
					?>
				        <script language="javascript">
						alert("No Record Found");
    					</script>
					<?php
			}
		}
		else
		{
			echo "connection problem";
		}
		if($check==2)
		{
			?>
       		    <script language="javascript">
				alert("Write a valid user Id");
 	   			</script>
			<?php
		}
	}
	else
	{
			?>
       		    <script language="javascript">
				alert("Password doesnot match");
 	   			</script>
			<?php
	}
}

?>

</body>
</html>
