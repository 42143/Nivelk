<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'index','uses' => 'RouteController@pageIndex']);
Route::get('/agencia',['as'=>'agencia', 'uses' => 'RouteController@pageAgency']);
Route::get('/suporte',['as'=>'suporte', 'uses' => 'RouteController@pageSupport']);
Route::get('/painel-cliente',['as'=>'painelCliente', 'uses' => 'RouteController@pagePanelClient']);


Route::group(['prefix'=>'identidade-visual'],function(){
    Route::get('criacao-logotipo',['as'=>'identidade.logotipo', 'uses' => 'RouteController@pageIdentityLogo']);
    Route::get('',['as'=>'identidade.visual',function(){
        return view('identity.identidade_visual');
    }]);
    Route::get('impressao',['as'=>'identidade.impressao',function(){
        return view('identity.identidade_impressao');
    }]);
    
});
Route::group(['prefix'=>'criacao-site'],function(){
    Route::get('',['as'=>'criacao.site',function(){
        return view('criacao_site');
    }]);
    Route::get('loja-virtual',['as'=>'criacao.virtual',function(){
        return view('criacao_virtual');
    }]);
    Route::get('landing-page',['as'=>'criacao.page',function(){
        return view('criacao_page');
    }]);
});
Route::group(['prefix'=>'marketing-digital'],function(){
    Route::get('marketing-posicionamento',['as'=>'mkg.digital',function(){
        return view('mkg_digital');
    }]);
    Route::get('otimização-sites-seo',['as'=>'mkg.seo',function(){
        return view('mkg_seo');
    }]);
    Route::get('links-patrocinados',['as'=>'mkg.links',function(){
        return view('mkg_links');
    }]);
    Route::get('midias-sociais',['as'=>'mkg.midias',function(){
        return view('mkg_midias');
    }]);
    Route::get('email-marketing',['as'=>'mkg.email',function(){
        return view('mkg_email');
    }]);
});
Route::group(['prefix'=>'sistemas-gentao'],function(){
    Route::get('',['as'=>'sistemas.gentao',function(){
        return view('stm_gentao');
    }]);
    Route::get('sistemas-advocacia',['as'=>'sistemas.advocacia',function(){
        return view('stm_advocacia');
    }]);
    Route::get('sistemas-odontologico',['as'=>'sistemas.odontologico',function(){
        return view('stm_odontologico');
    }]);
    Route::get('sistemas-loja',['as'=>'sistemas.loja',function(){
        return view('stm_loja');
    }]);
});
Route::group(['prefix'=>'briefing'],function(){
    Route::get('criacao-logotipo',['as'=>'bfg.logotipo',function(){
        return view('briefing_logotipo');
    }]);
    Route::get('criacao-site',['as'=>'bfg.site',function(){
        return view('briefing_site');
    }]);
    Route::get('loja-virtual',['as'=>'bfg.loja',function(){
        return view('briefing_loja');
    }]);
    Route::get('links-patrocinados',['as'=>'bfg.links',function(){
        return view('briefing_links');
    }]);
});