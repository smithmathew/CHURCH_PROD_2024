<?php
header("Location: https://kalloopparapally.com/");
exit();
?>
<?php

$name		= $_POST['nameTxt'];
$emailAdd	= $_POST['emailTxt'];
$address	= $_POST['address'];
$comments	= $_POST['comments'];
$mailto		= 'info@kalloopparapally.com';

if($name !=null && trim($name) != ""){

	// For sending mail to the church mail box
	$subject= "KalloopparaPally.com - Feed back from ".$name ;

	$messageproper =
		"This message was sent from:\n" .
		"Name : $name\n".
		"Email : $emailAdd\n".
		"Address : $address\n".
		"Feed Back : $comments".	
		"\n\n------------------------------------------------------------\n" ;
	$headers = 'From: info@kalloopparapally.com' . "\r\n";
	mail($mailto, $subject, $messageproper, $headers);
}

?>
<html>
<script>
function fun()
{
	alert("Thanks a lot for your valuable comments !!");
	document.frm.action = "contactus.php";
	document.frm.submit();
}

</script>
<body onLoad="fun()">
<form name="frm">
</form></body></html>
