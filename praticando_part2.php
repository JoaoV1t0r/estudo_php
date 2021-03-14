<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	
	<?php
	
	$mega_sena = array();

	for ($id = 0; $id < 6;$id++) { 
		$num_sorteio = rand(1,60);
		echo "$num_sorteio";
		echo "<br>";
		if (in_array($num_sorteio,$mega_sena)){
			$id--;
			continue;
		}
		array_push($mega_sena, $num_sorteio);
	}

	echo "<pre>";
	print_r($mega_sena);
	echo "</pre>";

	?>

</body>
</html>