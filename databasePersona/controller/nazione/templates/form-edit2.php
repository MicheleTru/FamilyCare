<html>
	<head>
		<title>Inserisci o modifica la nazione</title>
	</head>
	<body>
		<center>
		<form action="?controller=nazione" method="POST">
			<input type="hidden" name="action" value="<?php echo $nazione->getId() ? 'update' : 'create' ?>">
			<input type="hidden" name="id" value="<?php echo $nazione->getId() ?>">
			<center>
			
			<p>Sigla nazione:</p>
			<input type="text" name="sigla" value="<?php echo $nazione->getSigla() ?>">
			
			<p>Descrizione nazione:</p>
			<input type="text" name="descrizione" value="<?php echo $nazione->getDescrizione() ?>">
		
			</center>
			<br>
			<br>
			<input type="submit" value="VAI">
		</form>
		</center>
	</body>
</html>
