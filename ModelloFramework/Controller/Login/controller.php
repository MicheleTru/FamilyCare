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
			if(UtenteTabella::getByUsernamePassword($_REQUEST['username'], $_REQUEST['password']) != NULL){
				$_SESSION['username']=$_REQUEST['username'];
				header("Location: index.php?controller=persona&action=list");
			}else{
				echo '<script language="javascript">';
				echo 'alert ("Credenziali errate! Riprova")';
				echo '</script>'; 	
				$action = 'login';
				$content=get_include_contents("../Controller/Login/Templates/form.php");
			}
			break;
		
		case 'doLogout':
			session_destroy();
			header("Location: index.php?controller=login&action=login");
			break;
			
		case 'doRegister':
			$utente = new Utente();
			$utente->setUsername ($_REQUEST['username']);
			$utente->setPassword ($_REQUEST['password']);
			if (UtenteTabella::getByUsername($_REQUEST['username']) != NULL){
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
