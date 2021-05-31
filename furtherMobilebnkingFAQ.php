<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCF; color:#636">
<img src="images/logo1.jpg" height="150" width="1350" /><br /><br />
<div style="text-align:justify; margin-left:1.5in; margin-right:1.5in"><br />
<div style="border-bottom:groove; border-color:#000000">
<b>MConnect Support to CDMA Handsets</b><br />
 <br /></div><br />
 
<b style="font-size:18px; color:#000000">CDMA Handsets Application platform</b>
 
<p>BREW is an application execution platform that runs at the firmware level (CDMA chipset) and specially targets wireless applications that can be downloaded and executed on mobile devices. BREW runtime environment is available free of cost to CDMA device manufacturers. This runtime environment is much like the VM in Java, except that BREW runtime environment is not designed to provide portability from one device to another. BREW is currently available only to CDMA-based wireless devices sporting Qualcomm processors.</p>
 <br />
<b style="font-size:14px; color:#333333">The BREW distribution system (BDS)</b>
<p>Qualcomm's BREW distribution system (BDS) allows carriers to manage download BREW applications by the devices running in their network. The solution manages all the distribution and billing issues, and developers receive their share of revenue for the applications downloaded by users. Each application available for download has to be certified by Qualcomm before it is deployed.</p>

<b style="font-size:14px; color:#333333">True Brew Testing (TBT)</b>
<p>Brew is not just a development system - but a distribution system as well. Brew is a development/deployment environment for embedded applications, abstracting hardware so one application can run on multiple devices, and offering customer-downloadable apps and content on demand. But unlike other platform, Brew applications can only be distributed through carrier controlled channels and must go through carrier/ QUALCOMM mandated third party - True Brew Testing (TBT) before deployment. That makes development for Brew tricky, expensive and very complicated.</p><br /><br />
 
<b style="font-size:18px; color:black">Categorization of CDMA Handsets:-</b>
 
<b style="font-size:14px; color:#333333">CDMA handsets are categorized into two</b>
<ul>
<li>       J2ME enabled handsets</li>
<li>          Brew ended handsets</li>
</ul> 
<b style="font-size:14px; color:#333333">J2ME Enabled Handsets:-</b>
<ul>
<li>         CDMA devices available in market support to run J2ME applications with or without operator tie-up.</li>
<li>         If operator allows to access 3rd party J2ME applications (not deployed in operator network) then user need to specify the download URL in his mobile browser and using appropriate data plan ( controlled by operator) application can be downloaded, install and can be accessed on his handset.</li>
<li>         From public network if operator network deny installing 3rd party J2ME application download, then operator tie-up is required for the application developer to take his apps to market and support these devices.  This might involves revenue share, time to market.</li>
<li>         Currently very few CDMA handsets are available in the market which is supporting J2ME applications.</li>
<li>         Infosys mConnect supports both J2ME & browsers option for these devices. </li>
 
</ul> 
<b style="font-size:14px; color:#333333">BREW enabled handsets:-</b>
<ul>
<li>         CDMA handsets are tightly coupled and controlled by operator network.</li>
<li>         Before deployment, any application developed in BREW platform should be certified by standard Brew certification process i.e. TBT if operator or BDS if Qualcomm.</li>
<li>         This involves operator tie-up for deploying application.  Revenue share with operator, certification cost and time to market might be high.</li>
<li>         Infosys mConnect support  browser option for these devices</li>
</ul>
<form name="f1" method="post" action="#"><center>
<input type="submit" name="b1" value="Close Window" style="font-size:18px; font-style:normal; font-weight:500; background:#CCFF00" /></center>
</form>
</div> 
</body>
</html>
<?php
if(isset($_POST['b1']))
{
	header('location:mobileBnkingFaq.php');
}

?>