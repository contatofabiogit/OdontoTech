<?php

session_start();
include_once '../processamento/conexao.php';
include_once '../processamento/seguranca.php';

$id = $_GET["id"];

$query1 = mysql_query("DELETE FROM pessoa WHERE id_pessoa = '$id'");

header("Location: ../dentista/administrativo.php?link=11");
?>