$(function(){
		var width = $(window).width();
		if(width > 1345)
		{
		var tamanhoFonte = width*0.35/100;
		}
		$("h3 a").css("fontSize", tamanhoFonte+"em");
	window.onresize = function(event) {
		var width = $(window).width();
		if(width > 1345)
		{
		var tamanhoFonte = width*0.3/100;
		$("h3 a").css("fontSize", tamanhoFonte+"em");
		}
	}
	
});