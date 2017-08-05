@extends('layout.master')
@section('title','Criação de Site - Loja Virtual | Nivelk')
@section('style')
    <link rel="stylesheet" href="/css/pages/criacao.css"/>
@endsection
@section('main')
    <div class="Screen screen1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col intro">
                                <h1>CRIAÇÃO DE SITE</h1>
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
                                <h2>CRIAÇÃO DE SITE</h2>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/criacao.site.php?criacao=site" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    CRIAÇÃO DE SITE
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/criacao.site.php?criacao=loja" class="btn btn-outline-primary btn-block btn-lg disabled active" role="button" aria-pressed="true">
                                    LOJA VIRTUAL
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/criacao.site.php?criacao=landing" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                     LANDING PAGE
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
                            <div class='col intro'>
                                <select class='form-control form-control-lg'>
                                    <option>Seu logotipo sera*</option>
                                </select>
                            </div>
                            <!--- -->
                            <div class="col intro">
                                <select class="form-control form-control-lg">
                                    <option>Como nos conheceu?*</option>
                                </select>
                            </div>
                            <div class="w-100"></div>
                            <br>
                            <div class="col intro">
                                <textarea class="form-control form-control-lg" placeholder="Precisa de criação somente de um logotipo ou precisa de mais itens como cartão de visita, pasta, folhetos, etc... Descreva *"></textarea>
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