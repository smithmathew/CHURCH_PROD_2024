<?php 
	$parentPage = "index"; 
?>
<html>
<head>
<title>ST. MARY'S ORTHODOX CHURCH, KALLOOPPARA WEB SITE ADMINISTRATION</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="../js/formValidate.js"></script>
<script language="JavaScript">

function validateForm(){
	if(trim(document.loginFrm.nameTxt.value)==""){
		alert("Please enter user name");
		document.loginFrm.nameTxt.focus();
	}else if(trim(document.loginFrm.passwordTxt.value)==""){
		alert("Please enter password");
		document.loginFrm.passwordTxt.focus();
	}else{
		document.loginFrm.submit();
	}
}

function onEnter(event) {	
	if(event.keyCode==13)
		validateForm();
}

</script>    
</head>
<body TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0" bgcolor="#084067">
<center>
<table width="775" border="0" cellspacing="0" cellpadding="0" class="td_main">		
	<form name="loginFrm" method="post" action="loginCheck.php">
	<?php include("header.php"); ?>
	<tr>
		<td valign="top" class="td_space_top">&nbsp;</td>
		<td class="td_box_top" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">				
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>								
					<td class="td_blue_heading">ADMINISTRATION LOG IN SCREEN</td>					
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" >&nbsp;</td>
		<td class="td_box">				
			<table width="50%" border="0" cellspacing="0" cellpadding="5">						
				<tr>								
					<td colspan="2" height="8"></td>								
				</tr>
				<tr>
					<td>User name </td>
					<td><input type="text" name="nameTxt" size="30"></td>
				</tr>
				<tr>								
					<td colspan="2"></td>								
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" name="passwordTxt" size="30" onkeypress="onEnter(event)"></td>
				</tr>							
				<tr>								
					<td colspan="2"></td>								
				</tr>
				<tr>
					<td height="26" colspan="2" align="right"><input type="button" name="save" value=" Submit " onClick="javascript:validateForm()">&nbsp; <input type="reset" value=" Clear ">
				</tr>					
			</table><br><br>			
		</td>			
		<td valign="top" class="td_blue_right_small">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_space_bottom">&nbsp;</td>
		<td class="td_box_bottom" valign="top">&nbsp;</td>
		<td valign="top" class="td_space_bottom">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3"><?php include("footer.php"); ?></td>
	</tr>
</table>
</form>
</center>
<SCRIPT LANGUAGE="JavaScript">
<!--
document.loginFrm.nameTxt.focus();
//-->
</SCRIPT>
</BODY>
</HTML>
