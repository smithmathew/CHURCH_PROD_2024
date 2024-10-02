<SCRIPT LANGUAGE="JavaScript">	
	function expandMenu(menuId){

		for(i=1; i<=2; i++){

			if(menuId == i){
				document.getElementById(i).style.display = "block";
			}else{
				document.getElementById(i).style.display = "none";
			}
		}

	}
</SCRIPT>
<table width="100%" height="" border="0" cellspacing="0" cellpadding="0" >	
	<tr>
		<td class="td_menu"><img src="../images/menu_icon.jpg" border="0" align="left"><a class="a_menu" href="gbody.php">Members</a></td>
	</tr>
	<tr>
		<td class="td_menu">
			<img src="../images/menu_icon.jpg" border="0" align="left"><a class="a_menu" href="javascript:expandMenu(1)">News</a>
			<table width="100%" border="0" cellspacing="4" cellpadding="0" id="1" style="display:none;">	
				<tr>
					<td width="6">&nbsp;</td>
					<td><a class="a_menu" href="#">Add</a></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a class="a_menu" href="#">List</a></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="td_menu">
			<img src="../images/menu_icon.jpg" border="0" align="left"><a class="a_menu" href="javascript:expandMenu(2)">Gallery</a>
			<table width="100%" border="0" cellspacing="4" cellpadding="0" id="2" style="display:none;">	
				<tr>
					<td width="6">&nbsp;</td>
					<td><a class="a_menu" href="#">Add</a></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a class="a_menu" href="#">List</a></td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr>
		<td class="td_menu"><img src="../images/menu_icon.jpg" border="0" align="left"><a class="a_menu" href="logout.php">Log Out</a></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>