<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
</head>
<body>

	<?php 
	
	//string
	$nome = 'João Vitor da Silva';
	// variavel int
	$idade = 19;
	//var float
	$peso = 108.7;
	//var boolean
	$dirige = true;
	if ($dirige == true) {
		$dirige = 'Sim';
	}else{
		$dirige = 'Não';
	}
	?>

	<h1>Ficha Cadastral</h1>
	<br>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Dirige: <?= $dirige ?></p>
</body>
</html>