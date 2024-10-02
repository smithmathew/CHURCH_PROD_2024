<?php
				
	$readMe = "no";

	$article= $_REQUEST['articleNo'];
		if($article == "")
			$article="1";
	
	if($article == "1")
		$articleName = "ARTICLE 1";
	elseif($article == "2")
		$articleName = "ARTICLE 2"; 
	elseif($article == "3")
		$articleName = "ARTICLE 3";  
	elseif($article == "4")
		$articleName = "ARTICLE 4";  
	elseif($article == "5")
		$articleName = "ARTICLE 5";  
	elseif($article == "6")
		$articleName = "ARTICLE 6";  
	elseif($article == "7")
		$articleName = "ARTICLE 7";  
	elseif($article == "8")
		$articleName = "ARTICLE 8"; 
	elseif($article == "9")
		$articleName = "ARTICLE 9";  

?>
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
<SCRIPT LANGUAGE="JavaScript">
function gotoArticle()
{
	document.frm.action="history_articles.php";
	document.frm.submit();
}
</script>
</head>
<body TOPMARGIN="0" LEFTMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0">
<center>
<table width="775" border="0" cellspacing="0" cellpadding="0" class="td_main">
<form name="frm" action ="" method="post">
	<?php include("header.php"); ?>	
	<tr>
		<td valign="top" class="td_space_top">&nbsp;</td>
		<td class="td_box_top" valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">				
				<tr>
					<td class="td_space_top_box"></td>
				</tr>	
				<tr>								
					<td class="td_blue_heading">
						<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">							
							<tr>
								<td><b>CHURCH HISTORY</b></td>
								<td align="right"><select name="articleNo" onChange="javascript:gotoArticle()">
									<option value="0" >Select Another Article</option>
									<option value="1" >Article 1</option>
									<option value="2" >Article 2</option>
									<option value="3" >Article 3</option>
									<option value="4" >Article 4</option>
									<option value="5" >Article 5</option>
									<option value="6" >Article 6</option>
									<option value="7" >Article 7</option>
									<option value="8" >Article 8</option>
									<option value="9" >Article 9</option>
									</select>
								</td>
							</tr>
						</table>
					
					</td>					
				</tr>				
				<tr>
					<td class="td_space_top_box"></td>
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
					<td align="center">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">									
							<?php				
							
							$file = fopen("data_files/history_articles.txt", "r") or exit("Unable to open file!");
							//Output a line of the file until the end is reached
											
							while(!feof($file))
							{					
								$fileLine = fgets($file);
								if(trim($fileLine) == $article."*"){
									$readMe = "yes";
									$fileLine = fgets($file);
								}else if(trim($fileLine) == ($article+1)."*"){
									$readMe = "no";						
								}
								
								if($readMe=="yes"){
							?>							
									<tr>
										<td><b><?php echo $articleName?> - <?php echo substr($fileLine,0,strpos($fileLine,":")); ?></b></td>					
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
							}
							fclose($file);
							?> 
						</table>
					</td>
				</tr>					
				<tr>								
					<td align="center"><a href="history.php">Back To History Main Page</a></td>
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



