<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    date_default_timezone_set("Asia/Kolkata"); 
    $f=date('d-m-Y');
	$h=date(' H:i:s'); 
	$con=new mysqli("localhost","root","","pnbank");
	$c=0;
	if($con==true)
	{
		$cmd="delete from date";
		if($con->query($cmd)==true)
		{
			$cmd1="insert into date values('$f','$h')";
			if($con->query($cmd1)==true)
			{
				$c=1;
			}
		}
	}
?>

</body>
</html>
