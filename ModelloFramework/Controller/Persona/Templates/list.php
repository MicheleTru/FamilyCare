<html>
	<head>
		<title>Elenco persone</title>
	</head>

	<body>
		<h1><center>LISTA PERSONE</center></h1>
		<table align="center">
			<tr>
				<th>COGNOME</th>
				<th>NOME</th>
				<th>DISCIPLINA</th>
				<th>NAZIONE</th>
				<th colspan="3" align="center">AZIONI</th>
			</tr>
			<?php foreach ($persone as $persona):?>
			<tr>
				<td><?php echo $persona->getCognome()?></td>
				<td><?php echo $persona->getNome()?></td>
				<td><?php echo DisciplinaTabella::getById($persona->getIdDisciplina())->getDescrizione()?></td>
				<td><?php echo nazionetabella::getById($persona->getIdNazione())->getDescrizione()?></td>
				<td><a class="linkTabella" href="index.php?controller=persona&action=show&id=<?php echo $persona->getId()?>">Visualizza</a></td>
				<td><a class="linkTabella" href="index.php?controller=persona&action=edit&id=<?php echo $persona->getId()?>">Modifica</a></td>
			<td><a onclick="return confirm('Eliminare questa persona?');"class="linkTabella"href="index.php?controller=persona&action=delete&id=<?php echo $persona->getId()?>">Elimina</a></td>
			</tr>
			<?php endforeach;?>
		</table>
		<br>
		<form> 
			<center><input type=button class="button" value="Nuova persona" onClick="self.location='index.php?controller=persona&action=new'"></center>
		</form> 
		
	</body>
</html>

