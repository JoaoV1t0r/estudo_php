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

	$texto = 'curso completo de PHP';
	echo "$texto";
	echo "<br>";
	//strtolower() = transforma todas as caracteres em minúsculo
	echo strtolower($texto);
	echo "<br>";
	//strtoupper() = transforma todas as caracteres em maiúsculo
	echo strtoupper($texto);
	echo "<br>";
	//ucfirst() = transforma a primeira caractere da string em maiúsculo
	echo ucfirst($texto);
	echo "<br>";
	//strlen() = conta a quantidade de caracteres
	echo strlen($texto);
	echo "<br>";
	//str_replace() = substitui carateres dentro da string
	echo str_replace('PHP','Javascript',$texto);
	echo "<br>";
	//subxtr() = retorna parte de uma string
	echo substr($texto,0,5);
	echo "<br>";

	?>	
	

</body>
</html>