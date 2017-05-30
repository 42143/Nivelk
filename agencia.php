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
                            <div class="col">
                                <h1>AGÊNCIA DIGITAL NIVELK</h1>
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