<html>
<head>
<META 
content="kallooppara church, kallooppara, kalloopara, church, kallooppara palli, st.Mary's, st.mary , Malankara, orthodox church, tiruvalla, thiruvalla, kerala, india, malayalam, Malayalee, youth movement, sunday school, christian, christianity" 
name="keywords">
<META 
content="St.Mary's Orthodox Church Kallooppara, web site!. A complete information portal about the church and its origin" name="description">
<META NAME="revisit-after" content="7 days">
<META NAME="rating" content="General">
<meta name="robots" content="index, follow">
<title>ST. MARY'S ORTHODOX CHURCH, KALLOOPPARA WEB SITE</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script language="javascript" src="js/formValidate.js"></script>
<SCRIPT LANGUAGE="JavaScript">

function submitMe(){
	if(!checkemail(document.frm.emailTxt.value)){
		alert("Please enter valid email address");
		document.frm.emailTxt.focus();
	}else if(trim(document.frm.nameTxt.value)==""){
		alert("Please enter name");
		document.frm.nameTxt.focus();
	}else if(trim(document.frm.address.value)==""){
		alert("Please enter address");
		document.frm.address.focus();
	}else if(trim(document.frm.comments.value)==""){
		alert("Please enter your feedback");
		document.frm.comments.focus();
	}else{
		document.frm.action = "request_save.php";
		document.frm.submit();
	}
}
</script>
</head>
<body TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
<center>
<table width="775" border="0" cellspacing="0" cellpadding="0" class="td_main">
	<?php include("header.php"); ?>	
	<tr>
		<td valign="top" class="td_space_top">&nbsp;</td>
		<td class="td_box_top" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">				
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>								
					<td class="td_blue_heading">PRAYER REQUEST</td>					
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><br><?php include("menu.php"); ?></td>
		<td class="td_box">
		<form name="frm" action="" method="POST">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">								
				<tr>								
					<td><p align="justify">Holy Mary has answered prayers of many and has always showered blessings upon her people. So if you wish to be remembered in our daily prayers, please feel free to send us your request. And we hope your prayers too will be answered.</p></td>
				</tr>
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>
					<td colspan="2" align="center" >
						<table border="0" cellspacing="5" cellpadding="0" class="td_light_box">
							<tr>								
								<td align="center" colspan="2"><b>REQUEST FORM</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="2"></td>								
							</tr>
							<tr>
								<td>Email address </td>
								<td><input type="text" name="emailTxt" size="35"></td>
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="2"></td>								
							</tr>
							<tr>
								<td>Full name </td>
								<td><input type="text" name="nameTxt" size="35"></td>
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="2"></td>								
							</tr>
							<tr>
								<td>Address </td>
								<td><textarea rows="3" name="address" cols="34"></textarea></td>
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="2"></td>								
							</tr>
							<tr>
								<td>Request</td>
								<td><textarea name="comments" cols="34" rows="10"></textarea></td>
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="2"></td>								
							</tr>
							<tr>
								<td height="26" colspan="2" align="center"><input type="button" name="save" value="Submit" onClick="javascript:submitMe()">&nbsp; <input type="reset" value="Clear"></td>
							</tr>				
						</table>
					</td>
				</tr>			
			</table>
		</form>
		</td>
		<td valign="top" class="td_blue_right_small">&nbsp;</td>
	</tr>	
	<tr>
		<td valign="top" class="td_space_bottom">&nbsp;</td>
		<td class="td_box_bottom" valign="top">&nbsp;</td>
		<td valign="top" class="td_space_bottom">&nbsp;</td>
	</tr>
	<tr>
		<td >&nbsp;</td>
		<td colspan="2"><?php include("footer.php"); ?></td>
	</tr>
</table>
</center>
</BODY>
</HTML>



