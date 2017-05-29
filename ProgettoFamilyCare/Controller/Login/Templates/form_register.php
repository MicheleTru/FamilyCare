<!DOCTYPE html>

<html lang="it">
	<head>
		<title>REGISTRATI</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form action="index.php?controller=login" method="POST">
			<center>
			<input type="hidden" name="action" value ="doRegister">
			<center>
				Username
				<br>
				<input required type="text1" name="username" >
				<br>
				<br>
				Password
				<br>
				<input required type="password" name="password" >
				<br>
				<br>
			<input type="submit" class="button" value="Registrati">
			<br>
			<br>
			<p>Una volta registrato, dovrai effettuare il login</p>
			</center>
		</form>
	</body>
</html>
