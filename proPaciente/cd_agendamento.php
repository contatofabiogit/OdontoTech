<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$data = $_POST['data'];
$hora = $_POST['hora'];
$paciente = $_POST['paciente'];
$procedimento = $_POST['procedimento'];
$dentista = $_POST['dentista'];


if (($data == "") && ($hora == "") && ($paciente == "") && ($procedimento == "") && ($dentista == "")) {
    echo 'Preencha todos os campos!';
} else {
    $query1 = mysql_query("INSERT INTO agenda VALUES ('', '$data', '$hora', '$procedimento', '$dentista', '$paciente')");
    header("Location: ../dentista/administrativo.php?link=1");
}
?>