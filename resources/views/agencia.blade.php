@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="/css/pages/agencia.css"/>
@endsection

@section('main')
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
                            <div class="col-7 intro">
                                <br>
                            <p>Somos uma Agência digital focado no atendimento e no trabalho, fazendo o seu negócio ou seu produto ter sucesso no mercador, por causa disso tratamos cada cliente com atendimento de forma única e especial, des de 2014 desevolvendo web sites com time Nivelk e mostrando nossa excelência no mercador do ramo digital e marketing em São Paulo.</p>
                                <p>A diretoria conta com dois socios, sendo eles Aslan Kelvin e Wesley Gonçalves e mais os contribuintes para desenvolver um agência de qualidade para você.</p>
                                <br>
                                <i class="fa fa-flag-o fa-1x" aria-hidden="true"></i>
                                Fundado em 21 de outubro de 2014.
                            </div>
                            <div class="col-5 intro">
                                <br>
                                <i class="fa fa-bullseye fa-2x" aria-hidden="true">&nbsp;Missão</i>
                                <p>Nosso objetivo é presta serviços de qualidade com melhor desempenho, buscamos crescer junto com os nossos clientes firmando uma relação sólida de amizade e confiança.</p>
                                <i class="fa fa-eye fa-2x" aria-hidden="true">&nbsp;Visão</i>
                                <p>Sermos reconhecidos em todo Brasil devido a qualidade, atendimento e satisfação dos nossos clientes</p>
                                <i class="fa fa-handshake-o fa-2x" aria-hidden="true">&nbsp;Valores</i>
                                <p>Trabalharemos com total comprometimento, responsabilidade, clareza e valorização humana tanto com nossos clientes como os colaboradores </p>
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
                                <form class="form-group" action="Contato.php" method="post">
                                    {{csrf_field()}}
                                    <label for="nomeId">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        Nome:
                                    </label>
                                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="nome"/>
                                    <label for="emailId">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        Email:
                                    </label>
                                    <input type="email" name="email" id="emailId" class="form-control" placeholder="email"/>
                                    <label for="assuntoId">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Assunto:
                                    </label>
                                    <input type="text" name="assunto" id="assuntoId" class="form-control" placeholder="Assunto"/>
                                    <label for="messagenId">
                                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        Mensagem:
                                    </label>
                                    <textarea id="messagenId" name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
                                    <br>
                                    <input type="submit" class="btn btn-outline-primary btn-block"/>
                                </form>
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
@endsection