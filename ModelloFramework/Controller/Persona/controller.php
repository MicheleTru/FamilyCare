<?php
	
	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'list';
	}
	
	switch($action){
		case 'new':
			$persona=new Persona();
			$discipline=DisciplinaTabella::getAll();
			$nazioni=nazionetabella::getAll();
			$content = get_include_contents("../Controller/Persona/Templates/form.php");
			break;
			
		case 'create':
			$persona=new Persona();
			$persona->setNome($_POST['nome']);
			$persona->setCognome($_POST['cognome']);
			$persona->setCodiceFiscale($_POST['codiceFiscale']);
			$persona->setPeso($_POST['peso']);
			$persona->setAltezza($_POST['altezza']);
			$persona->setIdDisciplina($_POST['idDisciplina']);
			$persona->setIdNazione($_POST['idNazione']);
			$persona->save();
			$persone=PersonaTabella::getAll();
			$content = get_include_contents("../Controller/Persona/Templates/list.php");
			break;
			
		case 'edit':
			$id=$_REQUEST['id'];
			$discipline=DisciplinaTabella::getAll();
			$nazioni=nazionetabella::getAll();
			$persona=PersonaTabella::getById($id);
			$content = get_include_contents ("../Controller/Persona/Templates/form.php");
			break;
		
		case 'update':
			$persona=new Persona();
			$persona->setId($_POST['id']);
			$persona->setNome($_POST['nome']);
			$persona->setCognome($_POST['cognome']);
			$persona->setCodiceFiscale($_POST['codiceFiscale']);
			$persona->setPeso($_POST['peso']);
			$persona->setAltezza($_POST['altezza']);
			$persona->setIdDisciplina($_POST['idDisciplina']);
			$persona->setIdNazione($_POST['idNazione']);
			$persona->save();
			$persone=PersonaTabella::getAll();
			$content = get_include_contents ("../Controller/Persona/Templates/list.php");
			break;
		
		case 'list':
			$persone=PersonaTabella::getAll();
			$content = get_include_contents ("../Controller/Persona/Templates/list.php");
			break;
			
		case 'delete':
			$id=$_REQUEST['id'];
			$persona=PersonaTabella::getById($id);
			$persona->delete();
			$persone=PersonaTabella::getAll();
			$content = get_include_contents ("../Controller/Persona/Templates/list.php");
			break;
		
		case 'show':
			$id=$_REQUEST['id'];
			$persona=PersonaTabella::getById($id);
		//	$compagni=PersonaTabella::getByDisciplina($persona->getIdDisciplina());	
			$content = get_include_contents ("../Controller/Persona/Templates/show.php");
			
			break;		
	}
	
?>
	

