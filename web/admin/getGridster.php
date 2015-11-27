<?php
	header('Content-Type: application/json');
	require("connection.php");
	
	$gridsterId = 1;
	$sql = "select * from gridster where gridster_id='$gridsterId'";
	$query = mysql_query($sql) or die (mysql_error());
	
	while($result = mysql_fetch_array($query)){
		echo nl2br($result["serialize"]);
		//echo json_encode($result["serialize"]);
	}
	

	
?>