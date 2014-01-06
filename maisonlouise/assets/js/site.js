/*
function scrollToElement( target ) {
    var topoffset = 40;
    var speed = 800;
    var destination = jQuery( target ).offset().top - topoffset;    
    jQuery( 'html:not(:animated),body:not(:animated)' ).animate( { scrollTop: destination}, speed, function() {
        window.location.hash = target;
    });
    return false;
}
*/
function valid_email(email){
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		
	if(filtro.test(email)){
		return true;
	}else{
		return false;
	}	
}

$(document).ready(function(){
	//$('input[placeholder],textarea[placeholder]').placeholder();
	
	$("#toTop").scrollToTop();
	
	$("#seta_esquerda").on("click",function(){
		
		 $(".ul_zabo").fadeOut('fast', function() {
			$(".ul_zabo").animate({left:"-=852"}, 100,function(){
			var li = $(".ul_zabo li:first").clone();
			$(".ul_zabo li:first").remove();
			$('.ul_zabo').css({'left' :"+=852"});
			$(".ul_zabo").append(li);
			});
			$(this).fadeIn('fast');
		  });
			
			return false;
	});
	
	$("#seta_direita").on("click",function(){
			$(".ul_zabo").fadeOut('fast', function() {
			$(".ul_zabo").animate({left:"+=852"}, 100,function(){
			var li = $(".ul_zabo li:last").clone();
			$(".ul_zabo li:last").remove();
			$('.ul_zabo').css({'left' :"-=852"});
			$(".ul_zabo").prepend(li);
			$(this).fadeIn('fast');
			});
		});
			return false;
	});
	
	$(".abrirPopUp").on("click",function(){
		var target = $(this).attr("href");
			$(target).fadeIn("slow");
		return false;
	});
	$(".closePopUp").on("click",function(){
		var target = $(this).attr("href");
			$(target).fadeOut("slow");
		return false;
	});
	
	$(".setLocator").on("click",function(){		
		var position = $(this).attr("rel");
		$("html,body").animate({scrollTop: position}, 500);
		return false;
	});
	
	$(".abrirVejaMais").on("click",function(){
		$("#apartamento_itens").toggle("slow",function(){
		/*
			$("#conteudo").animate({top:"-587px"}, 500,function(){
				})
				*/
		});
		return false;
	});
	
	
	$("#btnEnviar").on("click", function(){
		
		var inputNome = $("#form_contato input[type=text]").val();
		var inputTel = $("#form_contato input[type=tel]").val();
		var inputEmail = $("#form_contato input[type=email]").val();
		var textArea = $("#form_contato textarea").val();
		var mensagem = "";
		if(inputNome == ""){
			mensagem += "O campo nome está em branco. \n";
		}
		if(inputTel == ""){
			mensagem += "O campo telefone está em branco ou não é um numero de telefone valido. \n";
		}
		if(inputEmail == ""){
			mensagem += "O campo email está em branco. \n";
		}
		if(valid_email(inputEmail) == false){
			mensagem += "Não é um valor valido de e-mail. \n";
		}
		if(textArea == ""){
			mensagem += "O campo mensagem está em branco.";
		}
		
		if(mensagem != ""){
			alert(mensagem);
			return false;
		}		
		
	});
	
	$("#form_contato input[type=tel]").mask("(99) 9? 9999 - 9999");
	
	$(".x").on("click", function(){
		$(".mensagemEmail").fadeOut('slow');
	});
	
	
});