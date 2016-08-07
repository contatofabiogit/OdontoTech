<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco_dados = 'odontotech_bd';

$conectar = @mysql_connect($servidor, $usuario, $senha) or die("Erro na conexãos");
$sql_banco = mysql_select_db($banco_dados, $conectar);
?>