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
<div style="margin-left:1in;">
<form name="f1" method="post" action="#"><br /><br />
<select name="mail">
<option value="select">Select</option>
<option value="1">Compose a Mail</option>
<option value="2">View Send Mails</option>
<option value="3">View Inbox</option></select>&nbsp;&nbsp;&nbsp;
<input type="submit" name="btn1" value="GO" />
</form></div>
<?php
if(isset($_POST['btn1']))
{
	$check=$_POST['mail'];
	switch($check)
	{
		case 1:
							$con=new mysqli("localhost","root","","pnbank");
							if($con==true)
							{
								$cmd="select * from personaldetails where accountno='$user'";
								if($result=$con->query($cmd))
								{
									if($result->num_rows>0)
									{
										echo "<br><br><div style='margin-left:2in; border-style:groove; border-color:#666666; height:400px; width:510px'><br><br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: " . $rows[3] . "<br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To : Punjab National Bank <br><br>";
										echo "<form name='f2' method='post' action='#'>";
										echo "<input type='text' name='t1'>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='txt1' style='padding-left:150px; padding-bottom:200px; padding-right:150px'>
										<input type='submit' name='btn11' value='Send' style='background-color:#FFFF00; color:#000000; font-size:24px'>
										<input type='reset' name='btn11' value='Clear' style='background-color:#FFFF00; color:#000000; font-size:24px'></form></div>";
										}}}
						break;
				case 2:
						$con=new mysqli("localhost","root","","pnbank");
						if($con==true)
						{
							$cmd="select * from mailbox where accountNo='$user'";
							if($result=$con->query($cmd))
							{
								if($result->num_rows>0)
								{
									echo "<table border='1' width='400px'>";
									echo "<tr><th> ACCOUNT NUMBER </th><th> MAILS </th></tr>";
									while($rows=$result->fetch_array())
									{
										echo "<tr><td>" . $rows[0] . "</td>";
										echo "<td>" . $rows[1] . "</td></tr>";
									}
								}
								else
								{
									echo "no rows found";
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
				case 3:
						$con=new mysqli("localhost","root","","pnbank");
						if($con==true)
						{
							$cmd="select * from inbox where accountNo='$user'";
							if($result=$con->query($cmd))
							{
								if($result->num_rows>0)
								{
									echo "<table border='1' width='400px'>";
									echo "<tr><th> ACCOUNT NUMBER </th><th> MAILS </th></tr>";
									while($rows=$result->fetch_array())
									{
										echo "<tr><td>" . $rows[0] . "</td>";
										echo "<td>" . $rows[1] . "</td></tr>";
									}
								}
								else
								{
									echo "no rows found";
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

if(isset($_POST['btn11']))
										{
										$sbj=$_POST['t1'];
										$ins=$_POST['txt1'];
										$con=new mysqli("localhost","root","","pnbank");
						if($con==true)
						{
										$cmd1="insert into mailbox values('$user','sbj','$ins')";
										if ($con->query($cmd1)==true)
										{
											echo "inserted";
										}
										else
										{
											echo "not inserted";
										}
								
							
							}
							else
							{
								echo "connection problem";
							}}
?>
</body>
</html>
