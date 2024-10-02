<?php

///////////// for data base connection////////////////////////////
$con = mysql_connect ("localhost", "kalloopp_church", "kalloopp890") or die ('Cannot connect to the database because : ' . mysql_error());
mysql_select_db ("kalloopp_churchDb");

?>