@extends('layout.master')
@section('title','Identidade Visual - Impressão | Nivelk')
@section('style')
    <link rel="stylesheet" href="/css/pages/identidade.css"/>
@endsection
@section('main')
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
                                <h2>IMPRESSÃO</h2>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=logotipo" class="btn btn-outline-primary btn-block btn-lg" role="button" aria-pressed="true">
                                    CRIAÇÃO DE LOGOTIOPO
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=visual" class="btn btn-outline-primary btn-block btn-lg" role="button" aria-pressed="true">
                                    IDENTIDADE VISUAL
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=impressao" class="btn btn-outline-primary btn-block btn-lg  disabled active" role="button" aria-pressed="true">
                                     IMPRESSÃO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Screen screen2">
                    <div class="container">
                        <div class="row" >
                            <!-- impressão -->
                            <div class="col" style="">
                                <div class="row">
                                    <div class="col block">
                                        <h2>Ainda não desapegamos totalmente do papel</h2>
                                        <p>Impressão é a forma mais antigas mas muito utilizado ainda, impressões como cartões de visita panletos, flyers, banners todo esses tipos de materiais é insipensavel para empresas, pelo simples fato de ser uma forma de comunicação visual. è muito utilizado em eventos importantes, divulgações externas e internas na qual é um tipo de interação direta com pessoas, exemplo é o cartão de visita que é entregue para um publico certo, pessoas que realmente pode ser seu potencial cliente.</p>
                                        <h5>O que fazemos</h5>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;<span>SERVIÇOS</span>
                                            <p>Criamos a arte de suas impressão para diversos tipos de materiais impressos até mesmo para comunicação visual externa, como aquelas lindas fachadas para comercio. reforce sua marca com esse tipo de comunicação e veja todo o potencial dessa estratégia de divulgação. </p>
                                    </div>
                                    <div class="col intro">
                                        <div class="row">
                                            <div class="col"></div>
                                            <div class="col">
                                                <img src="img/identidade-visual-impressao.png" alt="identidade visual logotipo"/>
                                            </div>
                                            <div class="col"></div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!-- fim impressão -->
                        </div>
                    </div>
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
                                
                            <!--- -->
                            <div class="col intro">
                                <select class="form-control form-control-lg">
                                    <option>Como nos conheceu?*</option>
                                </select>
                            </div>
                            <div class="w-100"></div>
                            <br>
                            <div class="col intro">
                                <textarea class="form-control form-control-lg" placeholder=""></textarea>
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
@endsection