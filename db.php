<?php


	$mysql_host="localhost";
	$mysql_user="root";
	$mysql_password="";

	$mysql_db="pos_system";
	
	if(!mysql_connect($mysql_host,$mysql_user,$mysql_password) || !mysql_select_db($mysql_db)){
			die(mysql_errno());
		
	}else{
		
		
		
	}

?>