<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-color:#CCF; color:#636">
<img src="../projectWork/images/logo1.jpg" height="100" width="1350" />
<br />
 <div style="text-align:justify; width:1290px;">
<br /><br />
<center><u>USER GUIDE FOR SMS BASED MOBILE BANKING (MANUAL SMS FLAVOR)</u></center>
<br /><br />
<h4><b>Any mobile phone capable of sending and receiving SMS can be used for SMS Based Mobile Banking. The user has to create an SMS in the following predefined format(s) according to the service required by him and send the same to our fixed number-5607040.</b></h4>
 
<h3>Facilities available:</h3>
<ul>
<li> View account balance</li>

<li>Online Mini Statement(Quick View of last 10 transactions)</li>

<li>Transfer of funds to own accounts (within PNB)</li>

<li>Generate MMID</li>

<li>IMPS ( Immediate Payment Service) – Transfer of funds to Third Party accounts within PNB as well as Interbank Fund transfers</li>

<li>Cheque Status inquiry</li>

<li>Stop payment of cheque</li>

<li>Cheque Book request</li>

<li>Changing SMS Password</li>

<br /><br /> 

(*Note: Daily limit for funds transfer using SMS including through IMPS is Rs. 5000/-)
 <br />
 <br />
<h3><u>Steps for using Manual SMS:</u></h3>
 
<p>The above facilities can be availed by just sending an SMS from your mobile handset to the fixed number 5607040. The SMS should be in a predefined format (table given below). SMS can be sent only from the Mobile number registered with PNB for Mobile Banking facility.</p>
 
<b>Codes for ‘View Only Facility’:</b><br /><br />
<table border="2" cellpadding="4" cellspacing="4">
 <tr>
<th>Facility</th>
<th>Short Code</th>
<th>Format of the SMS Message</th>
<th>Example*</th>
</tr>
<tr>
<td>Balance Inquiry</td>
<td>BAL</td>
<td>BAL<space> 16 digit A/C NUMBER</td>
<td>BAL 015300XXXXXXXXXX</td></tr>
<tr>
<td>Mini Statement Inquiry</td>
<td>MINSTMT</td>
<td>MINSTMT <space> 16 digit A/C NUMBER</td>
<td>MINSTMT 015300XXXXXXXXXX</td></tr>
<tr>
<td>A/c Statement Request</td>
<td>STMT</td>
<td>STMT <space>Month<space> 16 digit A/C NUMBER</td>
<td>STMT  JAN 015300XXXXXXXXX</td></tr>
<tr>
<td>Stop payment of cheque</td>
<td>STPCHQ</td>
<td>STPCHQ <space> CHEQUE NUMBER <space>16 digit A/C NUMBER</td>
<td>STPCHQ cccccc 015300XXXXXXXXXX</td></tr>
<tr>
<td>Cheque Status Inquiry</td>
<td>CHQINQ</td>
<td>CHQINQ <space> CHEQUE NUMBER <space> 16 digit A/C NUMBER</td>
<td>CHQINQ ccccc 015300XXXXXXXXXX</td></tr>
<tr>
<td>Cheque book request</td>
<td>CHKBK</td>
<td>CHKBK <space>ACCOUNT NUMBER<space> MBANKING USERID<space> NUMBER OF LEAVES FOR CHEQUE BOOK</td>
<td>CHKBK 015300XXXXXXXXXX AAAAAAAAA 20</td></tr>
<tr>
<td>Change SMS Password</td>
<td>CHNGPWD</td>
<td>CHNGPWD<space>SMS PASSWORD<space> NEW SMS PASSWORD</td>
<td>CHNGPWD 2222 3333</td>
 </tr></table>
<br />
<p>(where SMS Password =2222; A/c no. = 015300XXXXXXXXXX; cheque no. =cccccc; User id=AAAAAA; New SMS PW=3333)</p>
<br />
 

<b><u>Codes related to Fund Transfer -Facility</u></b><br /><br />
<br />
<table border="2" cellpadding="4" cellspacing="4">
<tr>
<th>Self Transfer of funds</th>

<th>SLFTRF</th>

<th>SLFTRF <space>FROM ACCOUNT NUMBER<space>TO ACCOUNT NUMBER<space>AMOUNT</th>

<th>SLFTRF 015300YYYYYYYYYY 015300XXXXXXXXXX 100</th></tr>
<tr>

<td>IMPS</td>

<td>Intra bank and Interbank remittance up to Rs. 5000/- per day per customer</td>

<td>Generate 7 digit MMID</td>
<td>MMID</td></tr>
<tr>
<td>MMID</td>
<td>MMID</td>
<td>You will be receiving a list of MMIDs mapped with the all accounts linked to your user Id.</td>
<td>To Cancel MMID</td></tr>
<tr>
<td>MMIDCANCEL</td>
 
 
<td>MMIDCANCEL</td>
<td>MMIDCANCEL</td>
<td>This cancels all the MMIDs generated</td></tr>
<tr>
<td>Method 1 for Fund Transfer</td>
<td>IMPS  </td>

<td>IMPS<space>Beneficiary Mobile No<space>Beneficiary MMID<space>Amount<space>IMPS PIN
<br /> 
* IMPS PIN is a seven digit no. which is combination of 4 digit SMS password  and last 3 digits of Remitter’s MMID</td>
<td>IMPS 9999999999 1234567 100 2222111</td>
</tr>
<tr>
<td>Method 2 for Fund Transfer</td>

<td>IMPS  </td>

<td>IMPS <space>XXXX <space>Debit Account No<space> Beneficiary Mobile No<space>Beneficiary MMID<space>Amount</td>

<td>IMPS 2222 015300YYYYYYYYYY 9999999999 1234567 100</td></tr></table>

 <br /><br />
 
<p>This facility through SMS is free of charge by the Bank. However, telecom charges on SMS would be as per tariff of the telecom service provider.</p>
<form name="f1" method="post" action="#"><br /><br />
<center><input type="submit" name="b1" value="Close Window" style="color:#000; background-color:#FF0;" /></center>
</form> 
 
</body>
</html>
<?php
if (isset($_POST['b1']))
{
	header('Location:mobileBanking.php');
}
?>
