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

	function calcularImposto($salario){
		if ($salario < 1903.98) {
			$imposto = 0/100;
		}else if($salario > 1903.99 && $salario < 2826.65){
			$imposto = 7.5/100;
		}else if($salario > 2826.66 && $salario < 3751.05){
			$imposto = 15/100;
		}else if($salario > 3751.06 && $salario < 4664.68){
			$imposto = 22.5/100;
		}else if($salario > 4664.69){
			$imposto = 27.5/100;
		}
		$imposto_salario = $salario * $imposto;
		return $imposto_salario;
	}
	echo calcularImposto(4000);
	

	?>	
	

</body>
</html>