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
        <link rel="stylesheet" href="sass/page/adm.css"/>
        <link rel="stylesheet" href="../sass/componentes/font-awesome-4.7.0/css/font-awesome.min.css"/>
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row"></div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col menu">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-9">
                                    <input type="text" class="form-control" placeholder="Pesquisa">
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <button class="btn btn-outline-secondary btn-block btnHead"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Chaves<i class="fa fa-angle-left right" aria-hidden="true"></i></button>
                                    <button class="btn btn-outline-secondary btn-block"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Painel de controle<i class="fa fa-angle-left right" aria-hidden="true"></i></button>
                                    <button class="btn btn-outline-secondary btn-block"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Artigos<i class="fa fa-angle-left right" aria-hidden="true"></i></button>
                                    <button class="btn btn-outline-secondary btn-block"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;Pagina<i class="fa fa-angle-left right" aria-hidden="true"></i></button>
                                    <button class="btn btn-outline-secondary btn-block"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Usuarios<i class="fa fa-angle-left right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="head">
                        <div class="row">
                            <div class="col">
                                <h3>Palavra chave</h3>
                                <fieldset>
                                    <form class="form-group">
                                        <label for="keyWordId">Coloque à palavra chave</label>
                                        <input type="text" name="keyword" class="form-control" id="keyWordId" placeholder="palavra chave"/>
                                        <input type="submit" class="btn btn-outline-primary btn-block" value="Adicionar palavra"/>
                                    </form>
                                </fieldset> 
                                <fieldset>
                                    <form class="form-group">
                                        <label for="">Excluir palavra chave</label>
                                        <select class="form-control">
                                            <option>Seleciona à palavra</option>
                                        </select>
                                        <input type="submit" class="btn btn-outline-primary btn-block" value="Excluir palavra"/>
                                    </form>
                                </fieldset>    
                            </div>
                            <div class="col">
                                <h3>Descrição</h3>
                                <fieldset>
                                    <form class="form-group">
                                        <label for="">coloque à descrição</label>
                                        <textarea class="form-control"></textarea>
                                        <input type="submit" class="btn btn-outline-primary btn-block" value="Salvar descrição"/>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>