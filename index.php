<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Search Food">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Search Food - Delivery</title>

        <!--cdn Bootstrap CSS File-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!--CSS.min File-->
        <link rel="stylesheet" href="css/style-cover.min.css">

        <!--Font file-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <style>
        /*
        * Código CSS para estilização da página
        * Definindo um Background para a tela
        */
        .cover-container{background:url(img/background/salad-2068220.jpg) no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body class="text-center" style="font-family: 'Roboto', sans-serif;">
        <!--Cover Container-->
        <div class="cover-container d-flex w-100 h-100 mx-0 flex-column">
            <!--Header-->
            <header style="background-color: #d20911" class="mb-auto pt-3 pb-2 px-5">
                <div class="inner">
                    <!--Logo-->
                    <h2 style="cursor: pointer;color: white" onclick="window.location = 'index.php'" class="masthead-brand">
                        <img height="50" src="img/logo/Logo_Search_Food_Branca.png">
                        Search Food
                    </h2><!--/Logo-->
                    <nav class="nav nav-masthead justify-content-center pr-5 mr-5">
                        <a class="nav-link active" href="index.php">Home</a>
                        <a class="nav-link" href="restaurante/plano.php">Cadastrar Restaurante</a>
                        <a class="nav-link" href="contato.php">Contato</a>
                        <a class="nav-link" href="#">Entrar ou Cadastrar</a>
                    </nav>
                </div>
            </header><!--/Header-->
            <!--Main-->
            <main style="margin-bottom: 8%;margin-top: 10%;" role="main" class="cover mx-auto">
                <h1 style="font-size: 50px;color: white">O seu novo jeito de pedir comida!</h1> 
                <div id="div-cep" style="background-color: rgba(0,0,0,0.700);border: thin solid white;display: block;margin-bottom: 50px" class="card mt-4">
            </main><!--/Main-->
        </div><!--/Cover Container-->
    </body>
</html>