function openLeft(){	
	$('.main').animate({
		left: '0'
	},"fast", function() {
		$('.transparency').fadeOut('fast');
		$('.box').fadeIn('slow', function() {
				
		});
	});
}
function valid_email(email){
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		
	if(filtro.test(email)){
		return true;
	}else{
		return false;
	}	
}

$(document).ready(function(){

		$('a').click(function(){
					var href = $(this).attr("href");
					var param = $(this).attr("rel");
					if(param == "close")
					{
							$('.box').fadeOut('slow', function() {
										$('.main').animate({
											left: '350'
										},'fast', function() {
										window.location = href;
										});
							});
					}
					else
					{
						return true;
					}
					return false;
		});
		
		$('input[name="telefone"]').mask('(99) 9999 - 9999? 9');
		
		$('input[name="Submit"]').on("click", function(){
			var errors = "";
			
			var nome = $('input[name="name"]').val();
			if(nome == ""){
				errors = errors+"\n O campo nome é obrigatorio.";
			}else if(nome.length < 3){
				errors = errors+"\n O campo nome deve conter no mínimo 3 caracteres.";
			}
			
			var email = $('input[name="email"]').val();
				if(email == ""){
					errors = errors+"\n O campo email é obrigatorio.";
				}else if(valid_email(email) == false){
					errors = errors+"\n O campo email deve conter um email válido.";
				}
			
				if(errors != ""){
					alert("Erro(s) encontrado(s) no preenchimento deste Fomulário de Contato.\n\n"+errors);
					return false;
				}		
		});
		
		$("a[name=atendimento]").click(function(){
			var url = window.location;
			window.location.replace(url);
		});		
})		