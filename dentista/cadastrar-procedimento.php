<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Cadastrar Procedimento</title>
        <!-- Location-->
        <link rel="stylesheet" href="../css/main-admin.css">
        <link rel="stylesheet" href="../css/main-hover.css">
        <link rel="stylesheet" href="../css/cadastrar-dentista.css">

        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script language="JavaScript">
            /*
             A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
             onkeypress="mascara(this, '## ####-####')"
             onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
             O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
             no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
             para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
             para o RG '##.###.###.# [40.123.456.7]
             para o CPF '###.###.###.##' [789.456.123.10]
             Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 
             
             lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
             <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
             neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
             */

            function mascara(t, mask) {
                var i = t.value.length;
                var saida = mask.substring(1, 0);
                var texto = mask.substring(i)
                if (texto.substring(0, 1) != saida) {
                    t.value += texto.substring(0, 1);
                }
            }
        </script>
    </head>

    <body>
        <div class="container">
            <br>
            <header>Sistema Odontológico - Cadastrar Procedimento</header>
            <?php
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>
            <form method="POST" action="../processamento/cd_dentista.php">
                <div class="row form-group text-left">
                    <div class="form-group text-left col-md-6">
                        <label>Tipo Procedimento</label>
                        <br>
                        <input type="text" name="tipo_procedimento" class="form-control" id="procedimento" placeholder="Procedimento" required/>
                    </div>
                    <div class="form-group text-left col-md-6">
                        <label>Valor</label>
                        <br>
                        <input type="text" name="valor" class="form-control" id="desconto" placeholder="Desconto" required/>
                    </div>
                    <div class="form-group text-left col-md-12">
                        <label>Descrição</label>
                        <br>
                        <textarea class="form-control" rows="4" name="descricao"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="homePrincipal col-md-4 text-center ">
                        <a href="administrativo.php?link=1" class="hvr-grow-shadow"><img src="../images/botao-home-render.png" class="home">
                            <br>
                            <label name="home">Home</label>
                        </a>
                    </div>
                    <div class="salvarPrincipal col-md-6 text-center">
                        <div class="btn col-md-2">
                            <button type="submit" class="btn">
                                <a href="../processamento/cd_dentista.php" type="submit" class="hvr-float-shadow"><img src="../images/botao-salvar-render.png" class="salvar">
                                    <br>
                                    <label name="salvar">Salvar</label>
                                </a>
                            </button>
                        </div>

                        <div class="btn col-md-2">
                            <button class="btn">
                                <a href="#" type="submit" class="hvr-float-shadow" data-toggle="modal" data-target="#Modal-Usuario"><img src="../images/botao-cancelar-render.png" class="cancelar">
                                    <br>
                                    <label name="cancelar">Cancelar</label>
                                </a>
                            </button>

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
                                                    <div class="alert alert-info" role="alert"><strong>Deseja mesmo sair desta página?</strong></div>
                                                    <a href="administrativo.php?link=1" class="btn btn-default">Sim</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Usuário-->

                        </div>

                        <div class="btn col-md-2">
                            <button type="reset" class="btn">
                                <a class="hvr-float-shadow"><img src="../images/botao-limpar-render.png" class="limpar">
                                    <br>
                                    <label name="limpar">Limpar</label>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <?php
            include_once '../padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>