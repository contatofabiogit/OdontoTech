<?php

session_start();
include_once './conexao.php';
include_once './seguranca.php';

$paciente = $_POST['paciente'];
$procedimento = $_POST['procedimento'];
$desconto = $_POST['desconto'];
$dt_pagamento = $_POST['dt_pagamento'];


if (($paciente == "") && ($procedimento == "") && ($desconto == "") && ($dt_pagamento == "")) {
    echo 'Preencha todos os campos!';
} else {


    $query1 = mysql_query("INSERT INTO receita VALUES ('', '$desconto', '$dt_pagamento', '$procedimento', '$paciente')");
    
    header("Location: ../dentista/administrativo.php?link=1");
}
?>