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
Reset Image</b><br /> 
</div>
<br />
<br />
<div style="border-bottom:groove; border-bottom-color:#666666; font-size:18px"><br /><br />
<b style="font-size:16px">
Reset Image</b><br />
</div>
<br />

<form name="f1" method="post" action="#">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID<sup style="color:#FF0000">*</sup> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"  value=<?php echo $user; ?> /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Existing Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="existing">
<option value="images/errorTriangle.jpg">Error Triangle</option>
<option value="images/lock.jpg">Lock</option>
<option value="images/bluerose.jpg">Blue Rose</option>
<option value="images/rose.jpg">Rose</option>
<option value="images/random.jpg">Random</option>
</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Image &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="new">
<option value="Images/errorTriangle.jpg">Error Triangle</option>
<option value="Images/lock.jpg">Lock</option>
<option value="images/bluerose.jpg">Blue Rose</option>
<option value="images/rose.jpg">Rose</option>
<option value="images/random.jpg">Random</option>

</select><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />
<center><input type="submit" name="btn1" value="Submit" style="background-color:#CF0; font-size:16px; font-weight:bold" /></center>
</form>
</div>

<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>

<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="mobileBanking.php">MOBILE BANKING |</a>

</div>
<div style="height:30px; width:300px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK
<?php
$check=0;
if(isset($_POST['btn1']))
{
	$eImg=$_POST['existing'];
	$nImg=$_POST['new'];
		$con=new mysqli("localhost","root","","pnbank");
		if($con==true)
		{
			$cmd="select * from newuser where accountNo='$user'";
			if($result=$con->query($cmd))
			{
				if($result->num_rows>0)
				{
					$cmd1="update newuser set Image='$nImg' where accountNo='$user'";
					if($con->query($cmd1)==true)
					{
							echo "Image updated";
					}
					else
					{
						?>
			   		 	    <script language="javascript">
							alert("Image not Updated");
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
			$cmd="select * from newuser1 where accountNo='$user' and Image='$eImg'";
			if($result=$con->query($cmd))
			{
				if($result->num_rows>0)
				{
					$cmd1="update newuser1 set Image='$nImg' where accountNo='$user'";
					if($con->query($cmd1)==true)
					{
						echo "Image updated";
					}
					else
					{
						?>
				    	    <script language="javascript">
							alert("Image not Updated");
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

?>


</body>
</html>
