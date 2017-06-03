<!doctype html>
<html lang="br" >
	<head>
		<?php require_once"head.php";?>
        <!--ScrollReveal-->
        <script src="js/componentes/scrollreveal/scrollreveal.min.js"></script>
        <script>
            var config = {reset:true};
            window.sr = ScrollReveal(config);
        </script>
        <style>
            .sr .hero{ visibility: hidden;}
            .sr .intro{ visibility: hidden;}
            .sr .block{ visibility: hidden;}
        </style>
		<!--SASS-->
		<link rel="stylesheet" href="sass/pages/agencia.css"/>
        <link rel="stylesheet" href="sass/componentes/font-awesome-4.7.0/css/font-awesome.min.css"/>
		<title>Agência Digital Nivelk | Nivelk</title>
	</head>
	<body>
        <div class="main">
            <div class="main">
                <div class="Screen screen1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col intro">
                                <h1>SOBRE <br> AGÊNCIA DIGITAL NIVELK</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col block">
                                <h3>Temos um compromisso com a sua satisfação! Saiba um pouco sobre nós.</h3>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-8 intro">
                            <p>Somos uma Agência digital focado no atendimento e no trabalho, fazendo o seu negócio ou seu produto ter sucesso no mercador, por causa disso tratamos cada cliente com atendimento de forma única e especial, des de 2014 desevolvendo web sites com time Nivelk e mostrando nossa excelência no mercador do ramo digital e marketing em São Paulo.</p>
                                <p>A diretoria conta com dois socios, sendo eles Aslan Kelvin e Wesley Gonçalves e mais os contribuintes para desenvolver um agência de qualidade para você.</p>
                                <br>
                                <i class="fa fa-flag-o fa-1x" aria-hidden="true"></i>
                                Fundado em 21 de outubro de 2014.
                            </div>
                            <div class="col-4 intro">
                                <i class="fa fa-bullseye fa-2x" aria-hidden="true">&nbsp;Missão</i>
                                <p>Nosso objetivo é presta serviços de qualidade com melhor desempenho, buscamos crescer junto com os nossos clientes firmando uma relação sólida de amizade e confiança.</p>
                                <br>
                                <i class="fa fa-eye fa-2x" aria-hidden="true">&nbsp;Visão</i>
                                <p>Sermos reconhecidos em todo Brasil devido a qualidade, atendimento e satisfação dos nossos clientes</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Screen screen2">
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                            <div class="w-100"></div>
                            <div class="col-7 block">
                                <h3>Contato</h3>
                                <from class="group">
                                    <label for="nomeId">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        Nome:
                                    </label>
                                    <input type="text" id="nomeId" class="form-control" placeholder="nome"/>
                                    <label for="emailId">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        Email:
                                    </label>
                                    <input type="email" id="emailId" class="form-control" placeholder="email"/>
                                    <label for="assuntoId">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Assunto:
                                    </label>
                                    <input type="text" id="assuntoId" class="form-control" placeholder="Assunto"/>
                                    <label for="messagenId">
                                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        Mensagem:
                                    </label>
                                    <textarea id="messagenId" class="form-control" placeholder="Mensagem"></textarea>
                                    <br>
                                    <input type="submit" class="btn btn-outline-primary btn-block"/>
                                </from>
                            </div>
                            <div class="col-5 block">
                                <i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i>&nbsp;contato.nivelk@gmail.com
                                <br>
                                <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>&nbsp;(11) 996968-5240&nbsp;
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <br>
                                <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>&nbsp;(11) 98218-1224&nbsp;
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <br>
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;Rua itajuíbe, 28 - Sala 1 - Itaim Paulista <br>São paulo CEP: 08142-015
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once "footer.php";?>
            </div>
        </div>
            <?php require_once "header.php"; ?>
        <script>
      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 1500,
        scale    : 1.05,
      }

      var intro = {
        origin   : "bottom",
        distance : "40px",
        duration : 900,
        delay    : 1200,
        scale    : 1,
      }
      var block = {
        origin   : "top",
        distance : "40px",
        duration : 900,
        delay    : 1200,
        scale    : 1.05,
      }
      sr.reveal(".hero", hero)
      sr.reveal(".intro", intro)
      sr.reveal(".block",block)    
    </script>
    </body>
</html>