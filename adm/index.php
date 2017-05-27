<!doctype html>
<html lang="br">
    <head>
        <meta charset="utf-8"/>
		<meta http-equiv="Content-Language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--CSS CDN Bootstrap-->
		<link rel="shortcut icon" href="../img/favicon.jpg"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"/>
	<!--Jquery CDN Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--css-->
        <link rel="stylesheet" href="sass/page/admIndex.css"/>
        <link rel="stylesheet" href="../sass/componentes/font-awesome-4.7.0/css/font-awesome.min.css"/>
        <script src="js/script.js"></script>
        <title>Admistrador | Nivelk</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="row">
                        <div class="col">Nivelk Administrador</div>
                        <div class="w-100"></div>
                        <div class="col">
                            <fieldset>
                                <form class="form-group" action="adm.class.php" method="post">
                                    <label for="IdUsuario">
                                        <i class="fa fa-user-o fa-1x" aria-hidden="true"></i>&nbsp;Usuario
                                    </label>
                                    <input type="text" name="usuario" id="IdUsuario" class="form-control" placeholder="Usuario"/>
                                    <label id="IdSenha">
                                        <i class="fa fa-unlock-alt fa-1x" aria-hidden="true"></i>&nbsp;Senha
                                    </label>
                                    <input type="password" name="senha" id="IdSenha" class="form-control" placeholder="Senha"/>
                                    <br>
                                    <input type="submit" id="IdEnviar" class="btn btn-outline-primary btn-block"/>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </body>
</html>