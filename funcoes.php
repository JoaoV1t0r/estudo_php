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

	function helloWord(){
		echo "<p>Hello Word</p>";
	}
	helloWord();

	function calcularArea($largura, $comprimento){
		$area = $largura * $comprimento;
		echo "<p>$area</p>";
	}
	calcularArea(2,5);

	?>	
	

</body>
</html>