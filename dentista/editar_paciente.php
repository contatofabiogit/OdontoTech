<?php
$id = $_GET['id'];

//Executando consulta sql
$result1 = mysql_query("SELECT * FROM pessoa WHERE id_pessoa='$id' LIMIT 1");
$result2 = mysql_query("SELECT * FROM paciente WHERE pessoa_id_pessoa='$id' LIMIT 1");

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
            <header>Sistema Odontológico - Editar Paciente</header>
            <?php
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>
            <form method="POST" action="../processamento/ed_paciente.php.php">

                <div class="row form-group text-left">
                    <div class="form-group text-left col-md-6">
                        <label>Nome Completo</label>
                        <br>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="login">Login</label>
                        <br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="senha">Senha</label>
                        <br>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="senha">Confirmação de Senha</label>
                        <br>
                        <input type="password" class="form-control" name="csenha" id="senha" placeholder="Senha" required/>
                    </div>                    
                    <div class="form-group text-left col-md-3">
                        <label name="telefone">Telefone</label>
                        <br>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required onkeypress="mascara(this, '## #####-####')" maxlength="14"/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="text">Sexo</label>
                        <br>
                        <select class="form-control" id="sexo" name="sexo" required>
                            <option>Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="rg">RG</label>
                        <br>
                        <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" size="20" required onkeypress="mascara(this, '##########-#')" maxlength="12"/>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="cpf">CPF</label>
                        <br>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" size="20" required onkeypress="mascara(this, '###.###.###-##')" maxlength="14"/>
                    </div>

                    <div class="form-group text-left col-md-3">
                        <label name="dt_nascimento">Data de Nascimento</label>
                        <br>
                        <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" required/>
                    </div>
                    <div class="form-group text-left col-md-6">
                        <label name="email">E-mail</label>
                        <br>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="nivelacesso">Nível de Acesso</label>
                        <br>
                        <select class='form-control' data-size='5' id='nivelacesso' name='nivelacesso' required>
                            <option value='Paciente'>Paciente</option>
                        </select>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="nacionalidade">Nacionalidade</label>
                        <br>
                        <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="est_civil">Estado Civil</label>
                        <br>
                        <select class='form-control' data-size='5' id='est_civil' name='est_civil' required>
                            <option value='Selecione'>Selecione</option>
                            <option value='Solteiro(a)'>Solteiro(a)</option>
                            <option value='Casado(a)'>Casado(a)</option>
                            <option value='Separado(a)'>Separado(a)</option>
                            <option value='Divorciado(a)'>Divorciado(a)</option>
                            <option value='Viuvo(a)'>Viuvo(a)</option>
                        </select>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="celular">Celular</label>
                        <br>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" required onkeypress="mascara(this, '## #####-####')" maxlength="13"/>
                    </div>
                    <div class="form-group text-left col-md-6">
                        <label name="local_nascimento">Local de Nascimento</label>
                        <br>
                        <input type="text" class="form-control" id="local_nascimento" name="local_nascimento" placeholder="Local de Nascimento" required/>
                    </div>
                    <div class="form-group text-left col-md-6">
                        <label name="nome_responsavel">Nome Responsável</label>
                        <br>
                        <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" placeholder="Nome do Responsável" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="tel_responsavel">Telefone do Responsável</label>
                        <br>
                        <input type="text" class="form-control" id="tel_responsavel" name="tel_responsavel" placeholder="Telefone do Responsável" required onkeypress="mascara(this, '## #####-####')" maxlength="13"/>
                    </div>
                    <div class="form-group text-left col-md-4">
                        <label name="profissao">Profissão</label>
                        <br>
                        <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão" required/>
                    </div>
                    <div class="form-group text-left col-md-5">
                        <label name="endereco">Endereço</label>
                        <br>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required/>
                    </div>
                    <div class="form-group text-left col-md-2">
                        <label name="bairro">Bairro</label>
                        <br>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required />
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="complemento">Complemento</label>
                        <br>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" required/>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="estado">Estado</label>
                        <select class='form-control' id='estados' name='estado' required>
                            <option value="estado">Selecione</option> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
                        </select>
                    </div>
                    <div class="form-group text-left col-md-2">
                        <label name="cidade">Cidade</label>
                        <br>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required />
                    </div>
                    <div class="form-group text-left col-md-2">
                        <label name="numero">Número</label>
                        <br>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" required />
                    </div>

                    <!-- onkeypress="mascara(this, '## #####-####')" maxlength="14" -->
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
                                <a href="./administrativo.php?link=8" type="submit" class="hvr-float-shadow"><img src="../images/botao-salvar-render.png" class="salvar">
                                    <br>
                                    <label name="salvar">Salvar</label>
                                </a>
                            </button>
                        </div>

                        <div class="btn col-md-2">
                            <button class="btn">
                                <a href="administrativo.php?link=3" type="submit" class="hvr-float-shadow"><img src="../images/botao-listar-render.png" class="cancelar">
                                    <br>
                                    <label name="cancelar">Listar</label>
                                </a>
                            </button>

                        </div>

                        <div class="btn col-md-2">
                            <button class="btn">
                                <a href="../processamento/apg_dentista.php?id=<?php echo $resultado1['id_pessoa']; ?>" class="hvr-float-shadow"><img src="../images/botao-excluir-render.png" class="limpar">
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