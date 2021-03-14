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
	
	$lista_coisas = array();
	$lista_coisas['frutas'] = array('Maça','Uva','Pera','Banana');
	$lista_coisas['pessoas'] = array('João','Vitor','Silva');
	echo "<pre>";
	print_r($lista_coisas);
	echo "</pre>";
	echo $lista_coisas['frutas'][1];

	?>	
	

</body>
</html>