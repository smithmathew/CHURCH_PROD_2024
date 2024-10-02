<?php	

  $ward= $_REQUEST['wardNameCmb'];
  $readMe = "no";

  if($ward == "")
	$ward="1";

	if($ward == "1")
		$wardName = "KALLOORKARA";
	elseif($ward == "2")
		$wardName = "CHACKOMBHAGAM EAST"; 
	elseif($ward == "3")
		$wardName = "CHACKOMBHAGAM SOUTH";  
	elseif($ward == "4")
		$wardName = "CHACKOMBHAGAM WEST";  
	elseif($ward == "5")
		$wardName = "MARKET";  
	elseif($ward == "6")
		$wardName = "VALLONTHRA";  
	elseif($ward == "7")
		$wardName = "YAKSHIMANNATHU BHAGAM";  
	elseif($ward == "8")
		$wardName = "AZHAKANAPPARA"; 
	elseif($ward == "9")
		$wardName = "MUTTATHUKONAM";  
	elseif($ward == "10")
		$wardName = "KADAMANKULAM";
	else if($ward == "11")
		$wardName = "AIKKARA BHAGAM";
	elseif($ward == "12")
		$wardName = "PUTHUSSERY";
	elseif($ward == "13")
		$wardName = "MADATHUMBHAGAM SOUTH";  
	elseif($ward == "14")
		$wardName = "MADATHUMBHAGAM WEST";  
	elseif($ward == "15")
		$wardName = "MADATHUMBHAGAM EAST";
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
function GotoWard()
{	
	//document.frm.ward.value = document.frm.wardName.value;
	document.frm.action="members.php";
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
			<table width="100%" cellspacing="0" cellpadding="5">
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>
					<td class="td_blue_heading">CHURCH MEMBERS</td>	
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><br><?php include("menu.php"); ?></td>
		<td width="580" valign="top" class="td_box">
			<table width="100%" cellspacing="5" cellpadding="0">								
				<tr>								
					<td ><p align="justify">Our church has been the worshiping place for more than 700 families and the number of members belonging to the church will come in thousands. Members of our church are present all around the globe and their endless support and help has contributed a lot to the betterment and growth of the church. The families belonging to the church are divided into 15 different wards according to their location and to view families belonging to a particular ward select the ward from the selection box to the right.</p></td>			
				</tr>
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>
					<td>
						<table width="100%" height="100%" border="0" cellspacing="5" cellpadding="0">
							<tr>															
								<td class="td_blue_heading"><?php echo $wardName; ?> WARD</td>							
								<td align="right" class="td_blue_heading"><select name="wardNameCmb" onChange="javascript:GotoWard()">
								<option value="1" >-- Select Another Ward --</option>
								<option value="1" >Kalloorkara</option>
								<option value="2" >Chackombhagam East</option>
								<option value="3" >Chackombhagam South</option>
								<option value="4" >Chackombhagam West</option>
								<option value="5" >Market</option>
								<option value="6" >Vallonthra</option>
								<option value="7" >Yakshimannathu Bhagam</option>
								<option value="8" >Azhakanappara</option>
								<option value="9" >Muttathukonam</option>
								<option value="10" >Kadamankulam</option>
								<option value="11" >Aikkara Bhagam</option>
								<option value="12" >Puthussery</option>
								<option value="13" >Madathumbhagam South</option>
								<option value="14" >Madathumbhagam West</option>
								<option value="15" >Madathumbhagam East</option>
								</select></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table width="100%" cellspacing="5" cellpadding="0">							
							<tr>								
								<td><B>No.</b></td>								
								<td><B>Family Name</b></td>
								<td><B>Head of the Family</b></td>
								<td><B>Phone No.</b></td>
							</tr>
							<tr>								
								<td class="td_blue_line" colspan="4"></td>								
							</tr>
							<?php
							$file = fopen("data_files/ward.txt", "r") or exit("Unable to open file!");
							//Output a line of the file until the end is reached
											
							while(!feof($file))
							{					
								$fileLine = fgets($file);
								if(trim($fileLine) == $ward."*"){
									$readMe = "yes";
									$fileLine = fgets($file);
								}else if(trim($fileLine) == ($ward+1)."*"){
									$readMe = "no";						
								}
							
								if($readMe=="yes"){
							?>	
								<tr>								
									<td><?php echo substr($fileLine,0,strpos($fileLine," ")); ?></td>
									<td><?php echo substr($fileLine,strrpos($fileLine,",")+1,(strrpos($fileLine,".")- (strrpos($fileLine,",")+1))); ?></td>
									<td><?php echo substr($fileLine,strpos($fileLine," ")+1,(strpos($fileLine,",")- (strpos($fileLine," ")+1))); ?></td>									
									<td><?php echo substr($fileLine,strrpos($fileLine,".")+1,strlen($fileLine));  ?></td>
								</tr>
								<tr>								
									<td class="td_blue_line" colspan="4"></td>								
								</tr>
							<?php 
								}				
							}
							fclose($file);
							?> 
							<tr>								
								<td colspan="4">&nbsp;</td>			
							</tr>
							<tr>								
								<td colspan="4" align="center"><a href="members.php">Back To Member Main Page</a><br><br></td>
							</tr>
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



