<!DOCTYPE html>

<html lang="it">
	<head>
		<title><?php echo ($nazione->getIdNazione() ? 'Modifica nazione' : 'Inserisci nazione')?></title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form action="index.php?controller=nazione" method="POST">
			<input type="hidden" name="action" value="<?php echo ($nazione->getIdNazione() ? 'update' : 'create')?>">
			<input type="hidden" name="id" value="<?php echo $nazione->getIdNazione()?>">
			
			
					Sigla
					<input required type="text" name="sigla" value="<?php echo $nazione->getSigla()?>">
			
				
					Descrizione
					<input required type="text" name="descrizione" value="<?php echo $nazione->getDescrizione()?>">
				
				
			<br>
			<input type="submit" class="button" value="Invia dati">
		</form>
		<br>
		<form> 
			<input type=button class="button" value="Indietro" onClick="self.location='index.php?controller=nazione&action=list'">
		</form> 
	</body>
</html>
