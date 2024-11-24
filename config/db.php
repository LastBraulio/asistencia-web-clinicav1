<?php
	
	$mysqli  =  mysqli_connect("localhost", "root", "", "control_adulto");
    //$mysqli  =  mysqli_connect("127.0.0.1", "pma", "1234", "control_adulto");
	if (!$mysqli ) {
	    die('No pudo conectarse: ' . mysql_error());
	}
?>