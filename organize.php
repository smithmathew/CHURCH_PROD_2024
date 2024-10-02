<?php					
	$orgType= $_REQUEST['orgType']==null?"sschool":$_REQUEST['orgType'];	
	
	if($orgType == "sschool"){ 
		$orgName = "SUNDAY SCHOOL";
	}else if($orgType == "youth"){ 
		$orgName = "YOUTH LEAGUE";
	}else if($orgType == "mgocsm"){
		$orgName = "M.G.O.C.S.M";
	}else if($orgType == "martham"){
		$orgName = "MARTHA MARIYAM SAMAJAM";
	}else if($orgType == "prayer"){ 
		$orgName = "PRAYER GROUPS";
	}else if($orgType == "ovbs"){
		$orgName = "O.V.B.S";
	}
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
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<SCRIPT LANGUAGE="JavaScript">

function gotoGallery()
{
	document.frm.action="organize.php";
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
					<td class="td_blue_heading">ORGANIZATIONS</td>	
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
					<td >There are a lot of spiritual organizations working under the church aimed at the social and spiritual well being of the community. They are the <ul><li>Sunday schools</li><li>Youth leagues</li><li>MGOCSM</li> <li>Martha mariyam samaajams</li> <li>Prayer groups</li><li>OVBS</li></UL></b>To view the details of each organization, its members, governing body and activities, please select the organization from the selection box to the right.</td>			
				</tr>				
				<tr>
					<td>
						<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="5">
							<tr>															
								<td class="td_blue_heading"><?php echo $orgName; ?></td>							
								<td align="right" class="td_blue_heading"><select name="orgType" onChange="javascript:gotoGallery()">
									<option value="" >--- Select Organization ---</option>
									<option value="sschool" >Sunday Schools</option>
									<option value="youth" >Youth League</option>
									<option value="mgocsm" >M.G.O.C.S.M</option>
									<option value="martham" >Martha Mariyam Samajam</option>
									<option value="prayer" >Prayer Groups</option>
									<option value="ovbs" >O.V.B.S</option>									
									</select></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td valign="top"><p align="justify">
					<?php if($orgType == "sschool"){ ?>
						Sunday schools have been the most important of all the spiritual organizations of the church. Our church has a unit of Sunday school from the day this organization was started by Malankara Syrian Orthodox Church.<br><br>There have been many people who has done outstanding contributions for the growth of Sunday schools in the church. <b>M. C. Chacko Malieckal, V. T Idukula Valloorikkal, K. E. Geevarghese Kadavupadikal</b> has been associated with the Sunday schools for around 60 years. For their meritorious services they have been presented awards by the Catholicose of the East.<br><br>Currently there are four Sunday schools working effectively under the church.<br><br>
					<?php }else if($orgType == "youth"){ ?>
						Youth leagues have always been the most active organization in the church. The Youth league has always shown a lot of commitment towards the society, a lot of charity services and material helps has been extended to both the church members and the community as a whole.<br><br> Youth leagues have also got a major part in bringing up the extra curricular qualities in the youth. Also various steps has been taken to promote budding talents in the areas of singing, painting, drawing, speech etc. <br><br>Mainly there are three youth leagues working under the church.<br><br>
					<?php }else if($orgType == "mgocsm"){ ?>
						A unit of M.G.O.C.S.M is also working under our church. Seminars and other study classes are being conducted to give proper guidance to the youth. <BR><BR><b> Dr. K. E. Abraham </b>is serving as the diocese secretary of M.G.O.C.S.M.<br><br>
					<?php }else if($orgType == "martham"){ ?>
						Martha Mariam Samajams has been functioning in the church for the past 80 years. In the beginning there were many units functioning in different parts of the parish. Then during the period 1996 to 1997 all those units were unified and three groups were formed. They are <B>Kallooppara, Ikerapadi and Madathumbhagom</B> groups. Their main focus is on bible study and charity works. Every Saturday the members of all the units will join in the church.<br><br>
					<?php }else if($orgType == "prayer"){ ?>
						There is no evidence as to when the prayer groups of the church has been formed. But it is firmly believed that the prayer groups existed from the start of the 20th century. To make the functioning of the prayer groups more efficient, the prayer groups were divided according to their wards. Currently there are <B>14 prayer groups</B> effectively functioning under the church and their main aim is to organize and lead the spiritual activities of the church and to ensure the unity and harmony among the families belonging to church.<br><br> The 14 prayer groups of the church are <br>
					<?php }else if($orgType == "ovbs"){ ?>
						The foundation for O.V.B.S in the church was laid by the then seminary student <B>Rev. Fr. K. V. Thomas</B> Kochuparackal, by arranging bible classes during the mid summer vacation in 1972. First classes were conducted for students residing near to the church. Then in 1975 the classes were conducted in M.G.D. High School, Puthussery named as the <B>Kallooppara unit</B>. For the first three years classes were conducted only for a week and book published by C.S.S were used for the classes. Then in later years the duration was extended to 10 days. Kallooppara, Kadamankulam, Changaroor, Vallamal, Madathumbhagom churches participated in the classes. As the number of students increased it became impossible to conduct classes in a single unit. So in 1983 two units were formed, one at our church and the other at St George Orthodox Church, Chengaroor.<br><br>Today around 300 students are participating in Kallooppara unit. The ever increasing number of students attending O.V.B.S in the church is an example of the dedication shown by the church members towards O.V.B.S.<br><br>
					<?php } ?></p>
					</td>
				</tr>
				<tr>								
					<td align="center">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">									
						<?php if($orgType == "sschool"){ ?>	
							<tr>								
								<td colspan="3"><b>M. G. M SUNDAY SCHOOL, KALLOOPPARA</b></td>					
							</tr>
							<tr>								
								<td colspan="3" class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td colspan="3"><p align="justify">This is the main Sunday school of the church and its functions in the church itself. It is named after His Holiness Geevarghese Mar Gregorious of Parumala.  Around 300 students are studying in this Sunday school. Students of this Sunday school have always done well in competitive exams and other co-curricular activities. <B>His Grace Jacob Mar Iraneus, Rev. Fr. P. Thomas, Rev. Fr. K. V. Thomas, Rev. Fr. P. K. Geevarghese, Rev. Fr. K. Y. Wilson and  Rev. Fr. James Kuttikandathil</B> were former students of this Sunday school.</p></td>
							</tr>
							<tr>
								<td colspan="3" class="td_space_top_box"></td>
							</tr>
							<tr>
								<td align="center"><img src="images/organizations/sosamma_thomas_small.jpg" border="0"><br>H.M - Mrs. Sosamma Thomas<br><br></td>
								<td align="center"><a href="images/organizations/s_teachers_big.jpg" rel="lightbox[org]" title="Sunday school teachers"><img src="images/organizations/s_teachers_small.jpg" border="0"></a><br>Teachers</td>
								<td align="center"><a href="images/organizations/s_students_big.jpg" rel="lightbox[org]" title="Sunday school students"><img src="images/organizations/s_students_small.jpg" border="0"></a><br>Students</td>
							</tr>	
							<tr>
								<td colspan="3" class="td_space_top_box"></td>
							</tr>
							<tr>								
								<td colspan="3"><b>KAVANAL SUNDAY SCHOOL</b></td>					
							</tr>
							<tr>								
								<td colspan="3" class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td colspan="3"><p align="justify">This is the second Sunday school of the church formed in the year 1939. The children from Kavanal, Puramattom and Madathumbhagom are attending classes here<br><br>Head Master - Mr. K. E. Geevarughese, Kadavupadikkal.</p></td>
							</tr>							
							<tr>
								<td colspan="3" class="td_space_top_box"></td>
							</tr>
							<tr>								
								<td colspan="3"><b>M. G. M SUNDAY SCHOOL, MADATHUMBHAGOM</b></td>					
							</tr>
							<tr>								
								<td colspan="3" class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td colspan="3"><p align="justify">This is the third sunday school of the church and was formed in the year 1955 in memory of His Holiness Geevarghese Mar Gregorious of Parumala.  <B>Rev. Fr. Geevarghese Panicker</B> was the one who lead the Sunday school in its early days. In early days the Sunday school was conducted in a temporary shed and in 1978 acquired a permanent building. Then in 1999 with the able leadership of <B>Rev. Fr. C. K. Kurien</B> and <B>Mr. K. C. Chacko, Kottapalathunkal</B> a new building has been constructed for the Sunday school. Currently there are around 12 teachers and 60 students in this Sunday school<br><br>Head Master- Mr. M. C. Chacko, Maliyekkamalayil.</p></td>
							</tr>							
							<tr>
								<td colspan="3" class="td_space_top_box"></td>
							</tr>
							<tr>								
								<td colspan="3"><b>ST. GREGORIOUS SUNDAY SCHOOL, IKERAPPADI</b></td>					
							</tr>
							<tr>								
								<td colspan="3" class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td colspan="3"><p align="justify">This is the fourth sunday school of the church and was formed in the year 1991. The sunday school is conducted in the building donated to the church by <B>Mr. C. M. Alexander, Choorakuzhiyil</B>. The foundation stone for the Sunday school building was laid on <B>21st March 1990</B> by <B>His Grace Dr. Geevarghese Mar Osthathios</B> and the building was inaugurated on 10th March 1991 by Rev. Fr. M. C. Jacob, Munduplackamannil and Rev. Fr. P. Thomas, Plakottu. The students from Puthussery, Ikerapadi, Madathumbhagom, Muttathukonam are attending classes here. From 1998 a library for the students has also been opened. <br><br>Head Master - Mr. Mathew Alex, Choorakuzhiyil.</p></td>
							</tr>													
							<tr>
								<td colspan="3" class="td_space_top_box"></td>
							</tr>
							
						<?php }else if($orgType == "youth"){ ?>
							<tr>								
								<td><b>ST. THOMAS YOUTH MOVEMENT, KALLOOPPARA</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify"><a href="images/organizations/youth_big.jpg" rel="lightbox[org]"><img src="images/organizations/youth_medium.jpg" border="0" hspace="8" vspace="5" title="Youth League members for the year 2008"></a><br>This is the oldest and the parent unit of all the youth movements in the church. This unit is around 70 years old and was in existence even before the Youth Movements were officially started in Malankar Sabha. It has always given prime importance to the spiritual and social upliftment of the society.<br><br>Chandy Thomas Kottackal, Ummachan Kondoor, M. C. Mathai Mundupalathinkal, Geeevarchen Edayanattu, Kunjootti Meprathu, Paappan Padinjaremuriyil etc were the people who started this unit in 1930. The then vicar Rev. Fr. Bahanan (Thalavady) and assistant vicar Rev. Fr. Skarai Madathil (Niranam) gave all the support and blessings needed for the organization.<br><br>Many members of this youth league has occupied various posts in Malankara Sabha. A. T. Thomas Azhakanaparayil, K. C. Thomaskutty Kavanakuzhiyil, K. E. Abraham Kuttisseril etc. has been the diocese secretaries of the youth league. Rev. Fr. K. Y. Wilson has served as the central general secretary. The president of the youth movements His Grace Jacob Mar Iraneus also belonged to this youth league.<BR><BR>						
								Every year on Christmas eve the youth leagues conducts dramas based on a biblical topic or a topic of social importance. The youth league also has got a coir service which can be hired for marriage functions.<BR><BR><img src="images/organizations/youth_mathulla_small.jpg" border="0" title="Mr. Mathulla Chacko">&nbsp;<B>Mr. Mathulla Chacko,</B> Kuntharayil, an active member of the youth league is currently the Regional Secretary of the Youth movements of Niranam diocese.<BR><BR>President - Rev. Fr. Cherian. P. Varghese<BR>Vice President - Siju Skaria Mathew<br>Secretary - Sijo P. John<BR>Join Secretary - Smith Mathew<br>Treasurer - Anoop Varghese<br>Auditor - Shinto Chandy<br><br></p></td>
							</tr>
							<tr>
								<td class="td_space_top_box"></td>
							</tr>	
							<tr>								
								<td><b>ST. GREGORIOS YOUTH MOVEMENT, AIKKARAPADI</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify">This is the second unit of youth movement in the church. Worship, study and service are its main motto. This youth league was formed in 1970 and members from Ikerapadi, Puthusserry, Muttathukonam, Madathumbhagom etc attended the meetings. Every Saturday at 7 PM the meetings are held at the house of one of the members of the movement.<br><br>This youth league has organized a fund for helping the economically backward. The fund was inaugurated by His Grace Geevarghese Mar Osthathios on 28th February 1999. The honorable M.L.A of Kallooppara, Mr. Joseph M Puthussery was a member of this youth league.<br><br>Secretary - Deepu Aikkara</p></td>
							</tr>		
							<tr>
								<td class="td_space_top_box"></td>
							</tr>			
							<tr>								
								<td><b>ST. MARY'S YOUTH MOVEMENT, PURAMATTOM</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify">This is the third unit of youth movements in the church started in the year 1983. Every Saturday the meetings are held in the Sunday school building at Madathumbhagom. Helping the poor, organizing charity activities, guiding the youth etc are its main objectives<br><br>Secretary - Suni Philip<br></p></td>
							</tr>											
							<tr>
								<td class="td_space_top_box"></td>
							</tr>	
						<?php }else if($orgType == "mgocsm"){ ?>
							<tr>
								<td ><p align="justify"></p>
								</td>
							</tr>
						<?php }else if($orgType == "martham"){ ?>
							<tr>								
								<td><b>MARTHA MARIAM SAMAJAM, KALLOOPPARA</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify">This unit was started in 1920 and is the oldest of the Samajam's in the church. The members of the Samajam will get together every Saturday at 2.30 pm on any of the member's house.<br><br><img src="images/organizations/martha_ammini_small.jpg" border="0" title="Mrs. Ammini Alex">&nbsp;<b>Mrs. Ammini Alex,</b> Kochuparackal of this Samajam is serving as the District Secretary.<br><br>In the competitive examination conducted in Niranam diocese, in the super senior division  <b>Mrs. Mariamma Cherian,</b> Azhakanaparayil, and in senior division <b>Mrs. Omana Mathai,</b> Rinu bhavan, has won the first prize.</p></td>
							</tr>							
							<tr>
								<td class="td_space_top_box"></td>
							</tr>	
							<tr>								
								<td><b>MARTHA MARIAM SAMAJAM, IKERAPADY</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify">This unit was started in 1990 and the meetings are held on every wednesday at 10 am on any one of the member's house.</p></td>
							</tr>
							<tr>								
								<td><b>MARTHA MARIAM SAMAJAM, MADATHUMBHAGOM</b></td>					
							</tr>
							<tr>								
								<td class="td_blue_line"></td>					
							</tr>
							<tr>											
								<td><p align="justify">This unit was started in 1969 and the meetings are held on every wednesday at 10 am on any of the member's house.</p></td>
							</tr>	
							<tr>
								<td class="td_space_top_box"></td>
							</tr>							
						<?php }else if($orgType == "prayer"){ ?>
							<tr>
								<td><p align="justify"><ul><li>Kalloorkara Prayer Group</li><li>St Mary's Paryer Group, Chakombhagom West</li><li>M. G. M Prayer Group, Chakombhagom South</li><li>St. Gregorious Prayer Group, Azhakanappara</li><li>St. Basil Prayer Group, Market Junction</li><li>St Mary's Prayer Group, Chakombhagom East</li><li>St. George Prayer Group, Yakshimannathu</li><li>St. Gregorious Prayer Group, Vallonthara,</li><li>St Mary's Prayer Group, Ikerapady</li><li>Kavanal Prayer Group</li><li>St Mary's Prayer Group, Madathumbhagom South</li><li> Kadamankulam Prayer Group</li><li> Madathumbhagom North Prayer Group</li><li>M. G. M Prayer Group, Madathumbhagom Thekkekara</li></ul><b>Mr. Mathew Alex,</b> Choorakuzhiyil, is the General Secretary of the prayer groups.</p></td>
							</tr>
						<?php }else if($orgType == "ovbs"){ ?>
							<tr>
								<td><p align="justify"></p><td>
							</tr>
						<?php } ?>	
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



