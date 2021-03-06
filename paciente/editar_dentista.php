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
        include_once '../padroes/cabecalho_head.php';
        ?>

        <title>OdontoTech - Editar Dentista</title>
        <!-- Location-->
        <link rel="stylesheet" href="../css/main-admin.css">
        <link rel="stylesheet" href="../css/main-hover.css">
        <link rel="stylesheet" href="../css/cadastrar-dentista.css">

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
                    $("#cpf").mask("999.999.999-99");
                    $("#rg").mask("9999999999-9");
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <br>
            <header>Sistema Odontológico - Editar Dentista</header>
            <?php
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>
            <form method="POST" action="../processamento/ed_dentista.php">

                <div class="row form-group text-left">
                    <div class="form-group text-left col-md-6">
                        <label>Nome Completo</label>
                        <br>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" required value="<?php echo $resultado1['nome']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-2">
                        <label>CRO</label>
                        <br>
                        <input type="text" name="cro" class="form-control" id="cro" placeholder="CRO" required value="<?php echo $resultado2['cro']; ?>" onkeypress="mascara(this, '#####')" maxlength="5"/>
                    </div>
                    <div class="form-group text-left col-md-4">
                        <label>Especialização</label>
                        <br>
                        <input type="text" name="especializacao" class="form-control" id="especializacao" placeholder="Especialização" required value="<?php echo $resultado2['especializacao']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="login">Login</label>
                        <br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" required value="<?php echo $resultado1['login']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="senha">Senha</label>
                        <br>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required value="<?php echo $resultado1['senha']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="senha">Confirmação de Senha</label>
                        <br>
                        <input type="password" class="form-control" name="csenha" id="senha" placeholder="Senha" value="<?php echo $resultado1['senha']; ?>" required/>
                    </div>                    
                    <div class="form-group text-left col-md-3">
                        <label name="telefone">Telefone</label>
                        <br>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required onkeypress="mascara(this, '## #####-####')" maxlength="13" value="<?php echo $resultado1['telefone']; ?>"/>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="text">Sexo</label>
                        <br>
                        <select class="form-control" id="sexo" name="sexo" value="<?php echo $resultado1['sexo']; ?>">
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
                        <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" size="20" required onkeypress="mascara(this, '##########-#')" maxlength="12" value="<?php echo $resultado1['rg']; ?>"/>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="cpf">CPF</label>
                        <br>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" size="20" required onkeypress="mascara(this, '###.###.###-##')" maxlength="14" value="<?php echo $resultado1['cpf']; ?>"/>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="dt_nascimento">Data de Nascimento</label>
                        <br>
                        <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" required value="<?php echo $resultado1['dt_nascimento']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-6">
                        <label name="email">E-mail</label>
                        <br>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required value="<?php echo $resultado1['email']; ?>"/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="nivelacesso">Nível de Acesso</label>
                        <br>
                        <select class='form-control' data-size='5' id='nivelacesso' name='nivelacesso' required>
                            <option value='Dentista'>Dentista</option>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $resultado1['id_pessoa']; ?>" />

                </div>
                <div class="row">
                    <div class="homePrincipal col-md-4 text-center ">
                        <a href="./administrativo.php?link=1" class="hvr-grow-shadow"><img src="../images/botao-home-render.png" class="home">
                            <br>
                            <label name="home">Home</label>
                        </a>
                    </div>
                    <div class="salvarPrincipal col-md-6 text-center">

                        <div class="btn col-md-2">
                            <button type="submit" class="btn">
                                <a href="./administrativo.php?link=3" type="submit" class="hvr-float-shadow">
                                    <img src="../images/botao-salvar-render.png" class="salvar">
                                    <br>
                                    <label name="salvar">Salvar</label>
                                </a>
                            </button>
                        </div>

                        <div class="btn col-md-2">
                            <button class="btn">
                                <a href="administrativo.php?link=3" type="submit" class="hvr-float-shadow">
                                    <img src="../images/botao-listar-render.png" class="cancelar">
                                    <br>
                                    <label name="cancelar">Listar</label>
                                </a>
                            </button>

                        </div>

                        <div class="btn col-md-2">
                            <button class="btn">
                                <a href="../processamento/apg_dentista.php?id=<?php echo $resultado1['id_pessoa']; ?>" class="hvr-float-shadow">
                                    <img src="../images/botao-excluir-render.png" class="limpar">
                                    <br>
                                    <label name="limpar">Excluir</label>
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