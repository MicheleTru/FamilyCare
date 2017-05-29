<html>
	<head>
		<style>
			.titolo{
				font-size: 36px;
			}
		</style>
	</head>
	<body>
		<center>	
			<strong class="titolo">ID:</strong>
			<p><?php echo $persona->getId() ?></p>		
			<strong class="titolo">Nome:</strong>
			<p><?php echo $persona->getNome() ?></p>
			<strong class="titolo">Cognome:</strong>
			<p><?php echo $persona->getCognome() ?></p>
			<strong class="titolo">Codice fiscale:</strong>
			<p><?php echo $persona->getCf() ?></p>
			<strong class="titolo">Peso:</strong>
			<p><?php echo $persona->getPeso() ?></p>
			<strong class="titolo">Altezza:</strong>
			<p><?php echo $persona->getAltezza() ?></p>
			<strong class="titolo">Disciplina:</strong>
			<p><?php echo $persona->getDisciplina()->getDescrizione() ?></p>
			<strong class="titolo">Nazione:</strong>
			<p><?php echo $persona->getNazione()->getDescrizione() ?></p>
			<?php if ($risultato!=1) : ?>
				<strong class="titolo">Compagni di squadra:</strong><br>
				<?php foreach ($persone as $p) : 
					if($p->getId()!=$persona->getId()) : ?>
						<p><?php echo $p->getNome(); ?> <?php echo $p->getCognome()?></p>
					<?php endif ?>
				<?php endforeach ?>
			<?php endif?>
			<br>
			<br>
			<br>
			<a onclick="return confirm('Vuoi eliminare questa persona?')" href="?action=delete&id=<?php echo $persona->getId()?>">Elimina persona</a>
			<a href="?controller=persona&action=list">Indietro</a>
		</center>
	</body>
</html>
