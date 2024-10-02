<?php
header("Location: https://kalloopparapally.com/");
exit();
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td class="td_footer" align="center">| <a href="copyright.php" class="a_foot_menu">Copyright & Disclaimer</a>&nbsp;&nbsp; | <br> � 2003 St. Mary's Orthodox Church, Kallooppara - All right reserved.<?php 
if($parentPage == "index"){

	$sqlCount = "SELECT user_count FROM tab_user_count";						
	$resultCount = mysql_query($sqlCount);			
	while($rowCount = mysql_fetch_array($resultCount)){				
		$count = $rowCount['user_count'];
		$count = $count + 1;
		echo "<br> You are visitor number : <b>".$count."</b>";
	}	
	
	$sql = "UPDATE tab_user_count SET user_count = $count";	
	$result = mysql_query($sql);
	
}
?></td></table>
