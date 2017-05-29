<html>
		<head>
				<title>Lista degli allegati</title>
		</head>
		<body>
			<center>
				
				<h1>Elenco Allegati</h1>
				<br>
				<br>
				<table border="3px">
					<tr>
						<td><center>ALLEGATI</center></td>
						<td colspan="3"><center>AZIONI</center></td>
					</tr>
					<?php foreach ($allegati as $allegato):?>
					<tr>
						<td><?php echo $allegato->getDescrizione() ?></td>
						<td><a href="?controller=allegato&action=edit&id=<?php echo $allegato->getId()?>">Modifica</a></td>
						<td><a href="?controller=allegato&action=download&id=<?php echo $allegato->getId()?>">Scarica</a></td>
						<td><a href="?controller=allegato&action=delete&id=<?php echo $allegato->getId()?>">Elimina</a></td>
					</tr>
					<?php endforeach;?>
				</table>
				<br>
				<br>
				<a href="?controller=allegato&action=new">Aggiungi allegato</a>
				
			</center>
			
		</body>
</html>
