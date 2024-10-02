<?php
header("Location: https://kalloopparapally.com/");
exit();
?>
<?php					
	$galType= $_REQUEST['galType'];
	if($galType == null || $galType == "")
		$galType="1";
	
	if($galType == "1")
		$galleryName = "CHURCH PICTURES";
	elseif($galType == "2")
		$galleryName = "SCULPTURES"; 
	elseif($galType == "3")
		$galleryName = "CRAFT WORK";  
	elseif($galType == "4")
		$galleryName = "CHURCH FEAST (2010)";  
	elseif($galType == "5")
		$galleryName = "EVENT ARCHIVES";
	elseif($galType == "6")
		$galleryName = "KURISHADI [KURISHUM THOTTI]";
	elseif($galType == "7")
		$galleryName = "OTHER CHURHES";  
	elseif($galType == "8")
		$galleryName = "GOOD FRIDAY (2010)"; 
	elseif($galType == "9")
		$galleryName = "CONSECRATION  (2009)";	
	elseif($galType == "10")
		$galleryName = "VISIT OF HIS HOLINESS ARAM I CATHOLICOSE";	
	elseif($galType == "11")
		$galleryName = "OVBS 2010";
	elseif($galType == "12")
		$galleryName = "PALM SUNDAY 2010";	
	elseif($galType == "13")
		$galleryName = "YOUTH LEAGUE";	
	elseif($galType == "14")
		$galleryName = "CHURCH FEAST (2012)";
	elseif($galType == "15")
		$galleryName = "MADATHUMBHAGOM KURISHADI (2012)";	
?>
<html>
<head>
<META 
content="kallooppara church, kallooppara, kalloopara, church, kallooppara palli, st.Mary's, st.mary , Malankara, orthodox church, tiruvalla, thiruvalla, kerala, india, malayalam, Malayalee, youth movement, sunday school, christian, christianity" 
name="keywords">
<META 
content="St.Mary's Orthodox Church Kallooppara web site. A complete information site about the church, its origin, its members and activities" name="description">
<META NAME="revisit-after" content="7 days">
<META NAME="rating" content="General">
<meta name="robots" content="index, follow">
<title>ST. MARY'S ORTHODOX CHURCH, KALLOOPPARA WEB SITE</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<SCRIPT LANGUAGE="JavaScript">

