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
User Authentication </b><br /> 
</div>
<form name="f1" method="post" action="#"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"  value=<?php echo $user; ?> /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card Number<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="t2"  /><br /><br /><br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="btn1" value="SUBMIT"  style="background-color:#CF0; font-size:16px; font-weight:bold"  />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="btn2" value="BACK"  style="background-color:#CF0; font-size:16px; font-weight:bold"  />
<?php
if(isset($_POST['btn1']))
{
	$card=$_POST['t2'];
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="update accountdetails set Card='$card' where accountNo='$user'";
		if($con->query($cmd)==true)
		{
			?>
			 	<script language="javascript">
				alert("Record Updated");
    			</script>
			<?php
		}
		else
		{
			?>
				<script language="javascript">
				alert("Record Not Updated");
    			</script>
			<?php
		}
	}
	else
	{
		?>
			<script language="javascript">
			alert("Connection problem");
    		</script>
		<?php
	}
}
else if(isset($_POST['btn2']))
{
	header('location:cardPin.php');
}
?>
</body>
</html>
