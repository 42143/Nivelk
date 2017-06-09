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
		<link rel="stylesheet" href="sass/pages/identidade.css"/>
        <link rel="stylesheet" href="sass/componentes/font-awesome-4.7.0/css/font-awesome.min.css"/>
		<title>Identidade Visual | Nivelk</title>
        <script>
            $(function(){
                $(".solicite-screen").click(function(){
                    $("html,body").animate({scrollTop:500}, "slow");
                        return false;
                });
            });
        </script>
	</head>
	<body>
        <div class="main">
            <div class="main">
                <div class="Screen screen1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col intro">
                                <h1>IDENTIDADE VISUAL</h1>
                                <p>É muito importante que sua marca transmita credibilidade e confiança aos seus clientes.</p>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-3"></div>
                            <div class="col-6 intro">
                                <button class="btn btn-outline-primary btn-block btn-lg solicite-screen">SOLICITE UM ORÇAMENTO</button>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col block">
                                <?php
                                    if(isset($_GET["identidade"])){
                                        if($_GET["identidade"] == "logotipo"){
                                            
                                            echo "<h2>CRIAÇÃO DE LOGOTIOPO</h2>";
                                            $logo = 'disabled active';
                                            $placeholder = 'Precisa de criação somente de um logotipo ou precisa de mais itens como cartão de visita, pasta, folhetos, etc... Descreva *';
                                            $col = "
                                                <div class='col intro'>
                                                    <select class='form-control form-control-lg'>
                                                        <option>Seu logotipo sera*</option>
                                                    </select>
                                                </div>
                                            ";
                                            
                                        }elseif($_GET["identidade"] == "visual"){
                                            
                                            echo"<h2>CRIAÇÃO DE IDENTIDADE VISUAL</h2>";
                                            $visual = 'disabled active';
                                            
                                        }elseif($_GET["identidade"] == "impressao"){
                                            
                                            echo"<h2>IMPRESSÃO</h2>";
                                            $impressao = 'disabled active';
                                            
                                        }else{
                                            
                                            echo"";
                                        }
                                    }
                                ?>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=logotipo" class="btn btn-outline-primary btn-block btn-lg <?php echo $logo; ?>" role="button" aria-pressed="true">
                                    CRIAÇÃO DE LOGOTIOPO
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=visual" class="btn btn-outline-primary btn-block btn-lg  <?php echo $visual; ?>" role="button" aria-pressed="true">
                                    IDENTIDADE VISUAL
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=impressao" class="btn btn-outline-primary btn-block btn-lg  <?php echo $impressao; ?>" role="button" aria-pressed="true">
                                     IMPRESSÃO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Screen screen2">
                
                </div>
                <div class="Screen screen3" id="ScreenSoliciti">
                    <div class="container">
                        <div class="row">
                            <div class="col block">
                                <h1>Fale conosco e diga como podemos te ajudar.</h1>
                            </div>
                            <div class="w-100"></div>
                            <div class="col intro">
                                <input class="form-control form-control-lg" placeholder="Nome*">
                            </div>
                            <div class="col intro">
                                <input class="form-control form-control-lg" placeholder="E-mail*">
                            </div>
                            <div class="w-100"></div>
                            <br>
                            <div class="col-6 intro">
                                <input class="form-control form-control-lg" placeholder="Telefone*">
                            </div>
                            <!---col logotipo-->
                                <?php echo $col; ?>
                            <!--- -->
                            <div class="col intro">
                                <select class="form-control form-control-lg">
                                    <option>Como nos conheceu?*</option>
                                </select>
                            </div>
                            <div class="w-100"></div>
                            <br>
                            <div class="col intro">
                                <textarea class="form-control form-control-lg" placeholder="<?php echo $placeholder;?>"></textarea>
                            </div>
                            <div class="w-100"></div>
                            <br>
                            <div class="col-3"></div>
                            <div class="col-6 intro">
                                <input type="submit" class="btn btn-outline-primary btn-block btn-lg" value="ENVIAR ORÇAMENTO"/>
                            </div>
                            <div class="col-3"></div>
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