function gotoGallery(){
	document.frm.action="gallery.php";
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
			<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="5">				
				<tr>
					<td class="td_space_top_box" colspan="3"></td>
				</tr>							
				<tr>
					<td colspan="3" class="td_blue_heading">
						<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">							
							<tr>
								<td ><b>PHOTO GALLERY</b></td>
								<td align="right" ><select name="galType" onChange="javascript:gotoGallery()">
								<option value="0" >Select Another Gallery</option>	
								<option value="14" >Church Feast 2012</option>
								<option value="15" >Madathumbhagom Kurishadi (2012)</option>
								<option value="11">OVBS 2010</option>
								<option value="8" >Good Friday 2010</option>
								<option value="12">Palm Sunday 2010</option>
								<option value="10">Visit of His Holiness Aram I Catholicose</option>
								<option value="4" >Church Feast 2010</option>
								<option value="9" >Consecration (2009)</option>									
								<option value="1" >Church pictures</option>
								<option value="2" >Sculptures</option>
								<option value="3" >Craftwork</option>						
								<option value="5" >Event Archives</option>
								<option value="6" >Kurishadi</option>
								<option value="7" >Other churches</option>
								<option value="13" >Youth League</option>								
								</select>
							</td>
							</tr>							
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><br><?php include("menu.php"); ?></td>
		<td class="td_box">
			<table width="100%" height="100%" border="0" cellspacing="5" cellpadding="0">					
				<tr>
					<td colspan="3" class="td_space_top_box"></td>
				</tr>
				<tr>								
					<td colspan="3" align="center">
						<table border="0" cellspacing="3" cellpadding="0">					
							<tr>
								<td><b><?php echo $galleryName; ?></b></td>
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
						</table>
					</td>
				</tr>				
				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>
				<?php														
				if($galType == "1"){					
				?>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/church_pics/0.gif" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/0_small.gif" border="0" title="Church being declared as the pilgrim place of Holy Mary" vspace="5" hspace="8"></a><br>Side view of the church</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/1.jpg" rel="lightbox[gallery]"><img src="images/gallery/church_pics/1_small.jpg" border="0" hspace="8" vspace="5" title="Front view of the church"></a><br>Front view of the church</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/2.jpg" rel="lightbox[gallery]"><img src="images/gallery/church_pics/2_small.jpg" border="0" hspace="8" vspace="5" title="View of Maanimalika and church"></a><br>Manimaalika</td>
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/church_pics/3.jpg" rel="lightbox[gallery]"><img src="images/gallery/church_pics/3_small.jpg" border="0" hspace="8" vspace="5" title="Side view of the church"></a><br>Side view of the church</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/4.jpg" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/4_small.jpg" border="0" title="Manimaalika" vspace="5" hspace="8"></a><br>Side view of the church</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/5.jpg" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/5_small.jpg" border="0" title="Side view of the church" vspace="5" hspace="8"></a><br>Side view of the church</td>	
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/church_pics/6.jpg" rel="lightbox[gallery]"><img src="images/gallery/church_pics/6_small.jpg" border="0" hspace="8" vspace="5" title="Side view of the church"></a><br>Side view of the church</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/18.gif" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/18_small.gif" border="0" title="Manimaalika" vspace="5" hspace="8"></a><br>Manimaalika</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/6.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/6_small.gif" border="0" hspace="8" vspace="5" title="Prayer room named after St. Gregorios of Parumala"></a><br>Prayer room named after St.Gregorios of Parumala</td>	
				</tr>
				<tr>					
					<td align="center" valign="top"><a href="images/gallery/church_pics/7.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/7_small.gif" border="0" hspace="8" vspace="5" title="View of the newly built balcony"></a><br>View of the newly built balcony</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/8.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/8_small.gif" border="0" hspace="8" vspace="5" title="Painting on the wall of the Altar"></a><br>Painting on the wall of the Altar</td>	
					<td align="center" valign="top"><a href="images/gallery/church_pics/9.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/9_small.gif" border="0" hspace="8" vspace="5" title="Church Interior"></a><br>Church Interior</td>
				</tr>
				<tr>					
					<td align="center" valign="top"><a href="images/gallery/church_pics/10.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/10_small.gif" border="0" hspace="8" vspace="5" title="View of the balcony"></a><br>View of the balcony</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/13.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/13_small.gif" border="0" hspace="8" vspace="5" title="The church office building"></a><br>The church office building</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/14.gif" rel="lightbox[gallery]"><img src="images/gallery/church_pics/14_small.gif" border="0" hspace="8" vspace="5" title="Main auditorium at the front"></a><br>Main auditorium at the front</td>		
				</tr>				
				<tr>					
					<td align="center" valign="top"><a href="images/gallery/church_pics/15.gif" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/15_small.gif" border="0" title="Second auditorium at the back" vspace="5" hspace="8"></a><br>Second auditorium at the back</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/16.gif" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/16_small.gif" border="0" title="Kodimaram" vspace="5" hspace="8"></a><br>Kodimaram</td>
					<td align="center" valign="top"><a href="images/gallery/church_pics/17.gif" rel="lightbox[gallery]" ><img src="images/gallery/church_pics/17_small.gif" border="0" title="A view of the church in the night" vspace="5" hspace="8"></a><br>A view of the church in the night</td>
				</tr>				
				<?php											
				}else if($galType == "2"){					
				?>
				<tr>				  
				  <td align="center"><a href="images/gallery/sculptures/001.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/sculptures/001_small.jpg" ></a><br></td>				  
				  <td align="center"><a href="images/gallery/sculptures/002.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/sculptures/002_small.jpg" ></a><br></td>				  
				  <td align="center"><a href="images/gallery/sculptures/003.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/sculptures/003_small.jpg" ></a><br></td>			 
				</tr>				
				<tr>				  
				  <td align="center"><a href="images/gallery/sculptures/004.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/sculptures/004_small.jpg" ></a><br></td>				  
				  <td align="center"><a href="images/gallery/sculptures/005.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/sculptures/005_small.jpg" ></a><br></td>				  
				  <td align="center">&nbsp;</td>			 
				</tr>				
				<?php											
				}else if($galType == "3"){					
				?>
				<tr>				  
				  <td align="center"><a href="images/gallery/craftworks/001.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/001_small.jpg" ></a><br>Melkoottu</td>				  
				  <td align="center"><a href="images/gallery/craftworks/002.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/002_small.jpg" ></a><br>Melkoottu</td>				  
				  <td align="center"><a href="images/gallery/craftworks/015.gif" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/015_small.gif" ></a><br>Upper roof</td>					 
				</tr>
				<tr>				  
				  <td align="center"><a href="images/gallery/craftworks/004.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/004_small.jpg" ></a><br>Table inside the church</td>				  
				  <td align="center"><a href="images/gallery/craftworks/005.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/005_small.jpg" ></a><br>Side balcony</td>				  
				  <td align="center"><a href="images/gallery/craftworks/006.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/006_small.jpg" ></a><br>Side balcony</td>			 
				</tr>	
				<tr>				  
				  <td align="center"><a href="images/gallery/craftworks/007.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/007_small.jpg" ></a><br>Kalkurishu (Cross made of stone)</td>				  
				  <td align="center"><a href="images/gallery/craftworks/008.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/008_small.jpg" ></a><br>Kodimaram</td>				  
				  <td align="center"><a href="images/gallery/craftworks/009.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/009_small.jpg" ></a><br>Kalkurishu (Cross made of stone)</td>			 
				</tr>	
				<tr>				  
				  <td align="center"><a href="images/gallery/craftworks/010.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/010_small.jpg" ></a><br>Bed used by St. Gregorios of Parumala</td>				  
				  <td align="center"><a href="images/gallery/craftworks/011.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/011_small.jpg" ></a><br>Balcony roof</td>				  
				  <td align="center"><a href="images/gallery/craftworks/012.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/012_small.jpg" ></a><br>Brass Lamp</td>			 
				</tr>	
				<tr>				  
				  <td align="center"><a href="images/gallery/craftworks/013.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/013_small.jpg" ></a><br>Underside of the balcony floor</td>				  
				  <td align="center"><a href="images/gallery/craftworks/014.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/014_small.jpg" ></a><br>Craft work on the balcony roof</td>				  
				  <td align="center"><a href="images/gallery/craftworks/003.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/craftworks/003_small.jpg" ></a><br>Baptistery</td>				 	 
				</tr>
				<?php											
				}else if($galType == "4"){	?>				
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_1.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_1_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_2.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_2_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_3.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_3_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_4.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_4_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_5.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_5_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_6.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_6_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_7.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_7_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_8.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_8_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_9.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_9_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_10.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_10_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_11.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_11_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_12.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_12_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_13.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_13_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_14.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_14_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/per_15.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/per_15_small.jpg" vspace="5"></a></td>
					</tr>				
				<?php											
				}else if($galType == "5"){					
				?>
				<tr>	
				  <td align="center"><a href="images/gallery/archives/006.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/006_small.jpg" ></a><br>21-04-2005<br>Honouring the newly enthroned Metropolitans of Malankara sabha<br></td>
				  <td align="center"><a href="images/gallery/archives/001.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/001_small.jpg" ></a><br>08-09-1998<br>Foundation stone for the renovation work being laid by His Grace Geevarghese Mar Osthathios</td>  
				  <td align="center"><a href="images/gallery/archives/002.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/002_small.jpg" ></a><br>27-03-1998<br>His Grace Baselios Marthoma Mathews Second being honoured by our church</td>				 		 
				</tr>		
				<tr>
				  <td align="center"><a href="images/gallery/archives/003.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/003_small.jpg" ></a><br>27-03-1998<br>His Grace Baselios Marthoma Mathews Second being honoured in our church</td>
				  <td align="center"><a href="images/gallery/archives/004.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/004_small.jpg" ></a><br>04-10-1996<br>Principal Secretary Dr. D. Babu Paul's visit to the church</td>  
				  <td align="center"><a href="images/gallery/archives/005.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/archives/005_small.jpg" ></a><br>04-10-1992<br>Honorable Minister  T. M. Jacob's visit to the church</td> 
				  		 
				</tr>
				<?php											
				}else if($galType == "6"){					
				?>
				<tr>				  
				  <td align="center"><a href="images/gallery/kurishadi/chakombhagom.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/chakombhagom_small.jpg" ></a><br>Chakombhagom</td> 
				  <td align="center"><a href="images/gallery/kurishadi/ikerapadi.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/ikerapadi_small.jpg" ></a><br>Ikerapadi</td>	  
				  <td align="center"><a href="images/gallery/kurishadi/kallooppara.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/kallooppara_small.jpg" ></a><br>Kallooppara</td> 
				</tr>		
				<tr>				  
				  <td align="center"><a href="images/gallery/kurishadi/kavanal.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/kavanal_small.jpg" ></a><br>Kavanal</td>		  
				  <td align="center"><a href="images/gallery/kurishadi/madthumbhagom.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/madthumbhagom_small.jpg" ></a><br>Madathumbhagom</td>		  
				  <td align="center"><a href="images/gallery/kurishadi/yakshimannathu.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/yakshimannathu_small.jpg" ></a><br>Yakshimannathu</td>		 
				</tr>
				<tr>				  
				  <td align="center"><a href="images/gallery/kurishadi/kalloorkara.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/kurishadi/kalloorkara_small.jpg" ></a><br>Kalloorkara</td>		  
				  <td align="center">&nbsp;</td>		  
				  <td align="center">&nbsp;</td>		 
				</tr>
				<?php											
				}else if($galType == "7"){					
				?>
				<tr>				  
				  <td align="center"><a href="images/gallery/other_churches/001_big.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/other_churches/001.jpg" ></a><br>Niranam Church</td>		  
				  <td align="center"><a href="images/gallery/other_churches/002_big.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/other_churches/002.jpg" ></a><br>Parumala Old</td>		  
				  <td align="center"><a href="images/gallery/other_churches/003_big.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/other_churches/003.jpg" ></a><br>Parumala New</td>		 
				</tr>		
				<tr>				  
				  <td align="center"><a href="images/gallery/other_churches/004_big.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/other_churches/004.jpg" ></a><br>Edathua Church</td>		  
				  <td align="center"><a href="images/gallery/other_churches/005_big.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/other_churches/005.jpg" ></a><br>Palyekara church</td>		  
				  <td align="center">&nbsp;</td>		 
				</tr>	
				<?php											
				}else if($galType == "8"){					
				?>
				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_1.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_1_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_2.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_2_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_3.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_3_small.jpg" ></a></td>
				</tr>		
				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_4.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_4_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_5.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_5_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_6.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_6_small.jpg" ></a></td>
				</tr>
				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_7.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_7_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_8.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_8_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_9.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_9_small.jpg" ></a></td>
				</tr>

				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_10.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_10_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_11.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_11_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_12.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_12_small.jpg" ></a></td>
				</tr>		
				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_13.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_13_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_14.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_14_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_15.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_15_small.jpg" ></a></td>
				</tr>
				<tr>				  
				  <td align="center"><a href="images/gallery/good_friday/good_16.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_16_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_17.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_17_small.jpg" ></a></td>
				  <td align="center"><a href="images/gallery/good_friday/good_18.jpg" rel="lightbox[gallery]"><img border="0" src="images/gallery/good_friday/good_18_small.jpg" ></a></td>
				</tr>
				<?php											
				}else if($galType == "9"){					
				?>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/1.gif" rel="lightbox[gallery]" ><img src="images/gallery/consecration/1_small.gif" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/2.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/2_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/3.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/3_small.gif" border="0" hspace="8" vspace="5"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/4.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/4_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/5.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/5_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/6.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/6_small.gif" border="0" hspace="8" vspace="5"></a></td>						
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/7.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/7_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/8.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/8_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/9.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/9_small.gif" border="0" hspace="8" vspace="5"></a></td>						
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/10.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/10_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/11.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/11_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/12.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/12_small.gif" border="0" hspace="8" vspace="5"></a></td>						
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/13.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/13_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/14.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/14_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/15.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/15_small.gif" border="0" hspace="8" vspace="5"></a></td>						
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/16.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/16_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/17.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/17_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/18.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/18_small.gif" border="0" hspace="8" vspace="5"></a></td>						
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/consecration/19.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/19_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top"><a href="images/gallery/consecration/20.gif" rel="lightbox[gallery]"><img src="images/gallery/consecration/20_small.gif" border="0" hspace="8" vspace="5"></a></td>
					<td align="center" valign="top">&nbsp;</td>						
				</tr>
				<?php											
				}else if($galType == "10"){					
				?>
				<tr>								
					<td colspan="3"><p align="justify" style="line-height: 18px;">The Head of the Armanian Othodox church, His Holiness Aram I Catholicose and other delegates visited the church on Sunday the 28th of February 2010. All the picture of the visit are given below.<br><br></td>
				</tr>	
				<tr>								
					<td colspan="3"></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_1.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_1_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_2.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_2_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_3.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_3_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_4.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_4_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_5.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_5_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_6.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_6_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_7.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_7_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_8.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_8_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_9.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_9_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_10.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_10_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_11.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_11_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_12.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_12_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_13.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_13_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_14.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_14_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_15.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_15_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_16.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_16_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_17.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_17_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_18.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_18_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_19.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_19_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_20.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_20_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/visit/araam_21.jpg" rel="lightbox[gallery]" ><img src="images/gallery/visit/araam_21_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<?php											
				}else if($galType == "11"){					
				?>
				<tr>								
					<td colspan="3"><p align="justify" style="line-height: 18px;">The Orthodox vaccation bible classes where held from April 5th to 16th. Around 150 students attended the classes and pictures of the same are given below..<br><br></td>
				</tr>	
				<tr>								
					<td colspan="3"></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/1.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/1_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/2.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/2_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/3.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/3_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/4.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/4_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/5.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/5_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/6.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/6_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/7.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/7_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/8.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/8_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/9.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/9_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/10.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/10_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/11.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/11_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/12.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/12_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/13.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/13_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/14.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/14_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/15.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/15_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/16.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/16_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/17.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/17_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/18.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/18_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/ovbs/19.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/19_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/20.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/20_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/ovbs/21.jpg" rel="lightbox[gallery]" ><img src="images/gallery/ovbs/21_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<?php											
				}else if($galType == "12"){					
				?>				
				<tr>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/1.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/1_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/2.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/2_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/3.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/3_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/4.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/4_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/5.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/5_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/6.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/6_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<tr>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/7.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/7_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/8.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/8_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/9.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/9_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/10.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/10_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/11.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/11_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/12.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/12_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>	
				<tr>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/13.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/13_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/14.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/14_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/palm_sunday/15.jpg" rel="lightbox[gallery]" ><img src="images/gallery/palm_sunday/15_small.jpg" border="0" vspace="5" hspace="8"></a></td>					
				</tr>
				<?php											
				}else if($galType == "13"){					
				?>				
				<tr>
					<td align="center" valign="top"><a href="images/gallery/youth/youth_old.jpg" rel="lightbox[gallery]" ><img src="images/gallery/youth/youth_old_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top"><a href="images/gallery/youth/youth_new.jpg" rel="lightbox[gallery]" ><img src="images/gallery/youth/youth_new_small.jpg" border="0" vspace="5" hspace="8"></a></td>
					<td align="center" valign="top">&nbsp;</td>					
				</tr>
				<?php											
				}else if($galType == "14"){	?>				
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_1.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_1_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_2.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_2_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_3.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_3_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_4.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_4_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_5.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_5_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/perunal/2012/perunal_2012_6.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/perunal/2012/perunal_2012_6_small.jpg" vspace="5"></a></td>
					</tr>
				<?php											
				}else if($galType == "15"){	?>				
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_1.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_1_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%"><a href="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_2.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_2_small.jpg" vspace="5"></a></td>
						<td valign="top" width="33%"><a href="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_3.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_3_small.jpg" vspace="5"></a></td>
					</tr>
					<tr>								
						<td valign="top" width="33%"><a href="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_4.jpg" rel="lightbox[gallery]" title=""><img border="0" src="images/gallery/general/madath_kurishadi_reno_2012/kurishadi_madathum_4_small.jpg" vspace="5"></a></td>		
						<td valign="top" width="33%">&nbsp;</td>
						<td valign="top" width="33%">&nbsp;</td>
					</tr>	
				<?php											
				}				
				?>	
				<tr>								
					<td colspan="3">&nbsp;</td>
				</tr>
				<tr>								
					<td align="center" height="100%" colspan="3" valign="bottom"><a href="pgallery.php"><b>Back To Picture Gallery Main Page</b></a><br><br></td>
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