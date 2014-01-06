function valid_email(email){
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		
	if(filtro.test(email)){
		return true;
	}else{		
		alert('Digite um E-mail valido.');
	}	
}
$(document).ready(function(){
	
	$("a[rel=atendimento]").click(function(){
		var url = window.location;
		window.location.replace(url);
	});
	
	$('input[name="telefone"]').mask('(99) 9999 - 9999? 9');
	
	$("span.close").on('click', function(){
		$('div.alert').fadeOut('slow');
	});
	$("#slide").on("click",".abrirPop",function(){
		
		var i = $(this).attr("href");
		$("."+i).slideDown();
		return false;
	});

    $(".abrirPop").on("click",function(){
		
		var i = $(this).attr("href");
		$("."+i).slideDown();
		return false;
	});



	$(".fecharPop").on("click",function(){
		$("."+$(this).attr("href")).slideUp();
		return false;
	});	
	
	// dereck
	/*$(".tumbs a").on("click",function(){
		var img = $("img",this).attr("src");
		$(".popuplazer").html('<img src="'+img+'"/>');
		$(".backgroundPop").fadeIn('fast',function(){
			$(".popuplazer").fadeIn();
		});		
		return false;
	})
	$(".closeUp").on("click",function(){
		$(".backgroundPop").fadeOut();
		$(".popuplazer").fadeOut();
		return false;
	});*/
	
	var iniset = 5;
	var textoSlide = new Array();
	
	textoSlide[2] = "PERSPECTIVA ILUSTRADA DA LAVANDERIA";
	textoSlide[6] = "PERSPECTIVA ILUSTRADA DA QUADRA DE TÊNIS ILUMINADA";
	textoSlide[3] = "PERSPECTIVA ILUSTRADA DO FITNESS CENTER";
	textoSlide[1] = "PERSPECTIVA ILUSTRADA DO HALL DE ENTRADA";
	textoSlide[4] = "PERSPECTIVA ILUSTRADA DO SALÃO DE FESTAS";
	textoSlide[7] = "PERSPECTIVA ILUSTRADA DO SPA";
	textoSlide[8] = "PERSPECTIVA ILUSTRADA DA CHURRASQUEIRA COBERTA";
	textoSlide[5] = "PERSPECTIVA ILUSTRADA DA PISCINA";
	
	$(".moverDireita").on("click",function(){
		$("#descricaoSlide").fadeOut();
			
		if(iniset == 1)
		{
			iniset = 8;
		}
		else
		{
			iniset = iniset-1;	
		}
		$("#slideCentral").animate({left:"+=684"}, 500,function(){
			var li = $("#slideCentral .slide:last").clone();
			$("#slideCentral .slide:last").remove();
			$('#slideCentral').css({'left' :"-=684"});
			$("#slideCentral").prepend(li);
		});	
		$("#slideEsquerda").animate({left:"+=684"}, 500,function()
		{
			var li = $("#slideEsquerda .slide_esquerda:last").clone();
			$("#slideEsquerda .slide_esquerda:last").remove();
			$('#slideEsquerda').css({'left' :"-=684"});
			$("#slideEsquerda").prepend(li);
		});
		$("#slideDireita").animate({left:"+=684"}, 500,function()
		{
			var li = $("#slideDireita .slide:last").clone();
			$("#slideDireita .slide:last").remove();
			$('#slideDireita').css({'left' :"-=684"});
			$("#slideDireita").prepend(li);
		});
		$("#descricaoSlide center").html(textoSlide[iniset]);
		$("#descricaoSlide").fadeIn();
		return false;
	});
	
	$(".moverEsquerda").on("click",function(){
		$("#descricaoSlide").fadeOut();
		if(iniset == 8)
		{
			iniset = 1;
		}
		else
		{
			iniset = iniset+1;	
		}
		$("#slideCentral").animate({left:"-=684"}, 500, function(){
			var li = $("#slideCentral .slide:first").clone();
			$("#slideCentral .slide:first").remove();
			$('#slideCentral').css({'left' :"+=684"});
			$("#slideCentral").append(li);
		});
		$("#slideDireita").animate({left:"-=684"}, 500,function(){
			var li = $("#slideDireita .slide:first").clone();
			$("#slideDireita .slide:first").remove();
			$('#slideDireita').css({'left' :"+=684"});
			$("#slideDireita").append(li);
		});
		$("#slideEsquerda").animate({left:"-=684"}, 500,function(){
			var li = $("#slideEsquerda .slide_esquerda:first").clone();
			$("#slideEsquerda .slide_esquerda:first").remove();
			$('#slideEsquerda').css({'left' :"+=684"});
			$("#slideEsquerda").append(li);
		});
		$("#descricaoSlide center").html(textoSlide[iniset]);
		$("#descricaoSlide").fadeIn();
		return false;
	});
	
	var cont = 0;
	var define = setInterval(function(){
		if(cont >= 10)
		{
			$(".popup_mob").slideUp();	
			clearInterval(define);									
		}
		else
		{
			$(".popup_mob").slideDown();												
			cont++;							
			return false;							
		}
	}, 2000);
				
	$(".closed").on("click",function(){
		$(".popup_mob").slideUp();
		clearInterval(define);
		return false;
	});
	
});