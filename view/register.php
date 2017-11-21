<div class="content parallax-container">
    <div class="col s12 z-depth-4 card-panel login">
        <form action="?acao=cadastrar" method="post">
            
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/view/assets/js/materialize.js"></script>
</body>
</html>
