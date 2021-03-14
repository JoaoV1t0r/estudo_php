<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	
	<?php
	
	$funcionarios = [
		array('nome' => 'João','salario' => 3000,'cargo' => 'Programador PHP'),
		array('nome' => 'Vitor','salario' => 2500),
		array('nome' => 'Silva','salario' => 3600)
	];


	echo "<pre>";
	print_r($funcionarios);
	echo "</pre>";

	foreach ($funcionarios as $idx => $funcionario) {
		foreach ($funcionario as $idx2 => $valor) {
		    echo "<p>$idx2 - $valor</p>";
		}
		echo "<hr>";

		//echo "<p>Id: $idx - Nome:$nome_funcionario</p>";
	}

	?>

</body>
</html>