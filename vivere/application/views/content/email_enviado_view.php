<script type="text/javascript">
	$(document).ready(function(){
		openLeft();
		alert('<?php echo $email_enviado; ?>');		
		window.location.replace("<?php base_url(); ?>contato");

		// simulates similar behavior as clicking on a link
		//window.location.href = "http://jquery4u.com";
	});	
</script>
<div class="box">
	
	<div class="title center">
	
		<h2>Preencha o formulário abaixo ou ligue para</h2>
		<span><small>(11)</small> 4318.0821</span>
		
	</div>
	
	<div class="form">
	
		<form id="contactform" class="rounded" method="post"  action="<?php echo base_url(); ?>contato-email">
		
			<div class="field">
				<label for="name">*Nome</label>
				<input type="text" class="input" name="name" id="name">
				<p class="hint">Digite seu nome.</p>
				<p class="error">error</p>
			</div>
			
			<div class="field line right">
				<label for="email">*E-mail</label>
				<input type="text" class="input small" name="email" id="email">
				<p class="hint">Digite o seu e-mail.</p>
				<p class="error">error</p>
			</div>
			
			<div class="field line">
				<label for="telefone">Telefone</label>
				<input type="text" class="input small" name="telefone" id="telefone">
				<p class="hint">Digite seu Telefone, exemplo: (99) 9999 - 9999.</p>
				<p class="error">error</p>
			</div>
			
			<div class="field">
				<label for="message">Mensagem</label>
				<textarea type="text" class="input textarea" name="message" id="message"></textarea>
				<p class="hint">Escreva sua mensagem.</p>				
			</div>
			
			<input type="submit" name="Submit" class="button" value="ENVIAR" />
			
		</form>
		
		<div class="atendimento">
			
			<div class="img">
			
				<a href="<?php echo base_url(); ?>" title="Atendimento Online">
				
					<img alt="Atendimento Online" src="<?php echo base_url(); ?>assets/images/icon_chat.png" />
				
				</a>
			
			</div>
			
		</div>
		
	</div>
