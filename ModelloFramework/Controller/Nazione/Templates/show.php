<!DOCTYPE html>

<html lang="it">
	<head>
		<meta charset="UTF-8">
		<title>Dettagli nazione</title>
	</head>
	<body>
		<h2>Dettagli nazione (ID: <?php echo $nazione->getIdNazione()?>)</h2>
		<ul style = "width: 400px">
			<li>Sigla: <?php echo $nazione->getSigla()?></li>
			<li>Descrizione: <?php echo $nazione->getDescrizione()?></li>
		</ul>
		
		<form> 
			<br>
			<input type=button class="button" value="Indietro" onClick="self.location='index.php?controller=nazione&action=list'">
		</form>
		
	</body>
</html>
