<?php
session_start();
include_once '../processamento/conexao.php';
include_once '../processamento/seguranca.php';
?>

<!-- Início Modal Usuário-->
<div class="modal fade" id="Modal-Usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title alert alert-danger" role="alert" id="myModalLabel"><strong>ATENÇÃO!!!</strong></h4> </div>
            <div class="modal-body">
                <div class="modal-container">
                    <div class="row row-centered">
                        <div class="alert alert-info" role="alert"><strong>Deseja mesmo excluir este usuário?</strong></div>
                        <a href="
                        <?php
                        $id = $_GET["id"];

                        $query1 = mysql_query("DELETE FROM pessoa WHERE id_pessoa = '$id'");

                        $query2 = mysql_query("DELETE FROM dentista WHERE pessoa_id_pessoa = '$id'");

                        header("Location: ../administrativo.php?link=3");
                        ?>
                           " class="btn btn-default">Sim</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fim Modal Usuário-->


