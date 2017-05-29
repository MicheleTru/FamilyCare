<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<link href="./css/style.css" rel=stylesheet>
</head>

<body>
	<div id="main_container">
		<div id="top">
			<h1>Benvenuto! <?php echo $user ? $user->getUsername() : '' ?></h1>
		</div>
		
		<div id="main-2">
			<div id="left">
				<ul>
					<li><a href="../web/index.php?controller=persona">PERSONA</a></li>
					<li><a href="../web/index.php?controller=disciplina">DISCIPLINA</a></li>
					<li><a href="../web/index.php?controller=allegato">ALLEGATO</a></li>
					<?php if ($user && $user->hasGroup('amministratori')) :?>
					<li><a href="../web/index.php?controller=nazione">NAZIONE</a></li>
					<?php endif;?>
					<?php if ($user) :?>
						<?php foreach($user->getGruppi() as $gruppo) :?>
							<li><?php echo $gruppo->getGroupname(); ?></li>
						<?php endforeach ;?>
					<li><a href="../web/index.php?controller=login&action=doLogout">....ESCI</a></li>					
					<?php endif;?>
				</ul>
				
			</div>
			<div id="right">
				<?php echo $content ?>
			</div>
		</div>
	</div>
</body>
</html>
