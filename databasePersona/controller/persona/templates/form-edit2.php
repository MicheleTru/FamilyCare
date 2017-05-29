<html>
	<head>
		<title>Inserisci o modifica la persona</title>
	</head>
	<body>
		<center>
		<form action="?controller=persona" method="POST">
			<input type="hidden" name="action" value="<?php echo $persona->getId() ? 'update' : 'create' ?>">
			<input type="hidden" name="id" value="<?php echo $persona->getId() ?>">
			<center>
			
			<p>Nome:</p>
			<input type="text" name="nome" value="<?php echo $persona->getNome() ?>">
			
			<p>Cognome:</p>
			<input type="text" name="cognome" value="<?php echo $persona->getCognome() ?>">
			 
			<p>Codice fiscale:</p>
			<input type="text" name="cf" value="<?php echo $persona->getCf() ?>">
			
			<p>Peso:</p>
			<input type="text" name="peso" value="<?php echo $persona->getPeso() ?>">
			
			<p>Altezza:</p>
			<input type="text" name="altezza" value="<?php echo $persona->getAltezza() ?>">
			
			<p>Disciplina:</p>
			<select name="id_disciplina">
				<?php foreach ($discipline as $disciplina) : ?>
					<option value="<?php echo $disciplina->getId() ?>" <?php echo ($persona->getIdDisciplina() == $disciplina->getId()) ? "selected" : "" ?>><?php echo $disciplina->getDescrizione() ?> </option>
				<?php endforeach ?>
			</select>
			
			<p>Nazione:</p>
			<select name="id_nazione">
				<?php foreach ($nazioni as $nazione) : ?>
					<option value="<?php echo $nazione->getId() ?>" <?php echo ($persona->getIdNazione() == $nazione->getId()) ? "selected" : "" ?>><?php echo $nazione->getDescrizione() ?> </option>
				<?php endforeach ?>
			</select>
			
			</center>
			<br>
			<br>
			<input type="submit" value="VAI">
		</form>
		</center>
	</body>
</html>
