<!DOCTYPE html>

<html lang="it">
	<head>
		<meta charset="UTF-8">
		<title>Dettagli disciplina</title>
	</head>
	<body>
		<h2>Dettagli disciplina (ID: <?php echo $disciplina->getIdDisciplina()?>)</h2>
		<ul style = "width: 400px">
			<li>Descrizione: <?php echo $disciplina->getDescrizione()?></li>
		
		</ul>
		<br>
		<form> 
			<input type=button class="button" value="Indietro" onClick="self.location='index.php?controller=disciplina&action=list'">
		</form>
		
	</body>
</html>
