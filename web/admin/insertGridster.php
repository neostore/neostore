<?php
	require("connection.php");
	
	$serialize = $_REQUEST["serialize"];
	$sql = "update gridster set serialize='$serialize' where gridster_id=1";
	$query = mysql_query($sql) or die (mysql_error());
	if($query){
		echo"Fly Salva!";
	}
	

	
?>