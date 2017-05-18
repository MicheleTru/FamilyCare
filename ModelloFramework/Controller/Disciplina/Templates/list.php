<html>
	<head>
		<title>Elenco discipline</title>
	</head>

	<body>
		<h1><center>LISTA DISCIPLINE</center></h1>
		<table align="center">
			<tr>
				<th>DESCRIZIONE</th>
				<th colspan="3" align="center">AZIONI</th>
			</tr>
			<?php foreach ($discipline as $disciplina):?>
			<tr>
				<td><?php echo $disciplina->getDescrizione()?></td>
				<td><a class="linkTabella" href="index.php?controller=disciplina&action=show&id=<?php echo $disciplina->getIdDisciplina()?>">Visualizza</a></td>
				<td><a class="linkTabella"href="index.php?controller=disciplina&action=edit&id=<?php echo $disciplina->getIdDisciplina()?>">Modifica</a></td>
				<td><a onclick="return confirm('Eliminare questa disciplina?');"class="linkTabella" href="index.php?controller=disciplina&action=delete&id=<?php echo $disciplina->getIdDisciplina()?>">Elimina</a></td>
			</tr>
			<?php endforeach;?>
		</table>
		<br>
		<form> 
			<center><input type=button class="button" value="Nuova disciplina" onClick="self.location='index.php?controller=disciplina&action=new'"></center>
		</form> 
		
	</body>
</html>

