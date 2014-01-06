<div id="sub_conteudo">

    <div class="subconteudos_caixa"> 
           <div class="email_contato">
               <h2 class="subconteudos_titulos">Fale Conosco</h2>
                <p><img src="<?= base_url(); ?>assets/images/img_contato.png" class="img_contato" alt="Futuro Lançamento em Piracicaba" title="Futuro Lançamento em Piracicaba"/></p>
                <p class="text_email">E-mail:<a href="mailto:hnd@hndhabitacoes.com.br" class="link_email" title="Clique aqui para nos enviar um e-mail">hnd@hndhabitacoes.com.br</a></p>
            </div>    
           <div class="form_contato">
             <form method="post" action="<?php echo base_url("contato")?>">
                  <input class="status_nome" name="nome" value="Nome:" />
                  <br class="clear" />
                  <input class="status_email" name="email" value="E-mail:" />
                  <br class="clear" />
                 <input class="status_telefone" name="phone" value="Telefone:" />
                 <br class="clear" />
                <textarea class="status_msg" cols="60" rows="10" name="mss">Mensagem:</textarea>

               <br class="clear" />
               
               <button type="reset" class="btn_limpar" title="limpar">limpar</button>
               <button type="submit" class="btn_enviar" title="enviar" name="enviar_email" value="enviar">enviar</button>
             </form>
           </div>
     </div>


</div>
<?php 
if(isset($email_enviado))
	echo $email_enviado;
?>