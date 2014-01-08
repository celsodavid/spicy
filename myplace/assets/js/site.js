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
	$("#toTop").scrollToTop();	
	$('#telefone').mask("(99)9999-9999");
		
});