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

            <nav class="nav-extended menu">
                <div class="nav-wrapper">

                    <ul class="right hide-on-med-and-down">


                        <li><a>Ola, </a></li>
                        <li>
                            <a href=""
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
            <div class="container">
                <a href="#" class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile">
                    <i class="material-icons">menu</i>
                </a>
            </div>
            <ul style="backgroun-color:#222;" class="side-nav fixed gray" id="nav-mobile" style="transform: translateX(0%);">
                <li>
                    <a href="/teste">
                        <img src="" alt="logo" width="350">
                    </a>
                </li>
            </ul>
        </header>
        <div class="content">
            <div class="row card_content" style="margin-left: 1px;">

                <div class="row" style="margin-left: 300px; width: 600px;">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img width="100" height="200" src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container" style="color:#333">

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h3>Adicionar novo artigo</h3>
                        <p>Digite aqui, os dados do artigo que você gostaria de salvar</p>
                        <div class="col s6 z-depth-4 card-panel">
                            <form action="?page=cadastrar" method="post">

                                <div class="row">
                                    <div class="input-field col s6 " >
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" name="name" id="nome" class="validate" required autofocus>
                                        <label for="nome">Nome</label>

                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="input-field col s6 " >
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="email" name="email" id="email" class="validate">
                                        <label for="email">E-mail</label>

                                    </div>
                                </div> 
                                <div class="row ">    
                                    <div class="input-field col s6  ">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input type="password" name="password" id="password">
                                        <label for="password">Senha</label>

                                    </div>
                                </div>
                                <div class="row ">    
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input type="password" name="password_confirmation" id="password_confirm">
                                        <label for="password_confirm">Confirme a senha</label>

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