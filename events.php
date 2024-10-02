<?php
header("Location: https://kalloopparapally.com/");
exit();
?>
<?php 

// Include MySQL db connection
include 'opendb.php';

////////////////////// Paging starts here /////////////////
$pageNo = 0;
$pageNo	= $_GET['pageNo']==null || $_GET['pageNo']==""?1:$_GET['pageNo'];		
if(!($pageNo > 0)) {          
	$pageNo = 0;
}else{
	$pageNo = $pageNo - 1;
}

$noOfPages = 0;
$totalMembers = 0 ;
$limit = 15;	
$start = $pageNo * $limit;

/////////////// find the total records and use it to apply paging ///////
$query =" SELECT * from tab_events";
$result = mysql_query($query);	

//////// total number of records
$totalRecords = mysql_num_rows($result);
$noOfPages = ceil($totalRecords / $limit);

/////// query with the paging aspplied
$result = mysql_query("SELECT event_date, title, details, small_image, big_image FROM tab_events ORDER BY event_date DESC limit $start, $limit ");

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
					<td class="td_blue_heading">EVENT CALENDAR</td>					
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
					<td><p align="justify">All the important events related to the church are mentioned here in details.</p></td>
				</tr>
				<tr>
					<td class="td_space_top_box"></td>
				</tr>
				<tr>								
					<td align="center">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">									
							<?
							if($totalRecords > 0){ // if record exists
							
								$no = 0;					
								while($row = mysql_fetch_array($result))
								{				
									$no++;	
									
									echo "<tr><td><b>".$row['title']."</b></td></tr><tr><td class='td_blue_line'></td></tr>";
									
									if($row['small_image'] != null && $row['small_image'] != ""){
										echo "<tr><td><p align='justify'><a href='".$row['big_image']."' rel='lightbox'><img border='0' src='".$row['small_image']."' border='0' align='right' hspace='5' title='".$row['title']."'></a> ".$row['details']."</p></td></tr><tr><td class='td_space_top_box'></td></tr>";
									}else{
										echo "<tr><td><p align='justify'>".$row['details']."</p></td></tr><tr><td class='td_space_top_box'></td></tr>";
									}
								}				
								
								if($noOfPages >1){  // if there are more than one page										
									echo "<tr><td align='center'><font size='1' face='verdana'>[<a href='events.php?pageNo=1'>First Page</A>] Page #";
									
									for ($i = 1; $i <= $noOfPages; $i++){								
										$page_temp = $i - 1;
										if($pageNo == $page_temp){
											echo "<font color='red'><b>".$i."</b></font>&nbsp;&nbsp;";
										}else{
											echo "<a href='events.php?pageNo=".$i."' >".$i."</a>&nbsp;&nbsp;";
										}
									}										
									echo "[<a href='events.php?pageNo=".$noOfPages."'>Last Page</a>]</font></td></tr>";	
								}
							}else{ /// no record exists
								echo "<tr><td align='center'><font size='3' face='verdana'>There is no event entry yet.</font></td></tr>";
							}?>								
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



