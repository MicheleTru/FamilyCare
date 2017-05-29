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
			<p><?php echo $disciplina->getId() ?></p>		
			<strong class="titolo">Disciplina:</strong>
			<p><?php echo $disciplina->getDescrizione() ?></p>
			<br>
			<a href="?controller=disciplina&action=list">Indietro</a>
		</center>
	</body>
</html>
