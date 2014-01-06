$(function(){
	
	$('#menu ul li.menu_topo a#shItem').hover(function(){
		$(this).addClass('shMenu');
	},function(){
		$(this).removeClass('shMenu');		
	});
	
	$('#menu ul li.menu_topo ul li.submenu a').hover(function(){
		$('#menu ul li.menu_topo a#shItem').addClass('shMenu');
	},function(){
		$('#menu ul li.menu_topo a#shItem').removeClass('shMenu');		
	});
	
	$('.status_nome').clear();
	$('.status_email').clear();
	$('.status_telefone').clear();
	$('.status_msg').clear();
	
	$('.btn_enviar').on('click', function(){
		var n, e, t;
		var msg = "";
		n = $('.status_nome').val();
		e = $('.status_email').val();
		t = $('.status_telefone').val();
		
		if(n == "Nome:"){ msg += 'Campo Nome vazio. \n'; }
		if(e == "E-mail:"){ msg += 'Campo E-mail vazio. \n'; }
		if(t == "Telefone:"){ msg += 'Campo Telefone vazio. \n'; }
		
		if(msg != ""){
			alerta = "Por favor, preencha o(s) campo(s) abaixo: \n\n"+msg;
			alert(alerta);
			return false;
		}
		
	});
	
});