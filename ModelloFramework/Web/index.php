<?php
	session_start();
	
	require ("../Config/connessione.php");
	require ("../Model/persona.class.php");
	require ("../Model/personatabella.class.php");
	require ("../Model/disciplina.class.php");
	require ("../Model/disciplinatabella.class.php");
	require ("../Model/nazione.class.php");
	require ("../Model/nazionetabella.class.php");
	require ("../Model/utenti.class.php");
	require ("../Model/utentitabella.class.php");
	require ("../Lib/lib.php");
	
	$auth = FALSE;
	
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$auth = TRUE;
	}
	
	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'list';
	}
	
	if (isset ($_REQUEST['controller'])){
		$controller = $_REQUEST['controller'];
	}else{
		$controller = 'persona';
	}
	
	function set_message($status, $message){
		$_POST['msg_type'] = $status;
		$_POST['msg'] = $message;
	} 
	
	if (!$auth) {
		if ($controller != 'login' && $controller != 'register') {
			$controller = 'login';
			$action = 'login';
		}else{
			$controller = 'login';
			$action = 'register';
		}
	}
	
	switch ($controller){
		
		case 'persona':
			require ("../Controller/Persona/controller.php");
			break;
			
		case 'disciplina':
			require ("../Controller/Disciplina/controller.php");
			break;
			
		case 'nazione':
			require ("../Controller/Nazione/controller.php");
			break;
			
		case 'login':
			require ("../Controller/Login/controller.php");
			break;
	}
	
	if($auth == TRUE){
		require ("../Layout/layout.php");
	}else{
		
		switch ($action){
			case 'login':
				require ("../Layout/layout_login.php");
				break;
		
			case 'register':
				require ("../Layout/layout_register.php");
				break;			
		}
	}
	
?>
