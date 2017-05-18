<html>
	<head>
		<title>Elenco nazioni</title>
	</head>

	<body>
		<h1><center>LISTA NAZIONI</center></h1>
		<table align="center">
			<tr>
				<th>SIGLA</th>
				<th>DESCRIZIONE</th>
				<th colspan="3" align="center">AZIONI</th>
			</tr>
			<?php foreach ($nazioni as $nazione):?>
			<tr>
				<td><?php echo $nazione->getSigla()?></td>
				<td><?php echo $nazione->getDescrizione()?></td>
				<td><a class="linkTabella" href="index.php?controller=nazione&action=show&id=<?php echo $nazione->getIdNazione()?>">Visualizza</a></td>
				<td><a class="linkTabella" href="index.php?controller=nazione&action=edit&id=<?php echo $nazione->getIdNazione()?>">Modifica</a></td>
			<td><a onclick="return confirm('Eliminare questa nazione?');"class="linkTabella" href="index.php?controller=nazione&action=delete&id=<?php echo $nazione->getIdNazione()?>">Elimina</a></td>
			</tr>
			<?php endforeach;?>
		</table>
		<br>
		<form> 
			<center><input type=button class="button" value="Nuova nazione" onClick="self.location='index.php?controller=nazione&action=new'"></center>
		</form> 
		
	</body>
</html>
