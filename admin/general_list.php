<?php

//start the session 
session_start(); 

//check to make sure the session variable is registered 
if(! session_is_registered('user')){ 
	//the session variable isn't registered, send them back to the login page 
	header( "Location: index.php" );
}

// Include MySQL db connection
include 'opendb.php';

// to store the purpose 
$fun= $_REQUEST["fun"];
if($fun == null) $fun = "";

// to store the search string
$searchStr= $_POST["txtSearch"];
if($searchStr == null) $searchStr = "";

$caption	= "";	
$count		= 0;

$sqlCnt   = "";
$sql	  = "";
$sqlAdd   = "";	
$sqlOrder = "";

if($fun == "news")
{		
	$sqlCnt	= "SELECT count(*) cnt FROM tab_news WHERE news_pk_id <> 0 ";										
	$sql	= "SELECT news_pk_id, news_date, title FROM tab_news WHERE news_pk_id <> 0 ";		

	if($searchStr !=null && $searchStr !="")
	{
		$sqlAdd = " AND UPPER(title) LIKE '%".strtoupper($searchStr)."%'";
	}		
	$sqlOrder = " ORDER BY news_date ";
}
else if($fun == "gallery")
{		
	$sqlCnt	= "SELECT count(*) cnt FROM tab_gallery WHERE gallery_pk_id <> 0 ";										
	$sql	= "SELECT gallery_pk_id, title FROM tab_gallery WHERE gallery_pk_id <> 0 ";		

	if($searchStr !=null && $searchStr !="")
	{
		$sqlAdd = " AND UPPER(title) LIKE '%".strtoupper($searchStr)."%'";
	}		
}

///////////////////////// PREVIOUS NEXT /////////////////////////////////
$currentPage	= 0;		// Current List page
$totalPages		= 0;		// Total pages
$totRSCount		= 0;		// Total ResultSet Count
$noOfRecords	= 15;		// Total Number of records to show each page + 1
$nessuna		= "";		// Result querry value nill
$seletedPage	= "";		// Page number selected by the user
$sqlRownum		= "";		// For concatinating SQL rownum LIMIT
	
$selectedPage = $_POST["selectedPage"];
if ($selectedPage==null || $selectedPage=="") $currentPage = 1;
else $currentPage = $selectedPage;

$off = ($currentPage * $noOfRecords) - $noOfRecords;
$sqlRownum = " LIMIT ".$noOfRecords. " OFFSET ". $off." ";

$rsList = mysql_query($sql.$sqlAdd.$sqlOrder.$sqlRownum);
$rsCnt	= mysql_query($sqlCnt.$sqlAdd);	

if($row = mysql_fetch_array($rsCnt)) 
	$totRSCount = $row['cnt'];
	
$totalPages = ceil($totRSCount/$noOfRecords);	

////////////////////// END OF PREVIOUS NEXT //////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Mundupalathinkal Family Website</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
//-------------------------------PREVIOUS NEXT --------------------------
var eof = <?php echo $totalPages; ?>;

// to to a particular page(using page number)
function goEnter()
{
		var move = document.frmList.pageCount.value;
		if(move>eof) 			
			document.frmList.selectedPage.value = eof;
		else
			document.frmList.selectedPage.value = move;

		document.frmList.action="general_list.php?fun=<?php echo $fun; ?>";
		document.frmList.method="post";
		document.frmList.submit();
}

// function to call on pressing enter key on serach text
function onEnter()
{
   if(event.keyCode==13){
		searchMe();
	}
}

// function to search list
function searchMe()
{
	document.frmList.action="general_list.php?fun=<?php echo $fun; ?>";
	document.frmList.method="post";
	document.frmList.submit();
}

function loadDetails(id)
{
	<?php if($fun == "news"){?>
		window.opener.document.frm.newsTxt.value = id;		
	<?php }else if ($fun == "gallery"){?>
		window.opener.document.frm.galleryTxt.value = id;		
	<?php }else{?>
		window.opener.document.frm.idTxt.value = id;		
	<?php } ?>
	window.opener.document.frm.submit();
	window.close();
}

</script>
</head>
<body>
<form name="frmList" method="post" action="">
<table width="580" border="0" cellspacing="0" cellpadding="1" style="border:1px solid #62D6F5">		
	<tr>
		<td colspan="3" height="30">&nbsp;</td>
	</tr>
	<tr>
		<td style="border:1px solid #62D6F5">&nbsp;</td>
		<td style="border:1px solid #62D6F5"><b>Search</b>&nbsp;<input type="text" name="txtSearch" value="<?php echo $searchStr; ?>" size="20" onKeyPress="onEnter()">&nbsp;<input type="button" name="search" value="Search" onClick="javascript:searchMe()"></td>
		<td style="border:1px solid #62D6F5"><b>page.
		  <select name="pageCount" onChange="goEnter()">
					  <?php 
					  for ($i=1; $i <= $totalPages; $i++){ 							  
						 if($currentPage==$i){
					  ?>					  
							<option value="<?php echo $i ?>" selected><?php echo $i ?></option>   
					   <?php
						 }else{?>
							<option value="<?php echo $i ?>"><?php echo $i ?></option>
					  <?php
						}
					  }?>
		  </select></b></td>		
	</tr>
</table>
<table width="580" border="0" cellspacing="0" cellpadding="1" style="border:1px solid #62D6F5">	
	<?php	
	if($fun == "news")
	{?>
		<tr>
			<td width="25" style="border:1px solid #62D6F5">&nbsp;</td>		
			<td width="225" style="border:1px solid #62D6F5"><b>News Date</b></td>
			<td width="330" style="border:1px solid #62D6F5"><b>News Title</b></td>
		</tr>
	<?php	
		while($row = mysql_fetch_array($rsList)) 
		{	
	?>	
			<tr>
				<td style="border:1px solid #62D6F5"><input type="radio" name="radio" value="" onClick="javascript:loadDetails('<?php echo $row['news_pk_id']; ?>')"></td>
				<td style="border:1px solid #62D6F5"><?php echo $row['news_date']?></td>
				<td style="border:1px solid #62D6F5"><?php echo $row['title']?></td>
			</tr>
	<?php
		}
	}
	else if ($fun == "gallery")
	{?>
		<tr>
			<td width="25" style="border:1px solid #62D6F5">&nbsp;</td>					
			<td width="555" style="border:1px solid #62D6F5"><b>News Title</b></td>
		</tr>
	<?php
		while($row = mysql_fetch_array($rsList)) 
		{
	?>
			<tr>
				<td style="border:1px solid #62D6F5"><input type="radio" name="radio" value="" onClick="javascript:loadDetails('<?php echo $row['gallery_pk_id']; ?>')"></td>				
				<td style="border:1px solid #62D6F5"><?php echo $row['title']?></td>
			</tr>
	<?php
		}
	}
	?>
	<input type="hidden" name="selectedPage" value="<?php echo $selectedPage; ?>">
</table>
</form>
</body>
</html>
<? 
mysql_close($con);
?>