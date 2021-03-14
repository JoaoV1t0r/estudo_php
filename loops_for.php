<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	
	<?php  

	for ($num = 0;true;$num += 10) { 
		echo "<p>$num</p>";
		if ($num == 100) {
			break;
		}
	};
	//echo "<p>$num</p>";
	

	?>

</body>
</html>