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
			if(UtenteTabella::getByUsernameAndPassword($_POST['username'], $_POST['password'])){
				$_SESSION['username'] = $_POST['username'];
				echo "Benvenuto " + $_SESSION['username'];
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
			print_r($_POST['username']);
			echo $_POST['password'];
			$utente->setUsername($_POST['username']);
			$utente->setPassword($_POST['password']);
			if (UtenteTabella::getByUsernameAndPassword($_POST['username'], sha1 ($_POST['password'])) != NULL){
				$utente->save();
				header ("Location: index.php?controller=login&action=login");
			}else{	
				$action = 'register';
				$content=get_include_contents("../Controller/Login/Templates/form_register.php");
			}
			break;
			
		case 'register':
			$content=get_include_contents ("../Controller/Login/Templates/form_register.php");
			break;
			
	}
			
?>
