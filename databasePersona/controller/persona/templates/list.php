<html>
		<head>
				<title>Lista delle persone</title>
		</head>
		<body>
			<center>
				
				<h1>Elenco persone</h1>
				<br>
				<br>
				<table border="3px">
					<tr>
						<td><center>ID</center></td>
						<td><center>NOME</center></td>
						<td><center>COGNOME</center></td>
						<td><center>CODICE FISCALE</center></td>
						<td><center>PESO</center></td>
						<td><center>ALTEZZA</center></td>
						<td><center>DISCIPLINA</center></td>
						<td><center>NAZIONE</center></td>
						
						<td colspan="2"><center>AZIONI</center></td>
					</tr>
					<?php foreach ($persone as $persona):?>
					<tr>
						<td><?php echo $persona->getId() ?></td>
						<td><?php echo $persona->getNome() ?></td>
						<td><?php echo $persona->getCognome() ?></td>
						<td><?php echo $persona->getCf() ?>
						<td><?php echo $persona->getPeso() ?></td>
						<td><?php echo $persona->getAltezza() ?></td>
						<td><?php echo $persona->getDisciplina()->getDescrizione() ?></td>
						<td><?php echo $persona->getNazione()->getDescrizione() ?></td>
						<td><a href="?controller=persona&action=edit&id=<?php echo $persona->getId()?>">Modifica</a></td>
						<td><a href="?controller=persona&action=show&id=<?php echo $persona->getId()?>&id_disciplina=<?php echo $persona->getIdDisciplina()?>">Vedi</a></td>
					</tr>
					<?php endforeach;?>
				</table>
				<br>
				<br>
				<a href="?action=new">Aggiungi persona</a>
				
			</center>
			
		</body>
</html>
