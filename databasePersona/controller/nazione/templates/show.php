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
			<p><?php echo $nazione->getId() ?></p>		
			<strong class="titolo">Sigla:</strong>
			<p><?php echo $nazione->getSigla() ?></p>
			<strong class="titolo">Descrizione:</strong>
			<p><?php echo $nazione->getDescrizione() ?></p>
			<br>
			<a href="?controller=nazione&action=list">Indietro</a>
		</center>
	</body>
</html>
