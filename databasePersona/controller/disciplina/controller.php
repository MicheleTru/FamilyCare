<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "list");
	
	switch ($action) {
		case 'new':
			$disciplina = new Disciplina();
			//require ("../controller/disciplina/templates/form-edit2.php");
			$content = get_include_contents("../controller/disciplina/templates/form-edit2.php");
			break;
		case 'create':
			$disciplina = new Disciplina();
			$disciplina->setDescrizione($_POST['descrizione']);
			$disciplina->save();
			$discipline = array();
			$discipline = DisciplinaTabella::getAll();
			//require ("../controller/disciplina/templates/list.php");
			$content = get_include_contents("../controller/disciplina/templates/list.php");
			break;
		case 'show':
			$disciplina = new Disciplina();
			$disciplina = DisciplinaTabella::getById($_REQUEST['id']);
			//require ("../controller/disciplina/templates/show.php");
			$content = get_include_contents("../controller/disciplina/templates/show.php");
			break;
		case 'edit':
			$disciplina = new Disciplina();
			$disciplina = DisciplinaTabella::getById($_REQUEST['id']);
			//require ("../controller/disciplina/templates/form-edit2.php");
			$content = get_include_contents("../controller/disciplina/templates/form-edit2.php");
			break;
		case 'update':
			$disciplina = new Disciplina();
			$disciplina->setId($_POST["id"]);
			$disciplina->setDescrizione($_POST["descrizione"]);
			$disciplina->modify();
			$discipline = DisciplinaTabella::getAll();
			//require ("../controller/disciplina/templates/list.php");
			$content = get_include_contents("../controller/disciplina/templates/list.php");
			break;
		case 'list':
			$discipline = array();
			$discipline = DisciplinaTabella::getAll();
			//require ("../controller/disciplina/templates/list.php");
			$content = get_include_contents("../controller/disciplina/templates/list.php");
			break;
		case 'delete':
			$disciplina = new Disciplina();
			$id = $_REQUEST['id'];
			$disciplina->setId($id);
			$disciplina->delete();
			$discipline = DisciplinaTabella::getAll();
			//require ("../controller/disciplina/templates/list.php");
			$content = get_include_contents("../controller/disciplina/templates/list.php");
			break;
		
			
	}
?>
