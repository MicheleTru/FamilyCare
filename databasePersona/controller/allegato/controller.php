<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "list");
	
	switch ($action) {
		case 'new':
			$allegato = new allegato();
			$content = get_include_contents("../controller/allegato/templates/form.php");
			break;
		case 'create':
			
			//die(print_r($_FILES));
			/*SOLUZIONE CONTROLLER 
			$uploaddir = '/home/mburani/public_html/databasePersona/files/';
			$uploadfile = $uploaddir . basename($_FILES['nomefileorigine']['name']);
			if (move_uploaded_file($_FILES['nomefileorigine']['tmp_name'], $uploadfile)) {
				$allegato = new allegato();
				$allegato->setDescrizione($_POST['descrizione']);
				$allegato->setNomeFileOrigine($_FILES['nomefileorigine']['name']);
				$allegato->setNomeFileDestinazione($uploadfile);
				$allegato->save();
			}
			
			*/
			
			/*
			 * SOLUZIONE MODELLO 
			 */
			
			$allegato = new allegato();
			$allegato->setDescrizione($_POST['descrizione']);
			$allegato->setUploadedFile($_FILES['nomefileorigine']);
			$allegato->save();
			
			
			$allegati = array();
			$allegati = allegatoTabella::getAll();
			$content = get_include_contents("../controller/allegato/templates/list.php");
			break;
		case 'show':
			$allegato = new allegato();
			$allegato = allegatoTabella::getById($_REQUEST['id']);
			$content = get_include_contents("../controller/allegato/templates/show.php");
			break;
		case 'download':
			$allegato = allegatoTabella::getById($_REQUEST['id']);
			if (file_exists($allegato->getNomeFileDestinazione())) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="'.$allegato->getNomeFileOrigine().'"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($allegato->getNomeFileDestinazione()));
				readfile($allegato->getNomeFileDestinazione());
				exit;
			}
			exit;			
			break;
		case 'update':
			$allegato = allegatoTabella::getById($_REQUEST['id']);
			$allegato->setDescrizione($_POST["descrizione"]);
			$allegato->update();
			$allegati = allegatoTabella::getAll();
			//require ("../controller/allegato/templates/list.php");
			$content = get_include_contents("../controller/allegato/templates/list.php");
			break;
		case 'list':
			$allegati = array();
			$allegati = AllegatoTabella::getAll();
			//require ("../controller/allegato/templates/list.php");
			$content = get_include_contents("../controller/allegato/templates/list.php");
			break;
		case 'delete':
			$allegato = new allegato();
			$id = $_REQUEST['id'];
			$allegato->setId($id);
			$allegato->delete();
			$allegati = allegatoTabella::getAll();
			//require ("../controller/allegato/templates/list.php");
			$content = get_include_contents("../controller/allegato/templates/list.php");
			break;
		
			
	}
?>
