<?PHP 
//start the session 
session_start();  

//add slashes to the username and md5() the password 
$user = addslashes($_POST['nameTxt']); 
$pass = md5($_POST['passwordTxt']); 

//connet to the database 
include '../opendb.php';

$result = mysql_query("SELECT * FROM tab_users WHERE username='$user' AND password='$pass'"); 
 
//check that at least one row was returned
if($row = mysql_fetch_array($result)){

	//start the session and register a variable 		  
	session_register('user'); 
	$_SESSION['user_id']	= $row['user_pk_id'];
	$_SESSION['user']		= $row['username'];		
	
	?>
	<html>
	<script>
	function fun(){			
		document.frm.action = "mainPage.php";
		document.frm.submit();
	}
	</script>
	<body onLoad="fun()">
	<form name="frm" method="POST">
	</form></body></html>
	</body>
	</html>
	<?

}else{ // if user name or password is wrong

	?>		
	<html>
	<script>
	function fun(){			
		alert("Incorrect login name or password. Please try again !!");			
		document.frm.action = "index.php";
		document.frm.submit();
	}
	</script>
	<body onLoad="fun()">
	<form name="frm" method="POST">
	</form></body></html>
	</body>
	</html>
	<?
} 
mysql_close($con);
?>