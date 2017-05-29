<html>
		<head>
				<title>Lista delle nazioni</title>
		</head>
		<body>
			<center>
				
				<h1>Elenco Nazioni</h1>
				<br>
				<br>
				<table border="3px">
					<tr>
						<td><center>NAZIONE</center></td>
						<td><center>N. Persone</center></td>
						<td colspan="3"><center>AZIONI</center></td>
					</tr>
					<?php foreach ($nazioni as $nazione):?>
					<tr>
						<td><?php echo $nazione->getDescrizione() ?></td>
						<!--<td><?php //echo NazioneTabella::getNumeroPersone($nazione->getId()) ?></td>-->
						<td><?php echo PersonaTabella::getByIdNazioneNumero($nazione->getId()) ?></td>
						
						<td><a href="?controller=nazione&action=edit&id=<?php echo $nazione->getId()?>">Modifica</a></td>
						<td><a href="?controller=nazione&action=show&id=<?php echo $nazione->getId()?>">Vedi</a></td>
						<td><a href="?controller=nazione&action=delete&id=<?php echo $nazione->getId()?>">Elimina</a></td>
					</tr>
					<?php endforeach;?>
				</table>
				<br>
				<br>
				<a href="?controller=nazione&action=new">Aggiungi nazione</a>
				
			</center>
			
		</body>
</html>
