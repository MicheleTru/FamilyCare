<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "login");
	
	switch ($action) {
		case 'login':
			$content = get_include_contents("../controller/login/templates/form.php");
			break;
		case 'doLogin':
			$username = UtenteTabella::getByUsernameAndPassword($_POST['username'], $_POST['password']);
			if ($username != NULL ) {
				$_SESSION['user_id'] = $username->getId();;
				header("Location: ?controller=persona&action=list");
				break;
			}
			header("Location: ?controller=login&action=login");
			break;
		case 'doLogout':
			session_destroy();
			header("Location: ?controller=login&action=login");
			break;
	}
?>
