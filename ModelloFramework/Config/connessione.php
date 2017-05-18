<?php
	$link = mysql_connect('ubuntu@52.42.119.168', 'root', 'root');
	if (!$link){
		die ('Impossibile connettersi: ' . mysql_error());		
	}
	$db_selected = mysql_select_db('root', $link);
	if (!$db_selected){
		die ('Impossibile connettersi al database: ' . mysql_error());
	}
?>
