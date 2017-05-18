<!DOCTYPE html>
<html>
	<head>
		<link href="../Web/CSS/stile.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="container">
			<header>
				<h1>Persone, Discipline, Nazioni</h1>
			</header>
			
			<nav>
				<ul>
					<li><a href="index.php?controller=persona&action=list">PERSONE</a></li>
					<li><a href="index.php?controller=disciplina&action=list">DISCIPLINE</a></li>
					<li><a href="index.php?controller=nazione&action=list">NAZIONI</a></li>
					<li><a href="index.php?controller=file&action=list">ALLEGATI</a></li>
					<li><a href ="index.php?controller=login&action=doLogout">ESCI</a></li>
	    		</ul>
			</nav>

			<article>
				<?php echo $content?>
				
			</article>
		</div>
		<footer>Luca Giommi 5A INF</footer>
	</body>
</html>
