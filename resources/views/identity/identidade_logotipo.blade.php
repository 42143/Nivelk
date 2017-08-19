@extends('layout.master')
@section('title', 'Identidade Visual - Criação de Logotipo | Nivelk')
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
                                <h2>CRIAÇÃO DE LOGOTIOPO</h2>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=logotipo" class="btn btn-outline-primary btn-block btn-lg disabled active" role="button" aria-pressed="true">
                                    CRIAÇÃO DE LOGOTIOPO
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=visual" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    IDENTIDADE VISUAL
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/identidade.visual.php?identidade=impressao" class="btn btn-outline-primary btn-block btn-lg" role="button" aria-pressed="true">
                                     IMPRESSÃO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Screen screen2">
                    <div class="container">
                        <div class="row" >
                            <!---Logotiopo -->
                            <div class="col">
                                <div class="row">
                                    <div class="col block">
                                        <h2>Mas Afinal o que um Logotipo ?</h2>
                                        <p>Logotipo são formas ilustradas para representar um modelo de negócio, sendo considerado objeto que pode ser inserido em diversos meios de comunicação como Site, Materiais impressos comunicação visual associada ao negocio. Suas formas ilustradas em geral demostra Missão visual e valores de uma empresa sendo muito importante para o negocio, além de trazer mais credibilidade para as pessoas.</p>
                                        <h5>Como começar a ter seu proprio logotipo</h5>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;<span>BRIEFING</span>
                                            <p>O logotipo é baseado em idéias coletamos todos os dados para da início ao desenvolvimento.</p>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;<span>DESENVOLVIMENTO</span>
                                            <p>Nos temos otimos profissionais capazes de criar marcas e Logotipo do inicio, de acordo com sua empresa, e elaborar modelos com basa no negócio, e manter da forma que o cliente determinar.</p>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>&nbsp;<span>CONCLUSÃO</span>
                                            <p>idealizando conceito para logotipo com base no gosto do cliente até a definição.</p>
                                    </div>
                                    <div class="col intro">
                                        <div class="row">
                                            <div class="col"></div>
                                            <div class="col">
                                                <img src="img/identidade-visual-logotipo.png" alt="identidade visual logotipo"/>
                                            </div>
                                            <div class="col"></div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!---fim Logotiopo -->
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
                            <div class='col intro'>
                                <select class='form-control form-control-lg'>
                                    <option>Seu logotipo sera*</option>
                                </select>
                            </div>
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