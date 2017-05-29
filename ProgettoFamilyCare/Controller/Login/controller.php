<?php
	
	if (isset ($_REQUEST['action'])){
		$action = $_REQUEST['action'];
	}else{
		$action = 'login';
	}
	
	switch ($action){
		
		case 'login':
			$content=get_include_contents("../Controller/Login/Templates/form.php");
			break;
		
		case 'doLogin':
			if(TabellaUtente::getByUsernameAndPassword($_POST['username'], $_POST['password'])){
				$_SESSION['username'] = $_POST['username'];
				echo "Benvenuto";
				break;
			}			
			header("Location: ?controller=login&action=login");
			break;
			
		
		case 'doLogout':
			session_destroy();
			header("Location: index.php?controller=login&action=login");
			break;
			
		case 'doRegister':
			$utente = new Utente();
			$utente->setUsername($_POST['username']);
			$utente->setPassword($_POST['password']);
			if (UtenteTabella::getByUsername($_POST['username'], sha1 ($_POST['password'])) != NULL){
				$utente->save();
				header ("Location: index.php?controller=login&action=login");
			}else{
				echo '<script language="javascript">';
				echo 'alert ("Username non disponibile! Riprova")';
				echo '</script>'; 	
				$action = 'register';
				$content=get_include_contents("../Controller/Login/Templates/form_register.php");
			}
			break;
			
		case 'register':
			$content=get_include_contents ("../Controller/Login/Templates/form_register.php");
			break;
			
	}
			
?>
