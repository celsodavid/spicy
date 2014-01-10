$(function(){
		var width = $(window).width();
		if(width > 1345)
		{
		var tamanhoFonte = width*0.45/100;
		}
		$("h3 a").css("fontSize", tamanhoFonte+"em");
	window.onresize = function(event) {
		var width = $(window).width();
		if(width > 1345)
		{
		var tamanhoFonte = width*0.45/100;
		$("h3 a").css("fontSize", tamanhoFonte+"em");
		}
	}
	$(".checkBg").hover(function(){
		$(".fundoPreto",this).fadeIn();
	},function(){
		$(".fundoPreto",this).fadeOut();
	})
});