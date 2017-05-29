<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "list");
	
	switch ($action) {
		case 'new':
			$nazione = new Nazione();
			$content = get_include_contents("../controller/nazione/templates/form-edit2.php");
			break;
		case 'create':
			$nazione = new Nazione();
			$nazione->setDescrizione($_POST['descrizione']);
			$nazione->setSigla($_POST['sigla']);
			$nazione->save();
			$nazioni = array();
			$nazioni = NazioneTabella::getAll();
			$content = get_include_contents("../controller/nazione/templates/list.php");
			break;
		case 'show':
			$nazione = new Nazione();
			$nazione = NazioneTabella::getById($_REQUEST['id']);
			$content = get_include_contents("../controller/nazione/templates/show.php");
			break;
		case 'edit':
			$nazione = new Nazione();
			$nazione = NazioneTabella::getById($_REQUEST['id']);
			$content = get_include_contents("../controller/nazione/templates/form-edit2.php");
			break;
		case 'update':
			$nazione = new Nazione();
			$nazione->setId($_POST["id"]);
			$nazione->setSigla($_POST["sigla"]);
			$nazione->setDescrizione($_POST["descrizione"]);
			$nazione->modify();
			$nazioni = NazioneTabella::getAll();
			$content = get_include_contents("../controller/nazione/templates/list.php");
			break;
		case 'list':
			$nazioni = array();
			$nazioni = NazioneTabella::getAll();
			$content = get_include_contents("../controller/nazione/templates/list.php");
			break;
		case 'delete':
			$nazione = new Nazione();
			$id = $_REQUEST['id'];
			$nazione->setId($id);
			$nazione->delete();
			$nazioni = NazioneTabella::getAll();
			$content = get_include_contents("../controller/nazione/templates/list.php");
			break;
		
			
	}
?>
