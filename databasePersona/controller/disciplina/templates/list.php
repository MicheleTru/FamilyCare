<html>
		<head>
				<title>Lista delle discipline</title>
		</head>
		<body>
			<center>
				
				<h1>Elenco Discipline</h1>
				<br>
				<br>
				<table border="3px">
					<tr>
						<td><center>DISCIPLINA</center></td>
						<td colspan="3"><center>AZIONI</center></td>
					</tr>
					<?php foreach ($discipline as $disciplina):?>
					<tr>
						<td><?php echo $disciplina->getDescrizione() ?></td>
						<td><a href="?controller=disciplina&action=edit&id=<?php echo $disciplina->getId()?>">Modifica</a></td>
						<td><a href="?controller=disciplina&action=show&id=<?php echo $disciplina->getId()?>">Vedi</a></td>
						<td><a href="?controller=disciplina&action=delete&id=<?php echo $disciplina->getId()?>">Elimina</a></td>
					</tr>
					<?php endforeach;?>
				</table>
				<br>
				<br>
				<a href="?controller=disciplina&action=new">Aggiungi disciplina</a>
				
			</center>
			
		</body>
</html>
