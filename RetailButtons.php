<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br />
<div style="margin-left:1in; margin-right:1in	">
<?php

	$con=new mysqli("localhost","root","","pnbank");
	session_start();
	$user=$_SESSION['user'];
	if($con==true)
	{
		$cmd="select * from personaldetails where accountno='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($rows=$result->fetch_array())
				{
					echo "<b style='font-size:18px'> WELCOME &nbsp;&nbsp;&nbsp;&nbsp;</b>" . $rows[2];
					$_SESSION['cID']=$rows[4];
				}
			}
		}
		else
		{
			echo "no rows found";
		}
	}
	else
	{	
		echo "connection problem";
	}
	$con=new mysqli("localhost","root","","pnbank");
		if($con==true)
	{
		$cmd="select * from accountdetails where accountno='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($rows=$result->fetch_array())
				{
					$_SESSION['pan']=$rows[3];
				}
			}
		}
		else
		{
			echo "no rows found";
		}
	}
	else
	{	
		echo "connection problem";
	}
		

?>
<br /><br />
<form name="f1" method="post" action="#">
<input type="submit" name="b1" value="Log Out"  style="background-color:#FF0000; color:#000000; font-size:18px; font-weight:bold"/>
<input type="submit" name="b2" value="FeedBack"  style="background-color:#FF0000; color:#000000; font-size:18px; font-weight:bold" /><br /><br />&nbsp;&nbsp;
<input type="submit" name="b3" value="Update Email ID"  style="background-color:#FF0000; color:#000000; font-size:18px; font-weight:bold"/><br /><br />&nbsp;
<input type="submit" name="b4" value="Generate Card Pin"  style="background-color:#FF0000; color:#000000; font-size:18px; font-weight:bold"/><br /><br /><br />
</form>
<b> Last Login Time: <?php $con=new mysqli("localhost","root","","pnbank");
if($con==true)
{
	$cmd="select * from date";
	if($result=$con->query($cmd))
	{
		if($result->num_rows>0)
		{
			while($rows=$result->fetch_array())
			{
				echo "&nbsp;&nbsp;&nbsp;&nbsp;" .$rows[0] . "<br>" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $rows[1] ;
			$_SESSION['date']=$rows[0];
			}
		}
	}
}

 ?> </b><br /><br />
</div>
<?php
include("date.php");
if(isset($_POST['b1']))
{
	header('location:logOut.php');
}
else if(isset($_POST['b2']))
{
	header('location:feedBack.php');
}
else if(isset($_POST['b3']))
{
	header('location:updateEmailId.php');
}
else if(isset($_POST['b4']))
{
	header('location:cardPin.php');
}


?>
</body>
</html>
