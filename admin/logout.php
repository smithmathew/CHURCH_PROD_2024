<?php 
//start the session 
session_start(); 

//check to make sure the session variable is registered 
if(session_is_registered('user')){ 
	//session variable is registered, the user is ready to logout 
	session_unset(); 
	session_destroy(); 	
} 
?>
<html>
<script>
function fun()
{
	document.frm.action = "index.php";
	document.frm.submit();
}

</script>
<body onLoad="fun()">
<form name="frm" method="POST">
</form></body></html>