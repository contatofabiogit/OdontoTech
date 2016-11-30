<?php

include ('../pdf/mpdf.php');

//Executando consulta sql
$resultado = mysql_query("SELECT * FROM procedimento");
//$linhas = mysql_fetch_array($resultado);

//while ($linhas = mysql_fetch_array($resultado)) {
$pagina = "
    <html>
        <head>
            <title>Relatório de Procedimentos</title>
        </head>
        <body>
          <h1> Relatório de Procedimentos</h1>
          Registros Encontrados: " . mysql_num_rows($resultado) . "
            ";
while ($linhas = mysql_fetch_array($resultado)):
    $pagina .= "
          <hr />
          Cód. = " . $linhas['id_procedimento'] . " <br />
          Tipo = " . $linhas['tipo'] . "<br />
          Valor = R$ " . $linhas['valor'] . "<br />
          Descrição = " . $linhas['descricao'] . "<br />
          <hr />
  ";
endwhile;
//}
$pagina .= "
        </body>
    </html>";

$arquivo = "relatorio_procedimentos.pdf";

$mpdf = new mPDF();

$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'I');
?>