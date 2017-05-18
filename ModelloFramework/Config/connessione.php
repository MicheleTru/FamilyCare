<?php
	$link = mysql_connect('scuola.itisurbino.it:1080', '5a_giommil', 'giommil');
	if (!$link){
		die ('Impossibile connettersi: ' . mysql_error());		
	}
	$db_selected = mysql_select_db('5a_giommil', $link);
	if (!$db_selected){
		die ('Impossibile connettersi al database: ' . mysql_error());
	}
?>
