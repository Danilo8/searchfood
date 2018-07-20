<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food - Cadastrar Restaurante">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Cadastrar Restaurante</title>

        <!--cdn Bootstrap CSS File-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!--CSS.min File-->
        <link rel="stylesheet" href="../css/style-cover.min.css">
        <link rel="stylesheet" href="../css/form.min.css">

        <!--Font file-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        /*
        * Código CSS para estilização da página
        * Definindo um Background para a tela
        */
        #topo{background:url(../img/background/) no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body class="text-center" style="font-family: 'Roboto', sans-serif;">
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
                        <a class="nav-link" href="contato.php">Contato</a>
                        <a class="nav-link" href="#">Entrar ou Cadastrar</a>
                    </nav>
                </div>
            </header><!--/Header-->
            
            <div id="topo" class="container-fluid p-0">
                <div style="background-color: rgba(0,0,0,0.700);">
                    <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                        <span style="font-size: 40px;color: white">
                            <i style="font-size: 50px" class="fa fa-line-chart"></i><br>
                            Cadastre-se agora e aumente o faturamento do seu restaurante!
                        </span>
                    </div>
                </div>
            </div>

            <div class="container">
                
            </div>
        </div><!--/Cover Container-->
    </body>
</html>