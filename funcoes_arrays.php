<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
</head>
<body>
	
	<?php 
	


	//is_array() = verifica se é um array
	echo "<h3>is_array()</h3>";
	$array = ['string'];
	$retorno = is_array($array);
	if ($retorno) {
		echo "Array";
	}else{
		echo "Not array";
	}
	echo "<hr>";
	//array_keys() = retorna todas as chaves do array
	echo "<h3>array_keys()</h3>";
	$keys = [
		1 => 'a',
		7 => 'b',
		18 => 'c'
	];
	echo "<pre>";
	print_r($keys);
	echo "<pre>";

	$chaves = array_keys($keys);
	echo "<pre>";
	print_r($chaves);
	echo "<pre>";

	echo "<hr>";
	//sort() = ordena um array e reajusta seus indices
	echo "<h3>sort()</h3>";
	$produtos = ['notebook','teclado','monitor','gabinete','placa mãe'];

	echo "<pre>";
	print_r($produtos);
	echo "<pre>";

	sort($produtos);//true ou false

	echo "<pre>";
	print_r($produtos);
	echo "<pre>";

	echo "<hr>";
	//asort() = ordena um array e preserva seus indices
	echo "<h3>asort()</h3>";
	$produtos2 = ['mesa','cadeira','armario','geladeira','fogão'];

	echo "<pre>";
	print_r($produtos2);
	echo "<pre>";

	asort($produtos2);//true ou false

	echo "<pre>";
	print_r($produtos2);
	echo "<pre>";

	echo "<hr>";
	//count() = conta a quantida de elementos em um array
	echo "<h3>count()</h3>";
	$quantidade_array = count($produtos);
	echo $quantidade_array;

	echo "<hr>";
	//array_merge() = funde um ou mais arrays
	echo "<h3>array_merge()</h3>";
	$loja = array_merge($produtos2,$produtos);

	echo "<pre>";
	print_r($loja);
	echo "<pre>";

	echo "<hr>";
	//explode() = divide uma string baseada em um delimitador
	echo "<h3>explode()</h3>";
	$string = '01/01/2021';
	$array_retorno = explode('/', $string);

	echo "<pre>";
	print_r($array_retorno);
	echo "<pre>";

	echo "<hr>";
	//implode() = junta elementos de um array em uma string
	echo "<h3>implode()</h3>";
	$array_implode = implode(',',$loja);
	echo $array_implode;

	?>

</body>