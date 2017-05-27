        <?php 
            require_once "config.php";
            $ch = $con->query("SELECT chaves FROM chaves");
            $chave = $ch->fetch_row();
            $desc = $con->query("SELECT descricao FROM descricao");
            $descricao = $desc->fetch_row(); 
        ?>
        <meta charset="utf-8"/>
		<meta http-equiv="Content-Language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!--CSS CDN Bootstrap-->
		<link rel="shortcut icon" href="img/favicon.jpg"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"/>
	<!--google-->
		<link rel="canonical" href="http://nivelk.com.br/"/>
		<link rel="alternate" hreflang="pt-br" href="http://nivelk.com.br/"/>
	<!--Jquery CDN Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--Jquery-->
        <script src="js/common.js"></script>
	<!--SEO-->
		<meta name="author" content="Aslan Kelvin"/>
		<meta name="classification" content="Agência digital"/>
		<meta name="title" content="Agência Digital | Nivelk"/>
		<meta name="keywords" content="<?php echo $chave[0].",";?>"/>
		<meta name="description" content="<?php echo $descricao[0];?>"/>
		<meta name="URL" content="http://nivelk.com.br/index.php"/>
		<meta name="language" content="pt-br"/>
		<meta name="robots" content="index,follow"/>
		<meta name="msnbot" content="all"/>
		<meta name="googlebot" content="index,follow"/>
	<!--Rede social: Facebook / open graph-->
		<meta property="og:locale" content="pt_BR"/>
        <meta property="og:url" content="http://nivelk.com.br/index.php"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Agência Digital | Nivelk"/>
        <meta property="og:image" content="img/logo_nivelk.png"/>
        <meta property="og:description" content="<?php ?>"/>
        <meta property="og:site_name" content="Agência digital Nivelk"/>
        <meta property="article:author" content="https://www.facebook.com/aslan.kelvingama"/>
        <meta property="article:publisher" content="https://www.facebook.com/nivelk.com.br/"/>
	<!--ferramentas google-->
        <?php require_once "analyticstracking.php";?>
	<!-- -->
	