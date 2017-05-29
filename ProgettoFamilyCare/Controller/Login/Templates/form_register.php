<!DOCTYPE html>

<html lang="it">
	<head>
		<title>REGISTRATI</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		    <script src="https://use.typekit.net/ayg4pcz.js"></script>
		    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<center>	
		    <div class="container">
			
		    <h1 class="welcome text-center">Welcome to <br> FamilyCare</h1>
			<div class="card card-container">
			<h2 class='login_title text-center'>REGISTRATI</h2>
			<hr>
		<center>
			    <form class="form-signin" action="index.php?controller=login" method="POST">
			        <center>
					<input type="hidden" name="action" value ="doRegister">
				<center>
				<span id="reauth-email" class="reauth-email"></span>
				<p class="input_title">Utente</p>
				<input type="text" id="username" class="login_box" required autofocus>
				<p class="input_title">Password</p>
				<input type="password" id="password" class="login_box" required>
				<div id="remember" class="checkbox">
				    <label>

				    </label>
				</div>
				<button class="btn btn-lg btn-primary" type="submit" value="Registrati">Registrati</button>
				<p>Una volta registrato, dovrai effettuare il <a href="index.php?controller=login&action=login">login</a></p>
			    </form><!-- /form -->
			</div><!-- /card-container -->
		    </div><!-- /container -->
	</body>
</html>
