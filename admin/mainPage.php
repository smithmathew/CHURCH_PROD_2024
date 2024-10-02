<?php

//start the session 
session_start(); 

//check to make sure the session variable is registered 
if(! session_is_registered('user')){ 
	//the session variable isn't registered, send them back to the login page 
	header( "Location: index.php" );
}
?>

<html>
<head>
<title>ST. MARY'S ORTHODOX CHURCH, KALLOOPPARA WEB SITE ADMINISTRATION</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
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
					<td class="td_blue_heading">ADMINISTRATION SECTION</td>					
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><?php include("menu.php"); ?></td>
		<td class="td_box">	
			<table width="100%" border="0" cellspacing="0" cellpadding="5">					
				<tr>
					<td colspan="2"><br><br>This section is meant for the system administrator of this web site. Changes made here will be reflected in the public pages. So please be very sure before you make changes in the data.<br><br>If you  are not the system administrator of this web site, please log off immediately.<br><br>
					Thank you.</td>					
				</tr>						
			</table>			
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
</BODY>
</HTML>