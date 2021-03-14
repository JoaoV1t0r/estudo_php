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

	//adição = +
	//subtração = -
	//multiplicação = *
	//divisão = /
	//módulo/resto = %

	$num1 = 44;
	$num2 = 32;
	$num1 += 2;
	echo "A soma de $num1 e $num2 é ". ($num1 + $num2);

	//incremento/decremento
	//$a++ / ++$a
	//$a-- / --$a
	$num2+=3;
	$num2--;
	echo "<br>A soma de $num1 e $num2 é ". ($num1 + $num2);
	?>	
	

</body>
</html>