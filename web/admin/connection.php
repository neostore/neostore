<?php

	$host = "192.168.0.113";//"192.168.0.113";
	$user = "itfox";
	$pass = "ItFox2015";
	$db = "itfox";
	
	$connection = mysql_connect($host, $user, $pass);
	if (!$connection) {
    	die('Não foi possível conectar: ' . mysql_error());
	}
	$db_selected = mysql_select_db($db,$connection);
	if (!$db_selected) {
    	die ('Can\'t use itfox : ' . mysql_error());
	}else{
		//echo "using itfox";
	}

?>