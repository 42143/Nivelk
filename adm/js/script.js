$(function(){
    $(".btnChaves").click(function(){
        $(".chaves").toggle();
        $(".usuario").hide();
    });
    
    $(".btnUsuario").click(function(){
        $(".chaves").hide();
        $(".usuario").toggle();
    });
});