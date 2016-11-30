<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco_dados = 'odontotech_bd';

$conectar = mysqli_connect($servidor, $usuario, $senha, $banco_dados) or die(mysqli_error());
//mysqli_select_db($banco_dados) or die(mysqli_error());

?>
