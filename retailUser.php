<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#FFC; color:#333">

<img src="images/way2bank.png" height="100" width="1350" />
<div style="width:1350px; border:thick;" >
<div style="height:30px width=1350px; background-color:#CCC">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO PNB BANK</b>
</div>
<div style="height:65px; width:400px; margin-left:1.5in; margin-top:0.2in;  border-style:groove; border-width:medium">
<div style="border-style:dotted; border-width:thin">
<b>EXISTING USER LOGIN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/lock.jpg" height="15" width="15" />
</div><br />
<form name="f1" method="post" action="#">
 &nbsp;&nbsp;User ID:<sup><font color=red>*</font></sup>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="text1" style="width="30">
</div>

<div style="width:400px; height:450px; overflow:scroll;  margin-left:1.5in; margin-top:0.1in;  border-style:groove; border-width:medium;">
<h3 style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;Security tips</h3>
<ol type="1">
<li> Do not reveal passwords over phone/email etc. to any person including Bank.</li>
<li> Change your password regularly. Keep your password a combination of alphabets, special characters and numbers.</li>
<li> Use on-screen KEYPAD for logging when you are not using your own PC.</li>
<li> Don't Click on website links/attachments in un-known/suspicious emails. These links may take you to replica of bank's website and ask for keying in your user-id and password(s).</li>
<li> In case of doubt,reconfirm the PNB's website by double clicking the 'padlock' symbol/icon in address bar to ensure the site is running in secure mode BEFORE you input any confidential/sensitive information.</li>
<li> Clicking on the 'padlock' symbol/icon and on server certification symbol will display details of the server certification in the favour of Punjab National Bank.</li>
<li> To ensure safe and genuine login,always enter bank's website either through www.netpnb.com or www.pnbindia.in.</li>
<li> In case there is any call, please confirm that call is from the authorized person of the bank.</li>
<li> Our bank does not ask for details of your account/pin/password. Therefore any one pretending to be asking you information from the bank/technical team may be fraudulent entities, so please beware. You should know how to operate net transactions and if you are not familiar you may refrain from doing so. You may seek bank's guidance in this regard. Bank is not resposible for online transaction going wrong. We shall also not be responsible for wrong transactions and wanton disclosure of details by you. Viewing option and transactions option on the net are different. You may exercise your option diligently.</li>
</ol>
</div>
<div style="margin-left:5.8in; color:#CFC; margin-top:-5.60in">
<img src="images/retailUser.jpg" width="710" height="400" />
</div>
<div style="margin-left:5.8in; margin-top:inherit; width:350px; height:135px; border-style:groove; border-width:medium">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<center><input type="submit" name="b1" value="Continue" style="background-color:#FF0; vertical-align:center; color:#000; font-weight:bold" /></form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/nortan2.jpg" width="120" height="80" style="margin-top:0.1in" /></center>
</div>
<div style="margin-left:9.5in; margin-top:-1.48in; width:350px; height:135px; border-style:groove; border-width:medium;">
<a href="newUSER.php">
<h6 style="margin-left:0.2in">NEW USER ? </h6></a>
<img src="images/newImage.jpg" height="70" width="90" style="margin-top:-0.01in; margin-left:0.2in"/>
<a href="DisableUser.php">
<h6 style="margin-left:1.8in; margin-top:-1.1in">DISABLE INTERNET BANKING</h6></a>
<img src="images/errorTriangle.jpg" height="70" width="90" style="margin-left:2.2in; margin-top:-0.03in" />

</div>

</div>
<br /><br /><br /><br />
<div style="height:30px; width:1100px; background-color:#CCCCCC; color:#000000">
<a href="termAndCondition.php">TERMS AND CONDITIONS |</a>
<a href="HyperLink.php">HYPERLINK POLICY |</a>

<a href="disclaimer.php">DISCLAIMER |</a>
<a href="security.php">SECURITY INFORMATION |</a>
<a href="contactUs.php">CONTACT US |</a>
<a href="home.php">HOME |</a>
<a href="admin.php">ADMIN</a>
</div>
<div style="height:30px; width:250px; background-color:#CCCCCC; color:#000000; margin-left:11.3in; margin-top:-0.3in">
&copy;2014 PUNJAB NATIONAL BANK

<?php
$check=0;
if(isset($_POST['b1']))
{
	session_start();
	$user=$_POST['text1'];
	$_SESSION['user']=$user;
	$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from newuser where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($y=$result->fetch_array())
				{
					$_SESSION['pic']=$y[8];
					$_SESSION['p']=$y[9];
					header('location:retailUserLogin.php');
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
		$cmd="select * from newuser1 where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($y=$result->fetch_array())
				{
					$_SESSION['pic']=$y[6];
					$_SESSION['p']=$y[7];
					header('location:retailUserLogin.php');
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
		$con=new mysqli("localhost","root","","pnbank");
	if($con==true)
	{
		$cmd="select * from personaldetails where accountNo='$user'";
		if($result=$con->query($cmd))
		{
			if($result->num_rows>0)
			{
				while($y=$result->fetch_array())	
				{
					
					$_SESSION['name']=$y[2];
					
				}
			}
			else
			{
				$tm=1;			
			}
		}
		else
		{
				?>
			        <script language="javascript">
					alert("Query Problem");
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