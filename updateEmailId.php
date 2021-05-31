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

<div style="font-size:18px"><br /><br /><br /><br />
<b style="font-size:24px">
Email ID</b><br /> 
</div>
<br />
<br />
<div style="border-bottom:groove; border-bottom-color:#666666; font-size:18px"><br /><br />
<b style="font-size:16px">
Email ID</b><br />
</div>
<br />
<script language="javascript">
function testdata()
{
	var emailID=document.f1.t2;
	if(emailID.value==" ")
	{
		alert("please enter one email id");
		emailID.focus();
		return false;
	}
	if(emailID.value.indexOf("@")=="-1" && emailID.value.indexOf(".")=="-1")
	{
		alert("enter email id in correct format");
		emailID.focus();
		return false;
	}
	return true;
}
</script>
<form name="f1" method="post" action="#" onsubmit="return testdata()">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" value="<?php echo $user; ?>"/><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t2" /><br /><br /><br /><br />
<center><input type="submit" name="btn1" value="Submit" style="background-color:#CF0; font-size:16px; font-weight:bold" /></center>
</form>
</div>
<?php
$check=0;
if(isset($_POST['btn1']))
{
	$user=$_POST['t1'];
	$email=$_POST['t2'];
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from personaldetails where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				$cmd1="update personaldetails set emailId='$email' where accountNo='$user'";
				if($con->query($cmd1)==true)
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
						alert("Record not Updated");
        				</script>
					<?php
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
				?>
			        <script language="javascript">
					alert("Query problem");
    				</script>
				<?php
		}
	}
	else
	{
		?>
	        <script language="javascript">
			alert("Query problem");
    		</script>
		<?php
	}
}

?>
</body>
</html>
