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
    <style>
      #map_canvas {
        width: 550px;
        height: 450px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
		function initialize() {
			var mapCanvas = document.getElementById('map_canvas');
			var myLatlng = new google.maps.LatLng(9.39590, 76.63615);
			var mapOptions = {
				center: myLatlng ,
				zoom: 12,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(mapCanvas, mapOptions);
			
			var contentString = '<table width="270" bgcolor="#CEE2F9"><tr><td style="padding-top:5px;"><img src="http://www.kalloopparachurch.com/images/church_pics/1_small.gif" border="0" hspace="5"/>&nbsp;&nbsp;<img src="http://www.kalloopparachurch.com/images/church_pics/0_small.gif" border="0" /></td></tr><tr><td style="padding:5px;"><font face="verdana" size="2">St. Mary\'s Orthodox Church,<BR> Kallooppara P.O, Thiruvalla,<BR> Pathanamthitta District,<BR> Kerala, India. <BR>Ph. +91 469 2677211, <BR>Email : <a href="mailto:info@kalloopparachurch.com">info@kalloopparachurch.com</a><br>Website: <a target="_blank" href="http://www.kalloopparapally.com/">www.kalloopparapally.com</a></font></td></tr></table>';
			
			var infowindow = new google.maps.InfoWindow({
				  content: contentString
			});	
			
			var marker = new google.maps.Marker({
				  position: myLatlng,
				  map: map,
				  title: 'St. Mary\'s Orthodox Church, Kallooppara'
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});	
			
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</head>
	<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
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
					<td class="td_blue_heading">ROUTE MAP</td>					
				</tr>
			</table></td>
		</td>
		<td valign="top" class="td_space_top">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" class="td_blue_left" ><br><?php include("menu.php"); ?></td>
		<td class="td_box" style="padding:10px;">
			<div id="map_canvas"></div>
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
	</center>
	</body>
</html>