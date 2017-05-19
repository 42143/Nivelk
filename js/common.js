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
        var footer = $(".footer").height();
        var top = (HeightWindow - footer);
    
        $(".Screen").css({"height": HeightWindow+"px"});
        $(".top").css({"height":top+"px"});
    
    setInterval(function(){
        var HeightWindow = $(window).height();
        var footer = $(".footer").height();
        var top = (HeightWindow - footer); 
        
        if(window.matchMedia("(max-width: 991px)").matches){
            
            $(".Screen").css({"height":"auto"});
            $(".top").css({"height":"auto"});
            
        }else{
            
            $(".Screen").css({"height": HeightWindow+"px"});
            $(".top").css({"height":top+"px"});
            
        }
    },500);
    
    //
});