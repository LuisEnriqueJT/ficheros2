<?php
$num = $_GET['numero'];
$usuario = $_GET['usuario'];
if (file_exists("TablasMultiplicar.txt")) {
	$gestor = fopen("TablasMultiplicar.txt", "a+");
	fwrite($gestor,":::".$usuario.":::\n");
	for ($i=1; $i<10 ; $i++) { 
		fwrite($gestor, date('y-m-d h:i:s')." :: {$num} * {$i} = ".$num*$i."\n");
	}
	fclose($gestor);
}else{
	echo "<h1>El archivo no existe</h2>";
}
?>