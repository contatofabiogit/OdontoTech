<?php

session_start();
include_once("../processamento/seguranca.php");
include_once("../processamento/conexao.php");


header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$link = $_GET['link'];

$pag[1] = './main-dentista.php';
$pag[2] = './cadastrar-dentista.php';
$pag[3] = './buscar-dentista.php';
$pag[4] = './editar_dentista.php';
$pag[5] = './visualizar_dentista.php';
$pag[6] = './cadastrar-paciente.php';
$pag[7] = './visualizar_paciente.php';
$pag[8] = './buscar-paciente.php';


if (!empty($link)) {
    if (file_exists($pag[$link])) {
        include $pag[$link];
    } else {
        include './main-dentista.php';
    }
} else {
    include './main-dentista.php';
}
?>
