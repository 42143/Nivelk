<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function pageIndex(){
         return view('index');
    }
    public function pageAgency(){
        return view('agencia');
    }
    public function pageSupport(){
        return view('suporte');
    }
    public function pagePanelClient(){
         return view('painel_cliente');
    }
    public function pageIdentityLogo(){
         return view('identity.identidade_logotipo');
    }
}
