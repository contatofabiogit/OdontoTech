<?php

include ('../pdf/mpdf.php');

//Executando consulta sql
$resultado = mysql_query("SELECT a.*, b.nome, c.tipo FROM receita a
        INNER JOIN pessoa b  ON a.pessoa_id_pessoa= b.id_pessoa
        INNER JOIN procedimento c  ON a.procedimento_id_procedimento= c.id_procedimento");
//$linhas = mysql_fetch_assoc($resultado);

//while ($linhas = mysql_fetch_array($resultado)) {
$pagina = "
    <html>
        <head>
            <title>Relatório de Receita</title>
        </head>
        <body>
          <h1> Relatório de Receita</h1>
          Registros Encontrados: " . mysql_num_rows($resultado) . "
            ";
while ($linhas = mysql_fetch_array($resultado)):
    $pagina .= "
          <hr />
          Cód. = " . $linhas['id_receita'] . " <br />
          Paciente = " . $linhas['nome'] . "<br />          
          Procedimento = " . $linhas['tipo'] . "<br />
          Desconto = " . $linhas['desconto'] . "%<br />
          Data de Pagamento = " . $linhas['dt_pagamento'] . "<br />
          
          
          <hr />
  ";
endwhile;
//}
$pagina .= "
        </body>
    </html>";

$arquivo = "relatorio_receita.pdf";

$mpdf = new mPDF();

$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');
?>