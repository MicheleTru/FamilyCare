<?php
	$link = mysql_connect('localhost', 'phpmyadmin', 'root');
	if (!$link){
		die ('Impossibile connettersi: ' . mysql_error());		
	}
	$db_selected = mysql_select_db('phpmyadmin', $link);
	if (!$db_selected){
		die ('Impossibile connettersi al database: ' . mysql_error());
	}
?>
