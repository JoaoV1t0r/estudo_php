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
	#operadores de comparação
	//igual ==
	//identico ===
	//diferente != ou <>
	//nao identico !==
	//menor <
	//maior >
	//menor/igual <=
	//maior/igual >=


	#operadores lógicos
	//E = && ou AND
	//OU = || ou OR
	//XOR = XOR
	//Negação = !

	$usuario_cartao = false;	
	$valor_compra = 100;
	$valor_frete = 50;
	if ($usuario_cartao && $valor_compra >= 100) {
		$valor_pagar = $valor_compra;
		echo "Frete Grátis<br>";
		echo "Valor a pagar: R$ $valor_pagar.00";

	} else{
		$valor_pagar = $valor_compra + $valor_frete;
		echo "Frete será pago<br>";
		echo "Valor a pagar: R$ $valor_pagar.00";
	}


	?>

	

</body>
</html>