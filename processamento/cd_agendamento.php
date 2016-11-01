<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$data = $_POST["data"];
$horario = $_POST["horario"];
$paciente = $_POST["paciente"];
$procedimento = $_POST["procedimento"];
$dentista = $_POST["dentista"];


if (($data == "") && ($horario == "") && ($paciente == "") && ($procedimento == "") && ($dentista == "")) {
    echo 'Preencha todos os campos!';
} else {
    $query1 = mysql_query("INSERT INTO agenda VALUES ('', '$data', '$horario', '$paciente', '$procedimento', '$dentista'");
}
?>