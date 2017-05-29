<html>
	<head>
		<title>Inserisci o modifica l'allegato</title>
	</head>
	<body>
		<center>
		<form action="?controller=allegato" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="action" value="<?php echo $allegato->getId() ? 'update' : 'create' ?>">
			<input type="hidden" name="id" value="<?php echo $allegato->getId() ?>">
			<center>
			<p>Descrizione allegato:</p>
			<input type="text" name="descrizione" value="<?php echo $allegato->getDescrizione() ?>">
			</center>
			<br>
			<br>
			<center>
			<p>File:</p>
			<input type="file" name="nomefileorigine">
			</center>
			<br>
			
			<input type="submit" value="VAI">
		</form>
		</center>
	</body>
</html>
