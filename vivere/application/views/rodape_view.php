			<?php 			
			if($this->uri->segment(1) != "" && $this->uri->segment(1) != 'home'):
			?>
			<div class="menu_footer">
				
				<p class="center tam">
					<span class="tam other" style="margin-left:18px">Incorporação e Construção</span>
					<a href="http://www.incorporadorapatriani.com.br" target="_blank">
						<img src="<?php echo base_url(); ?>assets/images/patriani_logo.png" alt="" title="" />
					</a>
				</p>
				
				<ul>
					<li class="center">
						<ul>
							<li class="other inter">Intermediação</li>
							<li class="other finan" style="margin-left:8px">Financiamento</li>
							<li class="other const" style="margin-left:5px">Administradora<br/> e Gerenciadora da Obra</li>
						</ul>
					</li>
					<li class="side">
						<a href="http://www.fernandezmera.com.br" target="_blank">
							<img src="<?php echo base_url(); ?>assets/images/fernandezMera_logo.png" alt="" title="" />
						</a>
					</li>
					<li class="side">
						<a href="http://www.viananegocios.com.br" target="_blank">
							<img src="<?php echo base_url(); ?>assets/images/viana_logo.png" alt="" title="" />
						</a>
					</li>
					<li class="side">						
						<img src="<?php echo base_url(); ?>assets/images/santander.png" alt="" title="" />						
					</li>
					<li class="side">
						<a href="http://www.construire.com.br" target="_blank">
							<img src="<?php echo base_url(); ?>assets/images/construire.png" alt="" title="" />
						</a>
					</li>									
				</ul>
				
				<?php if($this->uri->segment(1) != "" && $this->uri->segment(1) == 'realizacao'): ?>
				
					<p class="txt">R.1 - M. 36.342, em 16 de Janeiro de 2013 , 1º Oficial de registro de imóveis de São Caetano do Sul - SP.
					Fernandez Mera Negócios Imobiliários Ltda. Av. Brigadeiro Luis Antonio, 4.910 - São Paulo, Cep.: 01402-002 - SP. Creci 5425J. Viana Negócios Imobiliários. R. Amazonas, 439 -São Caetano do Sul – S.P. CRECI : J-20461.   
					</p>
				
				<?php endif; ?>
				
			</div>
			<?php endif; ?>
		</div><!-- fecha div#box -->		
	</div><!-- fecha div -->	
</div><!-- fecha div#geral -->
			
<!-- <aside style="display:none" class="popup_mob">
  	<div id="close" class="closed" title="FECHAR"></div>
  	<a href="http://www.spettacolopatriani.com.br" target="_blank">
  		<img class="link_externo" src="<?php #echo base_url('assets'); ?>/images/pop_up_spettacolo.jpg" alt="Spettacolo Patriani" title="Visite Decorado" />
  	</a>
</aside> -->