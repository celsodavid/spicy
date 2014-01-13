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
	var positionTop = false;
	var positionLeft = false;
	$(".activePopUp").hover(function(){
		var topMargin = $(this).css("marginTop").replace('px', '');
		var leftMargin = $(this).css("marginLeft").replace('px', '');
		//tamanho do container
		var altura = $("#planta_resort").height();
		var largura = $("#planta_resort").width();
		if(positionTop != topMargin || positionLeft != leftMargin)
		{
			$("#box-shadow").fadeOut(100,function(){
				$(this).css({
				marginTop:(((topMargin)/altura*100))+"%",
				marginLeft:(((leftMargin-123)/largura*100))+"%"
				});
				$("#box-shadow").fadeIn();
				positionTop = topMargin;
				positionLeft = leftMargin;
			});
		}
	},function(){
	
		});
	
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