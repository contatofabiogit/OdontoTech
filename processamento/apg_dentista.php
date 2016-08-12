<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';


$id = $_GET["id"];

$query1 = mysql_query("DELETE FROM pessoa WHERE id_pessoa = '$id'");

$query2 = mysql_query("DELETE FROM dentista WHERE pessoa_id_pessoa = '$id'");

    header("Location: ../administrativo.php?link=3");
?>
