<!DOCTYPE html>

<html lang="it">
	<head>
		<title><?php echo ($persona->getId() ? 'Modifica persona' : 'Inserisci persona')?></title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form action="index.php?controller=persona" method="POST">
			<input type="hidden" name="action" value="<?php echo ($persona->getId() ? 'update' : 'create')?>">
			<input type="hidden" name="id" value="<?php echo $persona->getId()?>">
			
			
					Nome
					<input required type="text" name="nome" value="<?php echo $persona->getNome()?>">
			
				
					Cognome
					<input required type="text" name="cognome" value="<?php echo $persona->getCognome()?>">
	
				
					Codice fiscale
					<input pattern=".{16}" required type="text" name="codiceFiscale" value="<?php echo $persona->getCodiceFiscale()?>">
				
			
					Peso (kg)
					<input required type="number" step="1" name="peso" value="<?php echo $persona->getPeso()?>">
				
			
					Altezza (m)
					<input required type="number" step="0.01" name="altezza" value="<?php echo $persona->getAltezza()?>">
				
				
					Disciplina
					
						<select required name="idDisciplina">
							<?php foreach($discipline as $d): ?>
								<option value="<?php echo $d->getIdDisciplina()?>" <?php echo ($persona->getIdDisciplina()==$d->getIdDisciplina()? 'selected':'')?>> <?php echo $d->getDescrizione() ?></option>
							<?php endforeach ?>
						</select>
						
					Nazione
						<select required name="idNazione">
							<?php foreach($nazioni as $n): ?>
								<option value="<?php echo $n->getIdNazione()?>" <?php echo ($persona->getIdNazione()==$n->getIdNazione()? 'selected': '')?>> <?php echo $n->getDescrizione() ?></option>
							<?php endforeach ?>
						</select>
				
				
			<br>
			<input type="submit" class="button" value="Invia dati">
		</form>
		<br>
		<form> 
			<input type=button class="button" value="Indietro" onClick="self.location='index.php?controller=persona&action=list'">
		</form> 
	</body>
</html>

