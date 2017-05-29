<?php 
	session_start();	
	require ('../config/connessione.php');
	require ('../model/Utente.class.php');
	require ('../model/UtenteTabella.class.php');
	require ('../model/Gruppo.class.php');
	require ('../model/GruppoTabella.class.php');
	require ('../model/persona.class.php');
	require ('../model/PersonaTabella.class.php');
	require ('../model/disciplina.class.php');
	require ('../model/DisciplinaTabella.class.php');
	require ('../model/Nazione.class.php');
	require ('../model/NazioneTabella.class.php');
	require ('../model/Allegato.class.php');
	require ('../model/AllegatoTabella.class.php');
	
	require ('../lib/lib.php');
	
	$auth = FALSE;
	$user = NULL;
	
	if (isset($_SESSION['user_id'])) {
		$user = UtenteTabella::getById($_SESSION['user_id']);
		$auth = TRUE;
	}
	
	
	$user = UtenteTabella::getById(10);
	$auth = TRUE;
	
	if(!isset($_REQUEST['controller'])){
			$controller = 'persona';
	}else{
		$controller = $_REQUEST['controller'];
	}
	
	if(!isset($_REQUEST['action'])){
		$action = 'list';
	}else{
		$action = $_REQUEST['action'];
	}
	
	
	if (!$auth){
		if ($controller!='login'){
			$controller = 'login';
			$action = 'login';
		}
	}
	
	switch ($controller) {

		case 'login':
			require ('../controller/login/controller.php');
			break;
		
		case 'persona':
			require ('../controller/persona/controller.php');
			break;
			
		case 'disciplina':
			require ('../controller/disciplina/controller.php');
			break;
		
		case 'allegato':
			require ('../controller/allegato/controller.php');
			break;
			
		case 'nazione':
			if (!$auth or !$user->hasGroup('amministratori')){
				header("HTTP/1.0 403 Forbidden");
				exit();
			}
			require ('../controller/nazione/controller.php');
			break;
	}
	
	if ($auth)
		require ("../layout/layout.php");
	else
	    require ("../layout/layout-login.php");	
 
?>
