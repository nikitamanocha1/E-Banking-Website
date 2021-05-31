<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    date_default_timezone_set("Asia/Kolkata"); 
    $d=date('d');
	$m=date('m');
	$y=date('Y'); 
	echo $d . "<br>";
	echo $m . "<br>";
	echo $y . "<br>";
	$date= $d . $m . $y;
	echo $date;
	
?>
</body>
</html>
