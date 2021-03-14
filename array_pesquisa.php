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
	
	//in_array()
	//array_search()
	$lista_frutas = array('Maça','Uva','Pera','Banana');
	echo "<pre>";
	print_r($lista_frutas);
	echo "</pre>";
	//echo in_array('Pera', $lista_frutas);
	echo "<br>";
	//echo array_search('Pera',$lista_frutas);

	$lista_coisas = array(
		'frutas' => $lista_frutas,
		'pessoas' => ['João','Vitor','Silva']
	);
	echo array_search('Uva',$lista_coisas['frutas']);

	?>	
	

</body>
</html>