function validar(name, nameClass)
{
	$("input[name="+name+"]").on("blur", function(){
		var classe = $(this).attr("class");
		if(classe != "statusErro") {			
			if($(this).val() == "") {
				$(this).removeClass(nameClass).addClass("statusErro");
				$(this).val("*Este campo é obrigatório.");
			}
			else {
				if(name == "email") {
					if(valid_email($(this).val()) == "sim") {						
						$(this).removeClass(nameClass).addClass("statusValido");
						//$(this).attr("disabled","disabled");
						$(this).attr("readonly","readonly");
					}
					else {
						$(this).removeClass(nameClass).addClass("statusErro");
						$(this).val("*E-mail inválido.");
					}
				}
				else {
					$(this).removeClass(nameClass).addClass("statusValido");
					//$(this).attr("disabled","disabled");
					$(this).attr("readonly","readonly");
				}
				
			}
		}
	}).on("focus", function(){
		var classe = $(this).attr("class");
		if(classe == "statusErro") {
			var valor = $("."+classe).val();
			$(this).val("");
			$(this).removeClass("statusErro").addClass(nameClass);
		}
	});
}
function valid_email(email) {
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(filtro.test(email)) {		
		return "sim";
	}
	else {		
        return "nao";
	}
}

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
	window.location = "contato";
}

$(function() {	
	$(".fancybox").fancybox({
        openEffect	: 'fade',
        closeEffect	: 'fade',
        nextEffect      : 'slow',
        prevEffect      : 'fade'
    });
	
	
	var width = $(window).width();

	if (width > 1345) {
		var tamanhoFonte = width * 0.35 / 100;
	}
	$("h3 a").css("fontSize", tamanhoFonte + "em");
	window.onresize = function(event) {
		var width = $(window).width();
		if (width > 1345) {
			var tamanhoFonte = width * 0.35 / 100;
			$("h3 a").css("fontSize", tamanhoFonte + "em");
		}
	}
	var positionTop = false;
	var positionLeft = false;
	$(".activePopUp").hover(function() {
		var topMargin = $(this).css("marginTop").replace('px', '');
		var leftMargin = $(this).css("marginLeft").replace('px', '');
		// tamanho do container
		var altura = $("#planta_resort").height();
		var largura = $("#planta_resort").width();
		if (positionTop != topMargin || positionLeft != leftMargin) {
			$("#box-shadow").fadeOut(100, function() {
				$(this).css({
					marginTop : (((topMargin) / altura * 100)) + "%",
					marginLeft : (((leftMargin - 123) / largura * 100)) + "%"
				});
				$("#box-shadow").fadeIn();
				positionTop = topMargin;
				positionLeft = leftMargin;
			});
		}
	}, function() {

	});

	$(".checkBg").hover(function() {
		$(".fundoPreto", this).fadeIn(200);
		$("a", this).animate({
			"left" : "100px"
		}, 200);
		$("h3 a img", this).fadeIn(200);
	}, function() {
		$(".fundoPreto", this).fadeOut(200);
		$("a", this).animate({
			"left" : "0px"
		}, 200);
		$("h3 a img", this).fadeOut(200);
	});
		
	$("a#topo").click(function(){
		$("html, body").animate({scrollTop:0},"slow");
		return false;
	});
	
	/* validate */
	validar("nome", "statusNome");
	validar("email", "statusEmail");
	validar("tel", "statusTelefone");
	
	$("button[name=enviar]").on("click", function(event){		
		var error = 0;
		$("label[for=opcao1] .form_meio_erro").fadeOut("slow");
		$("label[for=mensagem] .form_meio_erro").fadeOut("slow");
		
		if($("input[name=nome]").val() == "") {
			$("input[name=nome]").removeClass("statusNome").addClass("statusErro");
			$("input[name=nome]").val("*Este campo é obrigatório.");
			error ++;
		}
		
		if($("input[name=email]").val() == "") {
			$("input[name=email]").removeClass("statusEmail").addClass("statusErro");
			$("input[name=email]").val("*Este campo é obrigatório.");
			error ++;
		}
		else {
			if(valid_email($("input[name=email]").val()) == "nao") {
				$("input[name=email]").removeClass("statusEmail").addClass("statusErro");
				$("input[name=email]").val("*E-mail inválido.");
				error ++;
			}
		}
		
		if($("input[name=tel]").val() == "") {
			$("input[name=tel]").removeClass("statusTelefone").addClass("statusErro");
			$("input[name=tel]").val("*Este campo é obrigatório.");
			error ++;
		}
		
		if($(".opcao11").is(":checked")==false && $(".opcao12").is(":checked")==false) {
			$("label[for=opcao1] .form_meio_erro").fadeIn("slow");
			error ++;			
		}
		
		if($("textarea[name=mensagem]").val() == "") {
			$("label[for=mensagem] .form_meio_erro").fadeIn("slow");
			error ++;
		}
		
		$("html, body").animate({scrollTop:0},"slow");
		if(error > 0) {
			return false;
		}
	});
		
	$("#container-galeria li:eq(2)").addClass("ativo");	
	$("#setaD").on("click",function(){		
		$("#container-galeria section ul").animate({left:"+=447"}, 500, function(){
			var li = $("#container-galeria li:last").clone();
			$("#container-galeria li:last").remove();
			$("#container-galeria ul").css({left:"-=447"});
			$("#container-galeria ul").prepend(li);
			$(".ativo").removeClass("ativo");
			$("#container-galeria li:eq(2)").addClass("ativo");
		});		
		return false;
	});
	$("#setaE").on("click",function(){
		$("#container-galeria section ul").animate({left:"-=447"}, 500, function(){
			var li = $("#container-galeria li:first").clone();
			$("#container-galeria li:first").remove();
			$("#container-galeria ul").css({left:"+=447"});
			$("#container-galeria ul").append(li);
		});
		return false;
	});
	
	
	
	
	/*$("#setaD").on("click",function(){		
		$("#container-galeria section ul").animate({left:"+=447"}, 1200);
		return false;
	});
	$("#setaE").on("click",function(){
		$("#container-galeria section ul").animate({left:"-=447"}, 1200);
		return false;
	});*/
	
	
	
	/*$("#setaD").on("click",function(){		
		if($(".ativo").next('section').size()){
			$(".ativo").hide().removeClass("ativo").next('section').show('swing').addClass("ativo");
			//alert('if');
		}
		else {
			$(".ativo").fadeOut('fast').removeClass("ativo");
			$("#galeria section:eq(0)").show('swing').addClass("ativo");
			//alert('else');
		}
		
		return false;
	});
	$("#setaE").on("click",function(){
		if($(".ativo").prev('section').size()){
			$(".ativo").fadeOut('fast').removeClass("ativo").prev().fadeIn(1200,'swing').addClass("ativo");
			//alert('if');
		}
		else {			
			$("#galeria section").fadeOut('fast').removeClass("ativo").last().fadeIn('swing').addClass("ativo");
			//alert('else');
		}
		
		return false;
	});*/
	
	
	
	
	
	
	
	
	
	
	
	
	
});