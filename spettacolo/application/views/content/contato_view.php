<div id="contato">
	<h2 class="titulo">
		PREENCHA O FORMULÁRIO ABAIXO <br />OU LIGUE PARA (15) 3211.4482
	</h2>
	<div id="contato_esquerda">
		
		<?php if($this->session->flashdata('mensagem')): ?>
		<div class="alert <?php echo $this->session->flashdata('alerta'); ?>">			
		  	<strong><?php echo $this->session->flashdata('mensagem'); ?></strong>
		  	<span class="close">x</span>
		</div>
		<?php endif; ?>
		
		<form action="<?php echo base_url('email'); ?>" method="post">			
			<input class="status_nome" placeholder="Nome" name="nome">
			<?php echo form_error('nome', '<label for="error">', '</label>'); ?>
			<br /> 
			<input class="status_email" placeholder="E-mail" name="email" onblur="valid_email($(this).val());">
			<?php echo form_error('email', '<label for="error">', '</label>'); ?>
			<br /> 
			<input class="status_telefone" placeholder="Telefone" name="telefone">
			<?php echo form_error('telefone', '<label for="error">', '</label>'); ?>
			<br />
			<textarea class="status_msg" placeholder="Mensagem" name="mensagem"></textarea>
			<br />
			<button type="submit" class="btn_enviar">enviar</button>
		</form>
	</div>
	
	<a href="" class="btn_atendimentoOnline" rel="atendimento" title="Atendimento Online" target="_blank" onclick="window.open('<?php echo $atendimentos; ?>','Janela','toolbar=yes,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=700,height=480'); return false;">	
	<div id="contato_direita"></div></a>





	<div id="footer3">

  <p class="text_footer">
         Incorporação e Construção
         <br/>
         <a href="http://www.incorporadorapatriani.com.br/" class="logo_rodape" target="_blank"><img src="<?php echo base_url('assets'); ?>/img/patriani.png" alt="" title="" style="margin-top:15px"></a>
    </p>
     <p class="text_footer">
         Intermediação
         <br/>
         <a href="http://www.mendesortega.com.br/" class="logo_rodape" target="_blank"><img src="<?php echo base_url('assets'); ?>/img/mendez_ortega.png" style="margin-top:5px" alt="" title=""></a>
         <a href="http://www.fernandezmera.com.br/" class="logo_rodape" target="_blank"><img src="<?php echo base_url('assets'); ?>/img/fernandez_mera.png" style="margin-top:5px" alt="" title=""></a>
    </p>
     <p class="text_footer">
        Financiamento
        <br/>
         <a href="#" class="logo_rodape"><img src="<?php echo base_url('assets'); ?>/img/santander.png" alt="" title=""></a>
    </p>
    <p class="text_footer" style="margin-top:-5px;">
       Administradora<br/>
       e Gerenciadora da Obra
       <br/>
         <a href="http://www.construire.com.br/" class="logo_rodape" target="_blank"><img src="<?php echo base_url('assets'); ?>/img/construire.png" alt="" title=""></a>
    </p>
    <p class="text_footer" style="margin-top:-5px;">

         <a href="http://www.spicyweb.com.br/" class="logo_rodape" target="_blank"><img src="<?php echo base_url('assets'); ?>/img/spicy.png" alt="spicy web" title="spicy web" style="margin-left:15px; margin-top:50px;" ></a>
    </p>
  	    
  </div>






  
</div>