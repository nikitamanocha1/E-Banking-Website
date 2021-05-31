<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#66FFFF ; color:#000000">
<img src="images/way2bank.png" height="100" width="1350" /><br /><br />
<div style="height:600px; width:1350px;">
<div style="margin-left:1in; border-style:groove; border-color:#000000; height:500px; width:300px">
<form name="frm1" method="post" action="#"><br /><br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;Username &nbsp;&nbsp;&nbsp;<input type="text" name="t1" /><br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;Password &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="t2" /><br /><br /><br /><br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="btn1" value="LOGIN" style="background-color:#FF0000; color:#FFFF00; font-size:18px" />
</form>
</div>
<div style="margin-left:5in; margin-right:0.8in; margin-top:-5.3in">
<img src="images/front2.jpg" height="500px" width="700px" />
</div>
</div>
<?php
if(isset($_POST['btn1']))
{
	session_start();
	$admin=$_POST['t1'];
	$_SESSION['admin']=$admin;
	$passwrd=$_POST['t2'];
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from adminblock where username='$admin' and password='$passwrd'";
		if($con->query($cmd)==true)
		{
			header('location:adminContinue.php');
		}
		else
		{
			?>
        		<script language="javascript">
				alert("Wrong UserName or Password");
        		</script>
			<?php
		}
	}
	else
	{
		?>
        	<script language="javascript">
			alert("Connection Problem");
        	</script>
		<?php
	}
}
?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>
<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="retailUser.php">INTERNET BANKING |</a>
<a href="home.php">HOME </a>

</div>
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

</body>
</html>
