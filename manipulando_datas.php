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
	/*
	//date() = recupera a data atual
	//conferir documentação
	echo date('d/m/Y H:i');
	echo "<br>";
	//date_default_timezone_get() = recupera o timezone defalt da aplicação
	echo date_default_timezone_get();
	echo "<br>";
	//date_default_timezone_set() = atualiza o timezone defalt da aplicação
	date_default_timezone_set('America/Sao_Paulo');
	echo date_default_timezone_get();
	echo "<br>";
	echo date('d/m/Y H:i');
	echo "<br>";
	*/
	//strtotime() = tranforma datas textuais em segundos
	$data_inicial = '2020-12-30';
	$data_final = '2021-01-30';
	//timestamp => segundos
	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	echo "<br>";
	echo $data_inicial . ' - ' . $time_inicial;
	$diferenca_times = $time_final - $time_inicial;
	$segundos_dia = 24 * 60 * 60;
	$diferenca_final = $diferenca_times / $segundos_dia;	
	echo "<br>";
	echo "A diferença de dias é de $diferenca_final dias";

	?>	
	

</body>
</html>