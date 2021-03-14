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


	//int => float/string
	//string => int/float/boolean
	//float => int/string
	//boolean => int/string


	//gettype() => tipo da variavel
	$valor = 10;
	$valor2 = (float) $valor;
	$valor3 = (string) $valor;
	echo gettype($valor);
	echo "<br>";
	echo gettype($valor2);
	echo "<br>";
	echo gettype($valor3);

	?>	
	

</body>
</html>