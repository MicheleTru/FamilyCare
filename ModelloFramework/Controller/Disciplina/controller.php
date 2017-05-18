<?php
	
	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'list';
	}
	
	switch($action){
		case 'new':
			$disciplina=new Disciplina();
			$content = get_include_contents("../Controller/Disciplina/Templates/form.php");
			break;
			
		case 'create':
			$disciplina=new Disciplina();
			$disciplina->setDescrizione($_POST['descrizione']);
			$disciplina->save();
			$discipline=disciplinatabella::getAll();
			$content = get_include_contents("../Controller/Disciplina/Templates/list.php");
			break;
			
		case 'edit':
			$id=$_REQUEST['id'];
			$disciplina=disciplinatabella::getById($id);
			$content = get_include_contents("../Controller/Disciplina/Templates/form.php");
			break;
		
		case 'update':
			$disciplina=new Disciplina();
			$disciplina->setIdDisciplina($_POST['idDisciplina']);
			$disciplina->setDescrizione($_POST['descrizione']);
			$disciplina->save();
			$discipline=disciplinatabella::getAll();
			$content = get_include_contents("../Controller/Disciplina/Templates/list.php");
			break;
		
		case 'list':
			$discipline=disciplinatabella::getAll();
			$content = get_include_contents("../Controller/Disciplina/Templates/list.php");
			break;
			
		case 'delete':
			$id=$_REQUEST['id'];
			$disciplina=disciplinatabella::getById($id);
			$disciplina->delete();
			$discipline=disciplinatabella::getAll();
			$content = get_include_contents("../Controller/Disciplina/Templates/list.php");
			break;
		
		case 'show':
			$id=$_REQUEST['id'];
			$disciplina=disciplinatabella::getById($id);
			$content = get_include_contents("../Controller/Disciplina/Templates/show.php");
			break;		
	}
	
?>
	

