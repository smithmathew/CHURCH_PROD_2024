<?php
// Include MySQL db connection
include 'opendb.php';

require_once('recaptchalib.php');
$privatekey = "6LfhzPkSAAAAABjP2BExGCEurnoeuqwKrYJyUznC";
$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);                       	
	
$name		= $_POST['nameTxt'];
$emailAdd	= $_POST['emailTxt'];
$url		= $_POST['urlTxt'];
$country	= $_POST['countryCmb'];
$comments	= $_POST['commentsTxt'];
$validData	= false;

if($name !=null && trim($name) != "" && $resp->is_valid){

	$sql = "INSERT INTO tab_guestbook(entry_date, name, email, url, country, comments) VALUES (now(), '$name', '$emailAdd', '$url', '$country', '$comments')";	
	$result = mysql_query($sql);
	$validData = true;	
}
mysql_close($con);

?>
<html>
<script>
function fun()
{
	<? if($validData){?>
		alert("Thank you for signing in our guest book !!");
		document.frm.action = "guestBook.php";
	<? }else{ ?>
		alert("Captcha entered is wrong. Please try again !!");
		document.frm.action = "guestBookEntry.php";
	<? } ?>
	document.frm.submit();
}
</script>
<body onLoad="fun()">
<form name="frm">
</form></body></html>