<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="retailMainPage.php">Accounts</a>      </li>
  <li><a href="#">Adhar Registration</a></li>
  <li><a class="MenuBarItemSubmenu" href="#">Complaint Management</a>
      <ul>
        <li><a href="raiseComplaint.php">Raise a Complaint</a>          </li>
        <li><a href="complaintHistory.php">Complaint/Request History</a></li>
        <li><a href="#">Track Status</a></li>
      </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Personal Settings</a>
      <ul>
        <li><a href="#" class="MenuBarItemSubmenu">Security Settings</a>
            <ul>
              <li><a href="chngePasswrd.php">Change Login Password</a></li>
              <li><a href="chngeImage.php">Change Image</a></li>
              <li><a href="chngePhrase.php">Change Phrase</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Other Settings</a>
            <ul>
              <li><a href="nikName.php">Set account NickName</a></li>
              <li><a href="MobileNumber.php">View Registered Mobile Number</a></li>
              <li><a href="PersonalDetails.php">View Personal details</a></li>
              <li><a href="cardPin.php">Set Pin for debit card</a></li>
          </ul>
        </li>
    </ul>
  </li>
  <li><a href="retailMail.php">Mails</a></li>
  <li><a href="TaxCredit.php">Tax Credit(View Form)</a></li>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
