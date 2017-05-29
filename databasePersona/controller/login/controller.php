<?php
	$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "login");
	
	switch ($action) {
		case 'login':
			$content = get_include_contents("../controller/login/templates/form.php");
			break;
		case 'doLogin':
                        $username=NULL;

                        if( UtenteTabella::getByUsernameAndPassword($_POST['username'], sha1 ($_POST['password'])) != NULL){
                                $username =  UtenteTabella::getByUsernameAndPassword($_POST['username'], sha1 ($_POST['password']));

                                $_SESSION['username'] = $username;

                               echo "Benvenuto";
                        }else{
                                $content=get_include_contents('../controller/login/templates/form.php');
                        }
                        break;

		case 'doLogout':
			session_destroy();
			header("Location: ?controller=login&action=login");
			break;
	}
?>
