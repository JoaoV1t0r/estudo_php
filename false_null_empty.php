<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
</head>
<body>
	
	<?php 
	
	//false = true/false (tipo de variável)
	//null e mepty = valores especiais
	$funcionario1 = null;
	$funcionario2 = '';
	$funcionario3 = false;

	//null
	if (is_null($funcionario3)) {
		echo "Null";
	}else{
		echo "Not null";
	}
	echo "<hr>";

	//empty = pode ser vazio, null ou false
	if (empty($funcionario3)) {
		echo "Empty";
	}else{
		echo "Not empty";
	}

	?>

</body>
</html>