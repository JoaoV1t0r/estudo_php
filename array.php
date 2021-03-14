<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
	<style type="text/css">
		body{
    		font-family: Arial, Helvetica, sans-serif;
		}
	</style>
</head>
<body>

	<?php
	
	//Array sequencial(númerico)
	//$lista_frutas = ['Uva','Maça','Pera','Banana'];
	$lista_frutas = array('Uva','Maça','Pera','Banana');
	$lista_frutas[] = 'Abacaxi';
	echo "<pre>";
	var_dump($lista_frutas);
	echo "</pre>";
	echo "<br>";
	echo "<pre>";
	print_r($lista_frutas);
	echo "</pre>";

	//Associativo

	$lista_pessoa = array(
		'a' => 'João',
		'b' => 'Vitor',
		'c' => 'Silva' 
		);
	echo "<pre>";
	print_r($lista_pessoa);
	echo "</pre>";

	?>	
	

</body>
</html>