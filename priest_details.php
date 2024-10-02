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
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<SCRIPT LANGUAGE="JavaScript">

function refreshPage()
{
	document.frm.action="bishops_priests.php";
	document.frm.submit();
}
</script>
</head>
<body TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
<form name="frm" action ="" method="post">
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
					<td class="td_blue_heading">PRIESTS OF OUR CHURCH</td>
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><br><?php include("menu.php"); ?></td>
		<td class="td_box">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">												
				<tr>								
					<td><p align="justify">Our church has always been very keen to bring up its members in great religious faith and social values. There have always been many who were willing to dedicate their lives for the betterment of the church, Christianity and to the society as a whole. So in our long 800 years of legacy, we have given to Malanakar Sabha many priests and preachers of the highest quality and still continuing the same. We would like to present to you all those great people who has dedicated their life for the church and the community</p></td>
				</tr>	
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>								
					<td align="center">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">									
							<?php
							$file = fopen("data_files/priests.txt", "r");
							//Output a line of the file until the end is reached
											
							while(!feof($file))
							{					
								$fileLine = fgets($file);								
							?>							
							<tr>
								<td><b><?php echo substr($fileLine,0,strpos($fileLine,":")); ?></b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify"><?php echo substr($fileLine,strrpos($fileLine,":")+1,strlen($fileLine)); ?></p></td>
							</tr>
							<tr>
								<td class="td_space_top_box"></td>
							</tr>
							<?php 											
							}
							fclose($file);
							?> 						
						</table>
					</td>
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
		<td >&nbsp;</td>
		<td colspan="2"><?php include("footer.php"); ?></td>
	</tr>
</table>
</form>
</center>
</BODY>
</HTML>



