<section id="contatoErro">
	<aside>
		<figure>
		  <img src="<?php echo base_url('assets');?>/img/alert_falha.png">
		</figure>

		<h5>Erro</h5>
		<p class="aviso_erro">Falha no envio da mensagem.</p>
		<p class="txt_aviso_erro">
			Se o erro persistir entre em contato através do e-mail abaixo:
			<br/>
			<span>
				<a href="mailto:contato@myplacepatriani.com.br?subject=Erro ao enviar o e-mail pelo site.">myplace@myplace.com.br</a>
			</span>
		</p>
		<p>
			Ou aguarde, você será redirecionado novamente para o site em <span id="cont">25</span> segundos...
		</p>
	</aside>
</section>

<script type="text/javascript">
$(function(){
	contador(15);
});
</script>