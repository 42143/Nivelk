@extends('layout.master')
@section('title','Suporte | Nivelk')
@section('style')
    <link rel="stylesheet" href="/css/pages/suporte.css"/>
@endsection
@section('main')
    <div class="Screen screen1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col intro">
                                <h1>MARKETING DIGITAL</h1>
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
                                <h2>MARKETING DE POSICIONAMENTO</h2>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/marketing.digital.php?marketing=mdp" class="btn btn-outline-primary btn-block btn-lg disabled active" role="button" aria-pressed="true">
                                    MDP
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/marketing.digital.php?marketing=seo" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    OTIMIZAÇÃO DE SITE SEO
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/marketing.digital.php?marketing=links" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    LINKS PATROCINADOS
                                </a>
                            </div>
                            <div class="w-100"></div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/marketing.digital.php?marketing=midias" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    MÍDIAS SOCIAIS
                                </a>
                            </div>
                            <div class="col block">
                                <a href="http://nivelk.com.br/marketing.digital.php?marketing=email" class="btn btn-outline-primary btn-block btn-lg " role="button" aria-pressed="true">
                                    E-MAIL MARKETING
                                </a>
                            </div>
                            <div class="col"></div>
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