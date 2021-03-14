<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style type="text/css">
		*{
			background-color: black;
		}
		h2,p{
			margin: 5px 0px;
			padding: 5px 0px;
			width: 60%;
			margin-left: auto;
			margin-right: auto;
			background-color: white;
			color: black;
			text-align: center;
		}
	</style>
</head>
<body>
	
	<?php
	
	$registros = array(
		array('titulo' => 'Título notícia 1','conteudo' => 'Conteudo notícia 1'),
		array('titulo' => 'Título notícia 2','conteudo' => 'Conteudo notícia 2'),
		array('titulo' => 'Título notícia 3','conteudo' => 'Conteudo notícia 3'),
		array('titulo' => 'Título notícia 4','conteudo' => 'Conteudo notícia 4')
	);

	/*
	$idx = 0;
	while ( $idx < count($registros)) {
		$titulo_atual = $registros[$idx]['titulo'];
		$conteudo_atual = $registros[$idx]['conteudo'];
		echo "<h2>$titulo_atual</h2>";
		echo "<p>$conteudo_atual</p>";
		$idx++;
	}
	*/

	for ($idx = 0; $idx < count($registros) ; $idx++) { 
		$titulo_atual = $registros[$idx]['titulo'];
		$conteudo_atual = $registros[$idx]['conteudo'];
		echo "<h2>$titulo_atual</h2>";
		echo "<p>$conteudo_atual</p>";
	}



	?>

</body>
</html>