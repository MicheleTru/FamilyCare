<html>
	<head>
		<title>Inserisci o modifica la disciplina</title>
	</head>
	<body>
		<center>
		<form action="?controller=disciplina" method="POST">
			<input type="hidden" name="action" value="<?php echo $disciplina->getId() ? 'update' : 'create' ?>">
			<input type="hidden" name="id" value="<?php echo $disciplina->getId() ?>">
			<center>
			
			<p>Nome disciplina:</p>
			<input type="text" name="descrizione" value="<?php echo $disciplina->getDescrizione() ?>">
		
			</center>
			<br>
			<br>
			<input type="submit" value="VAI">
		</form>
		</center>
	</body>
</html>
