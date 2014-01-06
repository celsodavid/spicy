function contador(segundos){
	contador1 = setTimeout('redireciona()', segundos*1000);
	atualiza(segundos);
}
function atualiza(segundos){
	if(segundos>0){
		$("#cont").html(segundos);
		segundos = segundos-1;
		contador2 = setTimeout('atualiza(\''+segundos+'\')', 1000);
	}
}
function redireciona(){
	window.location = "fale-conosco";
}

$(function(){	
	$('#telefone').mask("(99)9999-9999");
	$('#idade').mask("9?9");
	$('#filhos').mask("9?9");
	
	$('.open_popup').click(function(){
		$('#shadow').css({opacity:0.7});
		$('#shadow').fadeIn(300);
		$('#contato').fadeIn(1000);
		$('html, body').animate({scrollTop:0},600).css({'overflow': 'hidden'});		
		return false;
	});
	
	$('#shadow, #close').click(function(){
		$('#shadow, #contato').fadeOut(300);
		$('html, body').css({'overflow': ''});
		return false;
	});
	
	$('#shadow, #close2').click(function(){
		$('#formContato').css('display','block');
		$('.aviso_contato').css('display','none');
		$('#shadow, #contato').fadeOut(300);
		$('html, body').css({'overflow': ''});
		return false;
	});
	
	$(".openPopUp").on("click",function(){		
		var target = $(this).attr("href");
		$(target).fadeIn("slow");
		return false;
	});
	$(".closePopUp").on("click",function(){
		var target = $(this).attr("href");
		$(target).fadeOut("slow");
		return false;
	});
	
	$("a", $(".imagens_lazer")).on('click', function(){
		//alert(window.location);
		//var hash = baseurl + "lazer/";
		var newSrc = $(this).data("src");
		var index = $(this).data("index");
		var position = $(this).attr('dir');
		$.ajax({
			type:'post',
			url:baseurl+'dados',
			data:{src:newSrc, indice:index},
			beforedSend:function(){
				$('section#lazer').fadeOut('slow');
				$('#lazer #box_carregando').fadeIn('slow');
			},
			success:function(data){				
				$('section#lazer').empty().html(data).fadeIn('slow');
				$('#lazer #box_carregando').fadeOut('slow');
				$('.imagens_lazer a').removeAttr("id");				
				$('.imagens_lazer a[rel='+index+']').attr('id','active');
				$(window).scrollTop(position);
				//window.history.pushState({url: "" + newSrc + ""}, "" , "" + window.location + "/" + newSrc + "");
				//window.history.replaceState({}, 'teste', ""+hash+newSrc+"");
			},
			error:function(){
				alert('Error 414');
			}
		});		
		return false;
	});
	
	
});