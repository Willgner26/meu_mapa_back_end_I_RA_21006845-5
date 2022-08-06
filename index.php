<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Meu mapa de back end I</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="menu">
		<ul>
			<li><a href="index.php?pag=1">Home</a></li>
			<li><a href="index.php?pag=2">Sobre</a></li>
			<li><a href="index.php?pag=3">Contatar</a></li>
			<li><a href="index.php?pag=4">localidade</a></li>
		</ul>
	</div>

	<div id="main">
		<div class="article">
			<h1>
				<?php
				include_once('function/administrar.php');
				@$preco = $_GET['pag'];
				administrar($preco);

				?>

			</h1>
		</div>
	</div> <!-- FIM DA DIV MAIN -->

	

	<div id="sidebar">

	</div> <!-- FIM DA DIV SIDEBAR -->

	<br>
	<div id="rodape">
		<p>
			Instituição de ensino: UNICESUMAR<br>
			Aluno: Willgner de Moraes Almeida<br>
			CURSO: Sistemas para Internet<br>
			Meu RA: 21006845-5
			
		</p>
	</div> <!-- FIM DA DIV RODAPE -->



</body>
</html>