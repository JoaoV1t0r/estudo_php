<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP</title>
</head>
<body>
	
	<?php 

	//operadores de comparação/logicos
	$num = 0;
	while ($num  < 100) {
		$num += 10;
		if($num == 20 || $num == 80){
			continue;
		}
		echo "<p>$num</p>";
		/*if($num >= 100){
			echo "<p>$num</p>";
			break;
		}*/
	}

	?>

</body>
</html>