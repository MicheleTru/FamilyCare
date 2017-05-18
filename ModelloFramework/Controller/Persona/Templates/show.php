<!DOCTYPE html>

<html lang="it">
	<head>
		<meta charset="UTF-8">
		<title>Dettagli persona</title>
	</head>
	<body>
		<h2>Dettagli persona (ID: <?php echo $persona->getId()?>)</h2>
		<ul style = "width: 400px">
			<li>Nome: <?php echo $persona->getNome()?></li>
			<li>Cognome: <?php echo $persona->getCognome()?></li>
			<li>Codice fiscale: <?php echo $persona->getCodiceFiscale()?></li>
			<li>Peso: <?php echo $persona->getPeso()?> kg</li>
			<li>Altezza: <?php echo $persona->getAltezza()?> m</li>
			<li>Disciplina: <?php echo $persona->getDisciplina()->getDescrizione()?></li>
			<li>Nazione: <?php echo $persona->getNazione()->getDescrizione()?></li>
		</ul>
		
		<form> 
			<br>
			<input type=button class="button" value="Indietro" onClick="self.location='index.php?controller=persona&action=list'">
		</form>
		
	</body>
</html>
