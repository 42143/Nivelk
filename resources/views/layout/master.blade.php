<!doctype html>
<html lang="br" >
	<head>
        <meta charset="utf-8"/>
		<meta http-equiv="Content-Language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!--CSS CDN Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"/>
	<!--google-->
		<link rel="canonical" href="http://nivelk.com.br/"/>
		<link rel="alternate" hreflang="pt-br" href="http://nivelk.com.br/"/>
	<!--Jquery CDN Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--Jquery-->
        <script src="/js/common.js"></script>
    <!--AngularJs-->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<!--SEO-->
		<meta name="author" content="Aslan Kelvin"/>
		<meta name="classification" content="Agência digital"/>
		<meta name="title" content="Agência Digital | Nivelk"/>
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
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
        <meta property="og:description" content=""/>
        <meta property="og:site_name" content="Agência digital Nivelk"/>
        <meta property="article:author" content="https://www.facebook.com/aslan.kelvingama"/>
        <meta property="article:publisher" content="https://www.facebook.com/nivelk.com.br/"/>
        <meta property="fb:admins" content="767933299961143"/>
	<!--ferramentas google-->
        <!-- Google Analytics -->
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-57079643-1', 'auto');
              ga('send', 'pageview');
            </script>
        <!-- End Google Analytics -->
	<!-- -->
        <!--ScrollReveal-->
        <script src="/js/componentes/scrollreveal/scrollreveal.min.js"></script>
        <script>
            var config = {reset:true};
            window.sr = ScrollReveal(config);
        </script>
        <style>
            .sr .hero{ visibility: hidden;}
            .sr .intro{ visibility: hidden;}
            .sr .block{ visibility: hidden;}
        </style>
		<!--CSS-->
            @section('style')
		      <link rel="stylesheet" href="/css/pages/index.css"/>
            @show
        <link rel="stylesheet" href="/css/componentes/font-awesome-4.7.0/css/font-awesome.min.css"/>
		<title>@yield('title','Agência Digital - Itaim Paulista | Nivelk')</title>
	</head>
	<body>
        <div class="main">
            @yield('main')
           <!---footer-->
                <div class="Screen screen10">
                    <div class="top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col block">
                                            <center>
                                                <i class="fa fa-coffee fa-4x" aria-hidden="true"></i>
                                                <h6>Equipe qualificada</h6>
                                                <p>A nossa equipe e bem preparada para lhe atender e mostrar o melhor do desenvolvimento do seu projeto.</p>
                                            </center>    
                                        </div>
                                        <div class="col block">
                                            <center>
                                                <i class="fa fa-terminal fa-4x" aria-hidden="true"></i>
                                                <h6>Padrão de projeto</h6>
                                                <p>Sempre utilizando ferramentas mordenas, para desenvolver sistemas leves e intuitivos.</p>
                                            </center>    
                                        </div>
                                        <div class="col block">
                                            <center>   
                                                <i class="fa fa-microchip fa-4x" aria-hidden="true"></i>
                                                <h6>Agilidade</h6>
                                                <p>A Equipe focado e focando em seu projeto para não perder tempo no mercado.</p>
                                            </center>     
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col intro">
                                    <h5>Não esqueçar de ter newsletter da Nivelk no seu e-mail, conteúdo de MDP, sites, identidade visual e perguntas relacionado ao seu negócio estamos aqui para ajudar.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid footer">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4 nivelk block">
                                        <img src="/img/logo_nivelk.png" alt="logotipo da Nivelk"/>
                                        <div class="nivelk">NIVELK</div>
                                    </div>
                                    <div class="col-3 block">
                                        <a href="https://www.facebook.com/nivelk.com.br/" target="_blank">
                                            <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                                        </a>    
                                        <a href="https://www.instagram.com/_nivelk/" target="_blank">
                                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/company/nivelk" target="_blank">
                                            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                                        </a>
                                        <a href="" target="_blank">
                                            <i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>
                                        </a>    
                                    </div>
                                    <div class="col-5 block">
                                        <label for="Newsletter">
                                             <i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>
                                            Recebar nosso Newsletter
                                        </label>
                                        <input type="email" id="Newsletter" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu email"/>
                                        <button class="btn btn-outline-primary btn-block" onclick="NewsLetter();">Enviar</button>
                                        <script type="text/javascript">
                                            function NewsLetter(){
                                                    var emails = document.getElementById("Newsletter").value;
                                            }
                                        </script>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col block">
                                        <ul>
                                            <li>IDENTIDADE VISUAL</li>
                                            <li></li>
                                            <li><a href="http://nivelk.com.br/identidade.visual.php?identidade=logotipo">Criação de Logotipo</a></li>
                                            <li><a href="http://nivelk.com.br/identidade.visual.php?identidade=visual">Identidade Visual</a></li>
                                            <li><a href="http://nivelk.com.br/identidade.visual.php?identidade=impressao">Impressão</a></li>
                                        </ul>
                                    </div>
                                        <div class="col block">
                                            <ul>
                                                <li>CRIAÇÂO DE SITE</li>
                                                <li></li>
                                                <li><a href="http://nivelk.com.br/criacao.site.php?criacao=site">Criação de Site</a></li>
                                                <li><a href="http://nivelk.com.br/criacao.site.php?criacao=loja">Loja Virtual</a></li>
                                                <li><a href="http://nivelk.com.br/criacao.site.php?criacao=landing">Landing Page</a></li>
                                            </ul>
                                         </div>    
                                        <div class="col block">    
                                            <ul>
                                                <li>MARKETING DIGITAL</li>
                                                <li></li>
                                                <li><a href="http://nivelk.com.br/marketing.digital.php?marketing=mdp">MDP</a></li>
                                                <li><a href="http://nivelk.com.br/marketing.digital.php?marketing=seo">Otimização de sites SEO</a></li>
                                                <li><a href="http://nivelk.com.br/marketing.digital.php?marketing=links">Links Patrocinados</a></li>
                                                <li><a href="http://nivelk.com.br/marketing.digital.php?marketing=midias">Mídias Sociais</a></li>
                                                <li><a href="http://nivelk.com.br/marketing.digital.php?marketing=email">E-mail Marketing</a></li>
                                            </ul>
                                         </div>
                                        <div class="col block">    
                                            <ul>
                                                <li>SUPORTE</li>
                                                <li></li>
                                                <li><a href="http://nivelk.com.br/suporte.php">Gentão de Sites</a></li>
                                            </ul>
                                         </div> 
                                        <div class="col block">    
                                            <ul>
                                                <li>SISTEMAS DE GENTÂO</li>
                                                <li></li>
                                                <li><a href="http://nivelk.com.br/sistemas.gentao.php?sistema=advocacia">Sistema de Advocacia</a></li>
                                                <li><a href="http://nivelk.com.br/sistemas.gentao.php?sistema=odontologico">Sistema de odontológico</a></li>
                                                <li><a href="http://nivelk.com.br/sistemas.gentao.php?sistema=loja">Sistema para loja</a></li>
                                            </ul>
                                         </div>    
                                        <div class="col menuMobile block">    
                                            <ul>
                                                <li>BRIEFING</li>
                                                <li></li>
                                                <li><a href="{{route('bfg.logotipo')}}">Briefing Logotipo</a></li>
                                                <li><a href="{{route('bfg.site')}}">Briefing Site</a></li>
                                                <li><a href="{{route('bfg.links')}}">Briefing Link Patrocinado</a></li>
                                                <li><a href="{{route('bfg.loja')}}">Briefing Loja Virtual</a></li>
                                            </ul>
                                         </div>
                                    </div> 
                            </div>
                            <div class="w-100"></div>
                            <div class="col icones">
                                <i class="fa fa-cc-amex fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-cc-diners-club fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-credit-card-alt fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-money fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-btc fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="w-100"></div>
                            <div class="col copy">&copy;&nbsp;nivelk.com.br.&nbsp;Todos os direitos reservados.</div>
                        </div>
                    </div>
                </div>
            <!--footer-->
        </div>    
		  <header>
            <div class="container-fluid main">
                <div class="row">
                    <div class="col-md content">
                        <a href="{{route('index')}}">
                            <div class="nivelk">NIVELK</div>
                        </a>
                        <div class="menu_bar">
                            <i class="fa fa-bars fa-2x menubar" aria-hidden="true"></i>
                            <i class="fa fa-window-close-o fa-2x menubar" aria-hidden="true"></i>
                        </div>
                            <nav>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li>Serviços 
                                        <i class="fa fa-angle-double-down fa-lg servico"></i>
                                        <i class="fa fa-angle-double-up fa-lg servico"></i>
                                    </li>
                                    <!--<li><a href="http://nivelk.com.br/portfolio.php">Portfólio</a></li>-->
                                    <li><a href="{{route('agencia')}}">Agência</a></li>
                                    <li><a href="{{route('blog')}}" target="_blank">Blog</a></li>
                                    <li><a class="blue" href="http://nivelk.com.br/login.php">Faça login</a></li>
                                    <li><a class="blue" href="http://nivelk.com.br/registro.php">Cadastre-se</a></li>
                                   <button class="btn">ORÇAMENTO</button>
                                </ul>
                            </nav>
                    </div>    
                </div>
                <div class="menu_trop">
                    <div class="row">
                        <div class="col menuMobile">
                            <ul>
                                <li>MENU</li>
                                <li></li>
                                <!--<li>Portfólio</li>-->
                                <li><a href="{{route('agencia')}}">Agência</a></li>
                                <li><a href="{{route('blog')}}" target="_blank">Blog</a></li>
                                <li><a class="blue" href="http://nivelk.com.br/login.php">Faça login</a></li>
                                <li><a class="blue" href="http://nivelk.com.br/registro.php">Cadastre-se</a></li>
                            </ul>
                        </div>
                        <div class="col menuMobile">
                            <ul>
                                <li>SERVIÇOS</li>
                                <l1></l1>
                                <li><a href="{{route('identidade.visual')}}">Identidade Visual</a></li>
                                <li><a href="{{route('criacao.site')}}">Criação de Site</a></li>
                                <li><a href="{{route('mkg.digital')}}">Marketing Digital</a></li>
                                <li><a href="{{route('suporte')}}">Suporte</a></li>
                                <li><a href="{{route('sistemas.gentao')}}">Sistemas de Gestão</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>IDENTIDADE VISUAL</li>
                                <li></li>
                                <li><a href="{{route('identidade.logotipo')}}">Criação de Logotipo</a></li>
                                <li><a href="{{route('identidade.visual')}}">Identidade Visual</a></li>
                                <li><a href="{{route('identidade.impressao')}}">Impressão</a></li>
                            </ul>
                        </div>
                            <div class="col">
                                <ul>
                                    <li>CRIAÇÂO DE SITE</li>
                                    <li></li>
                                    <li><a href="{{route('criacao.site')}}">Criação de Site</a></li>
                                    <li><a href="{{route('criacao.virtual')}}">Loja Virtual</a></li>
                                    <li><a href="{{route('criacao.page')}}">Landing Page</a></li>
                                </ul>
                             </div>    
                            <div class="col">    
                                <ul>
                                    <li>MARKETING DIGITAL</li>
                                    <li></li>
                                    <li><a href="{{route('mkg.digital')}}">MDP</a></li>
                                    <li><a href="{{route('mkg.seo')}}">Otimização de sites SEO</a></li>
                                    <li><a href="{{route('mkg.links')}}">Links Patrocinados</a></li>
                                    <li><a href="{{route('mkg.midias')}}">Mídias Sociais</a></li>
                                    <li><a href="{{route('mkg.email')}}">E-mail Marketing</a></li>
                                </ul>
                             </div>    
                            <div class="col">    
                                <ul>
                                    <li>SUPORTE</li>
                                    <li></li>
                                    <li><a href="{{route('suporte')}}">Gentão de Sites</a></li>
                                </ul>
                             </div> 
                            <div class="col">    
                                <ul>
                                    <li>SISTEMAS DE GESTÂO</li>
                                    <li></li>
                                    <li><a href="{{route('sistemas.advocacia')}}">Sistema de Advocacia</a></li>
                                    <li><a href="{{route('sistemas.odontologico')}}">Sistema de odontológico</a></li>
                                    <li><a href="{{route('sistemas.loja')}}">Sistema para loja</a></li>
                                </ul>
                             </div>    
                            <div class="col menuMobile">    
                                <ul>
                                    <li>BRIEFING</li>
                                    <li></li>
                                    <li><a href="{{route('bfg.logotipo')}}">Briefing Logotipo</a></li>
                                    <li><a href="{{route('bfg.site')}}">Briefing Site</a></li>
                                    <li><a href="{{route('bfg.links')}}">Briefing Link Patrocinado</a></li>
                                    <li><a href="{{route('bfg.loja')}}">Briefing Loja Virtual</a></li>
                                </ul>
                             </div>    
                    </div>
                </div>
            </div>
        </header>  
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