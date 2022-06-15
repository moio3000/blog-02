<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blog";

try {
	$connect = new PDO("mysql:host=" . $host . "; dbname=" . $dbname, $user, $pass);

	//echo "Conexão realizada com sucesso!";

} catch (Exception $e) {
	//echo "Erro: " . $e; //erro não deve ser visivel para usuario

}

?>
