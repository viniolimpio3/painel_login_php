<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <div id="err" style="display: none" class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <div class="box">
                        <form action="controller.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="mail"  class="input is-large" placeholder="Seu Email" autofocus="">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Enviar</button>
                            <br>
                            <a id="rp" href="http://localhost/login_php/">Voltar para o Login</a>
                            
                                    
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>