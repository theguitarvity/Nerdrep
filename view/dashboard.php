<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- Styles -->
        <link rel="stylesheet" href="/view/assets/css/style.css">
        <link href="view/assets/css/materialize.min.css" rel="stylesheet">


        <!--SCRIPT-->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>



    </head>
    <body>

        <header>
            <div class="navbar-fixed">

                <nav class="nav-extended menu">
                    <div class="nav-wrapper">

                        <ul class="right hide-on-med-and-down">


                            <li><a>Ola, <?php echo $_SESSION['usuario']->getNomeUsuario() ?></a></li>
                            <li>
                                <a href="?page=logout"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Sair
                                </a>
                                <form id="logout-form" action="?page=login" method="POST" style="display: none;">

                                </form>

                            </li>




                        </ul>
                    </div>
                    <div class="nav-content">
                        <span class="nav-title"style="margin-left:310px; font-weight:bold">Painel</span>
                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal modal-trigger" data-target="modal1">
                            <i class="material-icons yellow">add</i>
                        </a>
                    </div>
                </nav>
            </div>

            <div class="container">
                <a href="#" class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile">
                    <i class="material-icons">menu</i>
                </a>
            </div>
            <ul class="side-nav fixed" id="nav-mobile" style="transform: translateX(0%); background-color: #333">
                <li>
                    <a href="/teste">
                        <img src="" alt="logo" width="350">
                    </a>
                </li>
            </ul>
        </header>
        <div class="content">
            <div class="row" style="margin-left: 1px; margin-top: 100px;">
                <?php
                foreach ($artigos as $artigo) {
                    ?>
                <a href=<?php echo $artigo->getLinkArtigo()?> target="_blank">
                        <div class="" style="margin-left: 300px; with:50%; ">
                            <div class="col s12 m6">
                                <div class="card">
                                    <div class="card-image">
                                        <img width="100" height="200" src="http://materializecss.com/images/sample-1.jpg">
                                        <span class="card-title" style="font-weight: bold"><?php echo $artigo->getTituloArtigo() ?></span>
                                        <a href=<?php echo '?page=deletar&cod=' . $artigo->getCodArtigo() ?>  class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">remove</i></a>

                                    </div>
                                    <div class="card-content">
                                        <p><?php echo $artigo->getDescArtigo() ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <?php
                }
                ?>



            </div>

            <div class="container" style="color:#333">

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h3>Adicionar novo artigo</h3>
                        <p>Digite aqui, os dados do artigo que você gostaria de salvar</p>
                        <div class="col s6 z-depth-4 card-panel">
                            <form action="?page=novoArtigo" method="post">
                                <div class="row">
                                    <div class="input-field col s6 " >
                                        <i class="material-icons prefix">attach_file</i>
                                        <input type="text" name="link" id="link" class="validate">
                                        <label for="link">Link do Artigo</label>

                                    </div>
                                </div> 



                                <div class="row">
                                    <div class="input-field col s6">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                                            <i class="material-icons right">send</i>
                                        </button>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>

                    </div>
                </div>
            </div>  
        </div> 
        <script>

            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();

            });
        </script>

    </body>
</html>