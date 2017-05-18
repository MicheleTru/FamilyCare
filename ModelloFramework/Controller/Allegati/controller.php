<?php

	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'list';
	}
	
	switch ($action){
		case 'new':
			$allegato = new Allegato();
			$content = get_include_contents("../Controller/Allegati/Templates/form.php");
			break;
		
	}
