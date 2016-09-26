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

        <title>OdontoTech - Cadastrar Dentista</title>
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
            include_once '../padroes/cabecalho_body.php';
            ?>

            <br>

            <div class="row form-group text-left">
                <div class="form-group text-left col-md-6">
                    <label>Nome Completo</label>
                    <br>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" value="<?php echo $resultado1['nome']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="login">Login</label>
                    <br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login" value="<?php echo $resultado1['login']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="senha">Senha</label>
                    <br>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" value="<?php echo $resultado1['senha']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="senha">Confirmação de Senha</label>
                    <br>
                    <input type="password" class="form-control" name="csenha" id="senha" placeholder="Senha" value="<?php echo $resultado1['senha'];?>" disabled/>
                </div>                    
                <div class="form-group text-left col-md-3">
                    <label name="telefone">Telefone</label>
                    <br>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $resultado1['telefone']; ?>" disabled onkeypress="mascara(this, '## #####-####')" maxlength="14"/>
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
                    <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" size="20" value="<?php echo $resultado1['rg']; ?>" disabled onkeypress="mascara(this, '##########-#')" maxlength="12"/>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="cpf">CPF</label>
                    <br>
                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" size="20" value="<?php echo $resultado1['cpf']; ?>" disabled onkeypress="mascara(this, '###.###.###-##')" maxlength="14"/>
                </div>

                <div class="form-group text-left col-md-3">
                    <label name="dt_nascimento">Data de Nascimento</label>
                    <br>
                    <input type="date" class="form-control" id="dt_nascimento" name="dt_nascimento" value="<?php echo $resultado1['dt_nascimento']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-6">
                    <label name="email">E-mail</label>
                    <br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $resultado1['email']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="nivelacesso">Nível de Acesso</label>
                    <br>
                    <select class='form-control' data-size='5' id='nivelacesso' name='nivelacesso' disabled>
                        <option value='Paciente'>Paciente</option>
                    </select>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="nacionalidade">Nacionalidade</label>
                    <br>
                    <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade" value="<?php echo $resultado2['nacionalidade']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="est_civil">Estado Civil</label>
                    <br>
                    <select class='form-control' data-size='5' id='est_civil' name='est_civil' disabled>
                        <option value='Selecione'
                                <?php
                                if ($resultado2['est_civil'] == 'Selecione') {
                                    echo 'Selected';
                                }
                                ?>
                                >Selecione</option>
                        
                        <option value='Solteiro(a)'
                                <?php
                                if ($resultado2['est_civil'] == 'Solteiro(a)') {
                                    echo 'Selected';
                                }
                                ?>
                                >Solteiro(a)</option>
                        
                        <option value='Casado(a)'
                                <?php
                                if ($resultado2['est_civil'] == 'Casado(a)') {
                                    echo 'Selected';
                                }
                                ?>
                                >Casado(a)</option>
                        
                        <option value='Separado(a)'
                                <?php
                                if ($resultado2['est_civil'] == 'Separado(a)') {
                                    echo 'Selected';
                                }
                                ?>
                                >Separado(a)</option>
                        
                        <option value='Divorciado(a)'
                                <?php
                                if ($resultado2['est_civil'] == 'Divorciado(a)') {
                                    echo 'Selected';
                                }
                                ?>
                                >Divorciado(a)</option>
                        
                        <option value='Viuvo(a)'
                                <?php
                                if ($resultado2['est_civil'] == 'Viuvo(a)') {
                                    echo 'Selected';
                                }
                                ?>
                                >Viuvo(a)</option>
                    </select>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="celular">Celular</label>
                    <br>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?php echo $resultado2['celular']; ?>" disabled onkeypress="mascara(this, '## #####-####')" maxlength="13"/>
                </div>
                <div class="form-group text-left col-md-6">
                    <label name="local_nascimento">Local de Nascimento</label>
                    <br>
                    <input type="text" class="form-control" id="local_nascimento" name="local_nascimento" placeholder="Local de Nascimento" value="<?php echo $resultado2['local_nascimento']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-6">
                    <label name="nome_responsavel">Nome Responsável</label>
                    <br>
                    <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" placeholder="Nome do Responsável" value="<?php echo $resultado2['nome_responsavel']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="tel_responsavel">Telefone do Responsável</label>
                    <br>
                    <input type="text" class="form-control" id="tel_responsavel" name="tel_responsavel" placeholder="Telefone do Responsável" value="<?php echo $resultado2['tel_responsavel']; ?>" disabled onkeypress="mascara(this, '## #####-####')" maxlength="13"/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="profissao">Profissão</label>
                    <br>
                    <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão" value="<?php echo $resultado2['profissao']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-6">
                    <label name="endereco">Endereço</label>
                    <br>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="<?php echo $resultado2['endereco']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="bairro">Bairro</label>
                    <br>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="<?php echo $resultado2['bairro']; ?>" disabled />
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="complemento">Complemento</label>
                    <br>
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" value="<?php echo $resultado2['complemento']; ?>" disabled/>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="estado">Estado</label>
                    <select class='form-control' id='estados' name='estado' disabled>
                        <option value="estado"
                                <?php
                                if ($resultado2['estado'] == 'estado') {
                                    echo 'Selected';
                                }
                                ?>
                                >Selecione</option> 
                        
                        <option value="ac"
                                <?php
                                if ($resultado2['estado'] == 'ac') {
                                    echo 'Selected';
                                }
                                ?>
                                >Acre</option>
                        
                        <option value="al"
                                <?php
                                if ($resultado2['estado'] == 'al') {
                                    echo 'Selected';
                                }
                                ?>
                                >Alagoas</option> 
                        
                        <option value="am"
                                <?php
                                if ($resultado2['estado'] == 'am') {
                                    echo 'Selected';
                                }
                                ?>
                                >Amazonas</option> 
                        
                        <option value="ap"
                                <?php
                                if ($resultado2['estado'] == 'ap') {
                                    echo 'Selected';
                                }
                                ?>
                                >Amapá</option> 
                        
                        <option value="ba"
                                <?php
                                if ($resultado2['estado'] == 'ba') {
                                    echo 'Selected';
                                }
                                ?>
                                >Bahia</option> 
                        
                        <option value="ce"
                                <?php
                                if ($resultado2['estado'] == 'ce') {
                                    echo 'Selected';
                                }
                                ?>
                                >Ceará</option>
                        
                        <option value="df"
                                <?php
                                if ($resultado2['estado'] == 'df') {
                                    echo 'Selected';
                                }
                                ?>
                                >Distrito Federal</option> 
                        
                        <option value="es"
                                <?php
                                if ($resultado2['estado'] == 'es') {
                                    echo 'Selected';
                                }
                                ?>
                                >Espírito Santo</option> 
                        
                        <option value="go"
                                <?php
                                if ($resultado2['estado'] == 'go') {
                                    echo 'Selected';
                                }
                                ?>
                                >Goiás</option> 
                        
                        <option value="ma"
                                <?php
                                if ($resultado2['estado'] == 'ma') {
                                    echo 'Selected';
                                }
                                ?>
                                >Maranhão</option> 
                        
                        <option value="mt"
                                <?php
                                if ($resultado2['estado'] == 'mt') {
                                    echo 'Selected';
                                }
                                ?>
                                >Mato Grosso</option> 
                        
                        <option value="ms"
                                <?php
                                if ($resultado2['estado'] == 'ms') {
                                    echo 'Selected';
                                }
                                ?>
                                >Mato Grosso do Sul</option>
                        
                        <option value="mg"
                                <?php
                                if ($resultado2['estado'] == 'mg') {
                                    echo 'Selected';
                                }
                                ?>
                                >Minas Gerais</option> 
                        
                        <option value="pa"
                                <?php
                                if ($resultado2['estado'] == 'pa') {
                                    echo 'Selected';
                                }
                                ?>
                                >Pará</option> 
                        
                        <option value="pb"
                                <?php
                                if ($resultado2['estado'] == 'pb') {
                                    echo 'Selected';
                                }
                                ?>
                                >Paraíba</option> 
                        
                        <option value="pr"
                                <?php
                                if ($resultado2['estado'] == 'pr') {
                                    echo 'Selected';
                                }
                                ?>
                                >Paraná</option> 
                        
                        <option value="pe"
                                <?php
                                if ($resultado2['estado'] == 'pe') {
                                    echo 'Selected';
                                }
                                ?>
                                >Pernambuco</option> 
                        
                        <option value="pi"
                                <?php
                                if ($resultado2['estado'] == 'pi') {
                                    echo 'Selected';
                                }
                                ?>
                                >Piauí</option> 
                        
                        <option value="rj"
                                <?php
                                if ($resultado2['estado'] == 'rj') {
                                    echo 'Selected';
                                }
                                ?>
                                >Rio de Janeiro</option> 
                        
                        <option value="rn"
                                <?php
                                if ($resultado2['estado'] == 'rn') {
                                    echo 'Selected';
                                }
                                ?>
                                >Rio Grande do Norte</option> 
                        
                        <option value="ro"
                                <?php
                                if ($resultado2['estado'] == 'ro') {
                                    echo 'Selected';
                                }
                                ?>
                                >Rondônia</option> 
                        
                        <option value="rs"
                                <?php
                                if ($resultado2['estado'] == 'rs') {
                                    echo 'Selected';
                                }
                                ?>
                                >Rio Grande do Sul</option> 
                        
                        <option value="rr"
                                <?php
                                if ($resultado2['estado'] == 'rr') {
                                    echo 'Selected';
                                }
                                ?>
                                >Roraima</option> 
                        
                        <option value="sc"
                                <?php
                                if ($resultado2['estado'] == 'sc') {
                                    echo 'Selected';
                                }
                                ?>
                                >Santa Catarina</option> 
                        
                        <option value="se"
                                <?php
                                if ($resultado2['estado'] == 'se') {
                                    echo 'Selected';
                                }
                                ?>
                                >Sergipe</option> 
                        
                        <option value="sp"
                                <?php
                                if ($resultado2['estado'] == 'sp') {
                                    echo 'Selected';
                                }
                                ?>
                                >São Paulo</option> 
                        
                        <option value="to"
                                <?php
                                if ($resultado2['estado'] == 'to') {
                                    echo 'Selected';
                                }
                                ?>
                                >Tocantins</option> 
                        
                    </select>
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="cidade">Cidade</label>
                    <br>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $resultado2['cidade']; ?>" disabled />
                </div>
                <div class="form-group text-left col-md-3">
                    <label name="numero">Número</label>
                    <br>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo $resultado2['numero']; ?>" disabled />
                </div>

                <input type="hidden" name="id" value="<?php echo $resultado1['id_pessoa']; ?>" />
                
                <!-- onkeypress="mascara(this, '## #####-####')" maxlength="14" -->
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
                        <button class="btn">
                            <a href="administrativo.php?link=8" type="submit" class="hvr-float-shadow"><img src="../images/botao-listar-render.png" class="cancelar">
                                <br>
                                <label name="cancelar">Listar</label>
                            </a>
                        </button>
                    </div>

                    <div class="btn col-md-2">
                        <a href="./administrativo.php?link=9&id=<?php echo $resultado1['id_pessoa']; ?>" class="hvr-float-shadow"><img src="../images/botao-editar-render.png" class="limpar">
                            <br>
                            <label>Editar</label>
                        </a>
                    </div>

                    <div class="btn col-md-2">
                        <button class="btn">
                            <a href="../processamento/apg_paciente.php?id=<?php echo $resultado1['id_pessoa']; ?>" class="hvr-float-shadow"><img src="../images/botao-excluir-render.png" class="limpar">
                                <br>
                                <label>Excluir</label>
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <?php
            include_once '../padroes/rodape_body.php';
            ?>

        </div>
    </body>

</html>