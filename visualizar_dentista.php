<?php
$id = $_GET['id'];

//Executando consulta sql
$result1 = mysql_query("SELECT * FROM pessoa WHERE id_pessoa='$id' LIMIT 1");
$result2 = mysql_query("SELECT * FROM dentista WHERE pessoa_id_pessoa='$id' LIMIT 1");

$resultado1 = mysql_fetch_assoc($result1);
$resultado2 = mysql_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <?php
        include_once './padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Cadastrar Dentista</title>
        <!-- Location-->
        <link rel="stylesheet" href="css/main-admin.css">
        <link rel="stylesheet" href="css/main-hover.css">
        <link rel="stylesheet" href="css/cadastrar-dentista.css">

        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                jQuery(function ($) {
                    $("#cep").mask("99.999-99");
                    $("#cro").mask("99999");
                    $("#dtnascimento").mask("99/99/9999", {
                        placeholder: "dd/mm/aaaa"
                    });
                    $("#telefone").mask("(99) 9.9999-9999");
                    $("#cpf").mask("99999999999");
                    $("#rg").mask("99999999999");
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <br>
            <header>Sistema Odontológico - Visualizar Dentista</header>
            <?php
            include_once './padroes/cabecalho_body.php';
            ?>

            <br>

            <div class="row form-group text-left">

                <div class="form-group text-left col-md-1">
                    <label>Id</label>
                    <br>
                    <input type="text" name="id" class="form-control" id="nome" placeholder="Id" value="<?php echo $resultado1['id_pessoa']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-8">
                    <label>Nome Completo</label>
                    <br>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" value="<?php echo $resultado1['nome']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="cro">CRO</label>
                    <br>
                    <input type="text" name="cro" class="form-control" id="cro" placeholder="CRO" value="<?php echo $resultado2['cro']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="especializacao">Especialização</label>
                    <br>
                    <input type="text" class="form-control" name="especializacao" id="especializacao" placeholder="Especialização" value="<?php echo $resultado2['especializacao']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="login">Login</label>
                    <br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login" value="<?php echo $resultado1['login']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="senha">Senha</label>
                    <br>
                    <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" value="<?php echo $resultado1['senha']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="telefone">Telefone</label>
                    <br>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $resultado1['telefone']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="text">Sexo</label>
                    <br>
                    <select class="form-control" id="sexo" name="sexo" value="<?php echo $resultado1['sexo']; ?>" disabled>
                        <option>Selecione</option>
                        <option value="M"

                                <?php
                                if ($resultado1['sexo'] == 'M') {
                                    echo 'Selected';
                                }
                                ?>

                                 >Masculino</option>
                        <option value="F"

                                <?php
                                if ($resultado1['sexo'] == 'F') {
                                    echo 'Selected';
                                }
                                ?>

                                >Feminino</option>
                    </select>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="rg">RG</label>
                    <br>
                    <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" size="20" value="<?php echo $resultado1['rg']; ?>" disabled/>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="cpf">CPF</label>
                    <br>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" size="20" value="<?php echo $resultado1['cpf']; ?>" disabled/>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="dt_nascimento">Data de Nascimento</label>
                    <br>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $resultado1['dt_nascimento']; ?>" disabled/>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="nivelacesso">Nível de Acesso</label>
                    <br>
                    <select class='form-control' data-size='5' id='nivelacesso' name='nivelacesso' value="<?php echo $resultado1['nivel_acesso']; ?>" disabled>
                        <option value='Dentista'>Dentista</option>
                    </select>
                </div>

                <div class="form-group text-left col-md-6">
                    <label name="email">E-mail</label>
                    <br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $resultado1['email']; ?>" disabled/>
                </div>

                <input type="hidden" name="id" value="<?php echo $resultado1['id_pessoa']; ?>" disabled/>

            </div>
            <div class="row">
                <div class="homePrincipal col-md-4 text-center ">
                    <a href="main-dentista.php" class="hvr-grow-shadow"><img src="images/botao-home-render.png" class="home">
                        <br>
                        <label name="home">Home</label>
                    </a>
                </div>
                <div class="salvarPrincipal col-md-6 text-center">
                    <div class="btn col-md-2">
                        <button type="submit" class="btn">
                            <a href="administrativo.php?link=3" type="submit" class="hvr-float-shadow"><img src="images/botao-salvar-render.png" class="salvar">
                                <br>
                                <label name="salvar">Salvar</label>
                            </a>
                        </button>
                    </div>

                    <div class="btn col-md-2">
                        <button class="btn">
                            <a href="#" type="submit" class="hvr-float-shadow" data-toggle="modal" data-target="#Modal-Usuario"><img src="images/botao-cancelar-render.png" class="cancelar">
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
                                                <a href="main-admin.php" class="btn btn-default">Sim</a>
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
                            <a class="hvr-float-shadow"><img src="images/botao-limpar-render.png" class="limpar">
                                <br>
                                <label name="limpar">Limpar</label>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <?php
            include_once './padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>