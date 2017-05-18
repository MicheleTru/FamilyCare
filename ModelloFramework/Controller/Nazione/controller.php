<?php
	
	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'list';
	}
	
	switch($action){
		case 'new':
			$nazione=new Nazione();
			$content = get_include_contents("../Controller/Nazione/Templates/form.php");
			break;
			
		case 'create':
			$nazione=new Nazione();
			$nazione->setSigla($_POST['sigla']);
			$nazione->setDescrizione($_POST['descrizione']);
			$nazione->save();
			$nazioni=nazionetabella::getAll();
			$content = get_include_contents("../Controller/Nazione/Templates/list.php");
			break;
			
		case 'edit':
			$id=$_REQUEST['id'];
			$nazione=nazionetabella::getById($id);
			$content = get_include_contents ("../Controller/Nazione/Templates/form.php");
			break;
		
		case 'update':
			$nazione=new Nazione();
			$nazione->setIdNazione($_POST['id']);
			$nazione->setSigla($_POST['sigla']);
			$nazione->setDescrizione($_POST['descrizione']);
			$nazione->save();
			$nazioni=nazionetabella::getAll();
			$content = get_include_contents ("../Controller/Nazione/Templates/list.php");
			break;
		
		case 'list':
			$nazioni=nazionetabella::getAll();
			$content = get_include_contents ("../Controller/Nazione/Templates/list.php");
			break;
			
		case 'delete':
			$id=$_REQUEST['id'];
			$nazione=nazionetabella::getById($id);
			$nazione->delete();
			$nazioni=nazionetabella::getAll();
			$content = get_include_contents ("../Controller/Nazione/Templates/list.php");
			break;
		
		case 'show':
			$id=$_REQUEST['id'];
			$nazione=nazionetabella::getById($id);
			$content = get_include_contents ("../Controller/Nazione/Templates/show.php");
			
			break;		
	}
	
?>
	
