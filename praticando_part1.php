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
	
	$idade = 19;
	$peso = 56;
	$pode_doar = ($idade >= 16 && $idade <= 69) && $peso <= 50 ? 'Pose doar sangue' : 'Não pode doar sangue'

	?>

	<h4>Pode doar sangue?</h4>
	<p><?= $pode_doar ?></p>

	
	

</body>
</html>