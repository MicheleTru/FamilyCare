<!DOCTYPE html>

<html lang="it">
	<head>
		<title><?php echo ($disciplina->getIdDisciplina() ? 'Modifica disciplina' : 'Inserisci disciplina')?></title> 
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form action="index.php?controller=disciplina" method="POST">
			<input type="hidden" name="action" value="<?php echo ($disciplina->getIdDisciplina() ? 'update' : 'create')?>">
			<input type="hidden" name="idDisciplina" value="<?php echo $disciplina->getIdDisciplina()?>">
			Descrizione
			<input required type="text" name="descrizione" value="<?php echo $disciplina->getDescrizione()?>">
			<br>
			<input type="submit" class="button"  value="Invia dati">
		</form>
		
		<form> 
			<br>
			<input type=button class="button"  value="Indietro" onClick="self.location='index.php?controller=disciplina&action=list'">
		</form> 
	</body>
</html>
