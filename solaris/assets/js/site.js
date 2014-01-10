$(function(){
	window.onresize = function(event) {
		var width = $(window).width();
		var tamanhoFonte = width*0.3/100;
		$("h3 a").css("fontSize", tamanhoFonte+"em");
		
	}
	
});