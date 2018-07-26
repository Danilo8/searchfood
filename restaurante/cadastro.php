<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food - Cadastrar Restaurante">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Cadastrar Restaurante</title>
        <!--Icon-->
        <link rel="shortcut icon" href="../img/icon/icon.ico" />

        <!--cdn Bootstrap CSS File-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!--CSS.min File-->
        <link rel="stylesheet" href="../css/style-cover.min.css">
        <link rel="stylesheet" href="../css/form.min.css">
        <link rel="stylesheet" href="../css/step-progressbar.css">
        <link rel="stylesheet" href="../css/button.min.css">

        <!--Font file-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Jquery and Bootstrap Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--Script de Validação-->
        <script src="../js/validacao.js"></script>

        <!--Mask JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="../js/mask.min.js"></script>
    </head>
    <style>
        /*
        * Código CSS para estilização da página
        * Definindo um Background para a tela
        */
        #banner{background:url(../img/background/bar2.jpg)center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
        /*
        * Definindo estilo para input file
        */
        .btn-file{position:relative;overflow:hidden}.btn-file input[type=file]{position:absolute;top:0;right:0;min-width:100%;min-height:100%;font-size:100px;text-align:right;filter:alpha(opacity=0);opacity:0;outline:0;background:#fff;cursor:inherit;display:block}#img-upload{width:100%}
    </style>
    <body style="font-family: 'Roboto', sans-serif;">
        <!--Cover Container-->
        <div class="cover-container d-flex w-100  mx-0 flex-column">
            <!--Header-->
            <header style="background-color: #d20911" class="pt-3 pb-2 px-5">
                <div class="inner">
                    <!--Logo-->
                    <h2 style="cursor: pointer;color: white" onclick="window.location = '../index.php'" class="masthead-brand">
                        <img height="50" src="../img/logo/Logo_Search_Food_Branca.png">
                        Search Food
                    </h2><!--/Logo-->
                    <nav class="nav nav-masthead justify-content-center pr-5 mr-5">
                        <a class="nav-link" href="../index.php">Home</a>
                        <a class="nav-link active" href="restaurante/cadastro.php">Cadastrar Restaurante</a>
                        <a class="nav-link" href="../contato.php">Contato</a>
                        <a class="nav-link" href="#">Entrar ou Cadastrar</a>
                    </nav>
                </div>
            </header><!--/Header-->
            
            <div id="banner" class="container-fluid p-0">
                <div class="pb-5 pt-5" style="background-color: rgba(0,0,0,0.600);">
                    <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <span style="font-size: 40px;color: white">
                            <i style="font-size: 50px" class="fa fa-line-chart"></i><br>
                            Cadastre-se agora e aumente o faturamento do seu restaurante!
                        </span>
                    </div>
                </div>
            </div>

            <div id="topo" class="container mt-5 text-center">
                <h2 style="margin-bottom: 50px" class="text-center">Complete todos os passos para fazer parte do Search Food:</h2>
                <ol class="progtrckr" data-progtrckr-steps="4">
                    <li style="cursor: pointer;" id="step1" class="progtrckr-done">Dados do Proprietario</li>
                    <li style="cursor: pointer;" id="step2" class="progtrckr-todo">Dados do Restaurante</li>
                    <li style="cursor: pointer;" id="step3" class="progtrckr-todo">Dados da Conta</li>
                    <li style="cursor: pointer;" id="step4" class="progtrckr-todo">Quase lá</li>
                </ol>
            </div>
            <form id="cadastro_restaurante" action="cadastro.php" method="post" style="margin-top: 100px;margin-bottom: 100px;margin-right: 28%;margin-left: 28%;">
                <div class="text-center">
                    <span class="text-muted mt-5">Todos os campos são obrigatorios!</span>
                </div>
                <div style="display: none;" id="dados_proprietario">
                    <h3 class="mt-3 mb-5 text-center">Dados do Proprietario</h3>
                    <div class="form-group">
                        <label for="proprietario">Nome do Proprietario:</label>
                        <input type="text" class="form-control" name="proprietario" id="proprietario" placeholder="Nome do Proprietario">
                        <span style="font-size: 15px" id="proprietario_valido"></span>
                    </div>
                    <div class="form-group">
                        <label for="email_proprietario">Email:</label>
                        <input type="email" class="form-control" name="email_proprietario" id="email_proprietario" placeholder="Email pessoal para contato">
                        <span style="font-size: 15px" id="email_proprietario_valido"></span>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF do Proprietario" maxlength="14">
                        <span style="font-size: 15px" id="cpf_valido"></span>
                    </div>
                    <div class="form-group">
                        <label for="telefone_proprietario">Celular:</label>
                        <input type="text" class="form-control" name="telefone_proprietario" id="telefone_proprietario" placeholder="Celular pessoal para contato" maxlength="14">
                        <span style="font-size: 15px" id="telefone_proprietario_valido"></span>
                    </div>
                    <div class="form-group">
                        <button style="cursor: not-allowed;" type="button" id="button" class="btn-block btn1 disabled">
                            Continuar
                        </button>
                    </div>
                </div>
                <div style="display: block;" id="restaurante">
                    <h3 class="mt-3 mb-5 text-center">Dados do Restaurante</h3>
                    <div class="form-group">
                        <label for="nome_restaurante">Nome do Restaurante:</label>
                        <input type="text" class="form-control" name="nome_restaurante" id="nome_restaurante" placeholder="Nome do Restaurante">
                        <span style="font-size: 15px" id="nome_restaurante_valido"></span>
                    </div>
                    <div class="form-group">
                        <label for="cnpj">CNPJ:</label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ" maxlength="18">
                        <span style="font-size: 15px" id="cnpj_valido"></span>
                    </div>
                    <div class="form-group">
                        <label for="telefone_restaurante">Telefone do Restaurante:</label>
                        <input type="text" class="form-control" name="telefone_restaurante" id="telefone_restaurante" placeholder="Telefone do Restaurante" maxlength="14">
                        <span style="font-size: 15px" id="telefone_restaurante_valido"></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço do Restaurante">
                            </div>
                            <div class="col-3">
                                <label for="numero">Nº:</label>
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Nº">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control custom-select">

                                </select>
                            </div>
                            <div class="col">
                                <label for="cidade">Cidade:</label>
                                <select name="cidade" id="cidade" class="form-control custom-select">

                                </select>
                            </div>
                            <div class="col-4">
                                <label for="cep">CEP:</label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="cursor: not-allowed" type="button" id="button" class="btn-block mt-4 disabled">Continuar</button>
                    </div>
                    <div class="form-group">
                        <button type="button" id="button" class="btn-block vtr1">Voltar</button>
                    </div>
                </div>
                <div style="display: none;" id="conta">
                    <h3 class="mt-3 mb-5 text-center">Dados da Conta</h3>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email de acesso">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <label for="confirma_senha">Confirme a Senha:</label>
                        <input type="password" class="form-control" name="confirma_senha" id="confirma_senha" placeholder="Confirme a Senha">
                    </div>
                    <div class="form-group">
                        <button type="button" id="button" class="btn-block mt-4">Continuar</button>
                    </div>
                    <div class="form-group">
                        <button type="button" id="button" class="btn-block">Voltar</button>
                    </div>
                </div>
                <div style="display: none;" id="persolizacao">
                    <h3 class="mt-3 mb-5 text-center">Quase lá</h3>
                    <div style="margin-left: 20%" class="form-group col-7">
                        <label for="imgInp">Foto de Capa</label>
                        <img class="img-fluid" id='img-upload'/>
                        <div class="input-group">
                            <span class="btn btn-default btn-file btn-block">
                                <button class="btn btn-primary">
                                    <i style="font-size: 20px" class="fa fa-cloud-upload"></i>
                                    Escolha uma Imagem
                                    <input type="file" id="imgInp" name="foto_capa">
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="tipo_cozinha">Tipo de Cozinha:</label>
                        <select name="tipo_cozinha" id="tipo_cozinha" class="form-control custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" id="button" class="btn-block mt-4">Cadastrar</button>
                    </div>
                    <div class="form-group">
                        <button type="button" id="button" class="btn-block">Voltar</button>
                    </div>
                </div>
            </form>
        </div><!--/Cover Container-->

        <!--JS files-->
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script type="text/javascript">$(document).ready(function(){$.getJSON("../js/estados_cidades.json",function(o){var t='<option value="">Estado</option>';$.each(o,function(o,n){t+='<option value="'+n.sigla+'">'+n.sigla+"</option>"}),$("#estado").html(t),$("#estado").change(function(){var t="",n="";$("#estado option:selected").each(function(){n+=$(this).text()}),$.each(o,function(o,a){a.sigla==n&&$.each(a.cidades,function(o,n){t+='<option value="'+n+'">'+n+"</option>"})}),$("#cidade").html(t)}).change()})});</script>
        <script type="text/javascript">$(document).ready(function(){function e(e){if(e.files&&e.files[0]){var n=new FileReader;n.onload=function(e){$("#img-upload").attr("src",e.target.result)},n.readAsDataURL(e.files[0])}}$(document).on("change",".btn-file :file",function(){var e=$(this),n=e.val().replace(/\\/g,"/").replace(/.*\//,"");e.trigger("fileselect",[n])}),$(".btn-file :file").on("fileselect",function(e,n){var t=$(this).parents(".input-group").find(":text"),i=n;t.length&&t.val(i)}),$("#imgInp").change(function(){e(this)})});</script>
       
    </body>
</html>