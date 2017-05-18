$(function(){
	$("li:nth-child(2)").click(function(){
        $(".fa").toggle();
        $(".menu_trop").toggle();
    });
    
    $(".menu_bar").click(function(){
        $(".fa").toggle();
        $(".menu_trop").toggle();
    });
    
         var HeightWindow = $(window).height();
        $(".Screen").css({"height": HeightWindow+"px"});
    
    setInterval(function(){
        var HeightWindow = $(window).height();
        
        if(window.matchMedia("(max-width: 991px)").matches){
            
            $(".Screen").css({"height":"auto"});
            $(".tituloIcone").css({"height":"70px","margin-bottom":"auto","margin-left":"1.5px","margin-right":"1.5px","float":"left"});
            $(".circulo").css({"height":"auto","width":"auto","border":"none","border-radius":"auto","padding-top":"0px"});
            
        }else{
            
            $(".Screen").css({"height": HeightWindow+"px"});
            $(".tituloIcone").css({"width":"90px","height":"137px","margin-top":"5px","margin-bottom":"5px","margin-left":"5px","margin-right":"5px","float":"left"});
            $(".circulo").css({"width":"90px","height":"90px","border":"solid 3px #FFFFFF","border-radius":"100%","padding-top":"20px"});
        }
    },500);
    
    //
});