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
$limit = 10;	
$start = $pageNo * $limit;

/////////////// find the total records and use it to apply paging ///////
$query =" SELECT * from tab_guestbook";
$result = mysql_query($query);	

//////// total number of records
$totalRecords = mysql_num_rows($result);
$noOfPages = ceil($totalRecords / $limit);

/////// query with the paging aspplied
$result = mysql_query("SELECT entry_date, name, email, url, country, comments FROM tab_guestbook ORDER BY entry_date DESC limit $start, $limit ");

?>
<html>
<head>
<title>Welcome to Church guestbook</title>
</head>
<body bgcolor="#F1F6FC" link="red" vlink="yellow" alink="red" topmargin="0" marginheight="0">
<center>
<font SIZE="6" FACE="Times New Roman" COLOR="#334B57"><B>Welcome to Church guestbook</B></font><BR>
<font SIZE="2" FACE="verdana" color="#334B57">(:: <B><A HREF="index.php"><font color="#334B57">Home</font></A></B> ::)</FONT><P>
<table width="550" cellpadding=0 cellspacing=1 border=0>
	<TR bgcolor='#334B57'>
		<TD>
			<TABLE width="100%" cellpadding=4 cellspacing=1 border=0>
				<TR>
					<TD bgcolor='#334B57' colspan="2"><FONT SIZE="2" FACE="verdana" COLOR="#ffffff"><B>Click <A HREF="guestBookEntry.php">here</A> to sign the guestbook</FONT></B></TD><TD bgcolor='#334B57' align='center'><A HREF="mailto:info@kalloopparachurch.com"><IMG SRC="images/webmaster.gif" BORDER=0 ALT="Contact Us" align="center"></A>
					</TD>
				</TR>
				<?
				if($totalRecords > 0){ // if record exists
				
					$no = 0;					
					while($row = mysql_fetch_array($result))
					{				
						$no++;						
						
						echo "<TR><TD bgcolor='#FFFFFF' align='right' valign='top'><FONT SIZE=1 COLOR='#334B57' FACE='verdana'>".$no."</FONT></TD><TD bgcolor='#FFFFFF' width='535'><FONT FACE='VERDANA' COLOR='#334B57' SIZE='2'><FONT SIZE='1'><B>".$row['entry_date']."</B></FONT><BR><B>".$row['name']."</B> from ".$row['country']."<BR><FONT SIZE=1><A HREF='mailto:".$row['email']."'>".$row['email']."</A>";
						
						if (trim($row['url'])<>"" and trim($row['url'])<>"http://"){
							echo "- <A HREF='".$row['url']."' TARGET='_blank'>Visit my homepage</A>";
						}
										
						echo "</FONT></FONT><P><FONT SIZE='2' COLOR='#334B57' FACE='arial'>".$row['comments']."</FONT></TD><TD valign='top' bgcolor='#FFFFFF' align='center' width='15'>&nbsp;</TD></TR>";
					}				
					
					if($noOfPages >1){  // if there are more than one page		
					
							echo "<TR><TD colspan='3' bgcolor='#334B57' align='center'><FONT SIZE='1' FACE='verdana'>[<A HREF='guestBook.php?pageNo=1'>First Page</A>] Page #";
							
							for ($i=1; $i<=$noOfPages; $i++){								
								$page_temp	= $i - 1;
								if($pageNo == $page_temp){
									echo "<FONT color='red'><B>".$i."</B></FONT>&nbsp;&nbsp;";
								}else{
									echo "<a href='guestBook.php?pageNo=".$i."' >".$i."</a>&nbsp;&nbsp;";
								}
							} 				
							
							echo "[<A HREF='guestBook.php?pageNo=".$noOfPages."'>Last Page</A>]</FONT></TD></TR>";					
					}

				}else{ /// no record exists
					echo "<TR><TD colspan=3 bgcolor='#FFFFFF' align='center'><FONT SIZE='3' FACE='verdana'>There is no entry yet.</FONT></TD></TR>";
				}?>			
			</TABLE>        
		</TD>
	</TR>
</TABLE>
</CENTER>
</BODY>
</HTML>