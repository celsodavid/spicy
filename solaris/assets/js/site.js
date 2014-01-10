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
		$(".fundoPreto",this).fadeIn(200);
		$("a",this).animate({
			"left":"100px"
		},200);
		$("h3 a img",this).fadeIn(200);
	},function(){
		$(".fundoPreto",this).fadeOut(200);
		$("a",this).animate({
			"left":"0px"
		},200);
		$("h3 a img",this).fadeOut(200);
	})
});