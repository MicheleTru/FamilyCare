<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "list");
	
	switch ($action) {
		case 'new':
			$persona = new Persona();
			$discipline = DisciplinaTabella::getAll();
			$nazioni = NazioneTabella::getAll();
			//require ("../controller/persona/templates/form-edit2.php");
			$content = get_include_contents("../controller/persona/templates/form-edit2.php");
			break;
		case 'create':
			$persona = new Persona();
			$persona->setNome($_POST['nome']);
			$persona->setCognome($_POST['cognome']);
			$persona->setCf($_POST['cf']);
			$persona->setPeso($_POST['peso']);
			$persona->setAltezza($_POST['altezza']);
			$persona->setIdDisciplina($_POST['id_disciplina']);
			$persona->setIdNazione($_POST['id_nazione']);
			$persona->save();
			$persone = array();
			$persone = PersonaTabella::getAll();
			$disciplina = DisciplinaTabella::getById($_POST['id_disciplina']);
			$nazione = NazioneTabella::getById($_POST['id_nazione']);
			//require ("../controller/persona/templates/list.php");
			$content = get_include_contents("../controller/persona/templates/list.php");
			break;
		case 'show':
			$persone=PersonaTabella::getByIdDisciplina($_REQUEST['id_disciplina']);
			$risultato=PersonaTabella::getByIdDisciplinaNumero($_REQUEST['id_disciplina']);
			$persona = new Persona();
			$persona = PersonaTabella::getPersona($_REQUEST['id']);
			//require ("../controller/persona/templates/show.php");
			$content = get_include_contents("../controller/persona/templates/show.php");
			break;
		case 'edit':
			$persona = new Persona();
			$persona = PersonaTabella::getPersona($_REQUEST['id']);
			$discipline = DisciplinaTabella::getAll();
			$nazioni = NazioneTabella::getAll();
			//require ("../controller/persona/templates/form-edit2.php");
			$content = get_include_contents("../controller/persona/templates/form-edit2.php");
			break;
		case 'update':
			$persona = new Persona();
			$persona->setId($_POST["id"]);
			$persona->setNome($_POST["nome"]);
			$persona->setCognome($_POST["cognome"]);
			$persona->setCf($_POST["cf"]);
			$persona->setPeso($_POST["peso"]);
			$persona->setAltezza($_POST["altezza"]);
			$persona->setIdDisciplina($_POST["id_disciplina"]);
			$persona->setIdNazione($_POST["id_nazione"]);
			$persona->modify();
			$persone = PersonaTabella::getAll();
			//require ("../controller/persona/templates/list.php");
			$content = get_include_contents("../controller/persona/templates/list.php");
			break;
		case 'list':
			$persone = array();
			$persone = PersonaTabella::getAll();
			//require ("../controller/persona/templates/list.php");
			$content = get_include_contents("../controller/persona/templates/list.php");
			break;
		case 'delete':
			$persona = new Persona();
			$id = $_REQUEST['id'];
			$persona->setId($id);
			$persona->delete();
			$persone = PersonaTabella::getAll();
			//require ("../controller/persona/templates/list.php");
			$content = get_include_contents("../controller/persona/templates/list.php");
			break;
		case 'pdf':
			require('../lib/fpdf.php');
			$persone = PersonaTabella::getAll();
			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',16);
			foreach ($persone as $persona){
				$pdf->Cell(40,10,$persona->getNome());
				$pdf->ln();
			}
			$pdf->Output();
	}
?>
