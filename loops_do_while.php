<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	
	<?php  


	$num = 0;
	do{
		echo "<p>$num</p>";
		$num += 10;
		if ($num == 100) {
			echo "<p>$num</p>";
		}

	}while($num < 100);

	

	?>

</body>
</html>