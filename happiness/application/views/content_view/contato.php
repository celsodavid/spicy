<section class="conteudo">

	<section id="contato">
		
		<?php echo form_open('fale-conosco'); ?>
			<?php #echo validation_errors(); ?>
			<h4>Preencha o formulário abaixo ou ligue para (11) 2598.3730</h4>
			<div id="container_01">
				<span class="col_esquerda">
				<?php 
					echo form_label("Nome:","nome", array('class'=>'statusNome'));
					$atributos = array(
						'id' => 'nome',
						'class' => 'statusNome',
						'name' => 'nome',
						'value' => set_value('nome')	
					);
					echo form_input($atributos);
					echo '<span class="txt_erro">'.form_error('nome').'</span>';
					echo "<br/>";
					
					echo form_label("Telefone:","telefone", array('class'=>'statusTelefone'));
					$atributos = array(
							'id' => 'telefone',
							'class' => 'statusTelefone',
							'name' => 'telefone',
							'value' => set_value('telefone')
					);
					echo form_input($atributos);
					echo '<span class="txt_erro">'.form_error('telefone').'</span>';
					echo "<br/>";
					
					echo form_label("Estado Civil:","estadoCivil",array('class'=>'EstadoCivil'));
					$atributos = array(
							'1' => 'Solteiro (a)',
							'2' => 'Casado (a)',
							'3' => 'Divorciado (a)',
							'4' => 'Viúvo (a)'
					);
					$sv_val = $this->input->post('estadoCivil');
					echo form_dropdown("estadoCivil", $atributos, set_value('estadoCivil',(!empty($sv_val)) ? $sv_val : 1));
					echo "<br/>";
				?>				
				</span>
			
				<span class="col_direita">
					<?php 
						echo form_label("Idade: ","idade",array('class'=>'statusIdade'));
						$atributos = array(
								'id' => 'idade',
								'class' => 'statusIdade',
								'name' => 'idade',
								'value' => set_value('idade')
						);
						echo form_input($atributos);
						echo "<br/><br/>";
						
						echo form_label("E-mail: ","email",array('class'=>'statusEmail'));
						$atributos = array(
								'id' => 'email',
								'class' => 'statusEmail',
								'name' => 'email',
								'value' => set_value('email')
						);
						echo form_input($atributos);
						echo '<span class="txt_erro_email">'.form_error('email').'</span>';
						echo "<br/>";
						
						echo form_label("Filhos: ","filhos",array('class'=>'statusFilhos'));
						$atributos = array(
								'id' => 'filhos',
								'class' => 'statusFilhos',
								'name' => 'filhos',
								'value' => set_value('filhos')
						);
						echo form_input($atributos);
						echo "<br/>";
					?>				
				</span>
				
				<span class="col_central">
					<label class="titulo_radio">Você conhece a incorporadora Patriani?</label>
					<?php
						echo form_checkbox(array('id'=>'sim','type'=>'radio','name'=>'opcao1','value'=>'sim')),
							 form_label(" Sim", "sim"),
							 form_checkbox(array('id'=>'nao','type'=>'radio','name'=>'opcao1','value'=>'nao')),
							 form_label(" Não", "nao");
						echo '<span class="txt_erro_patriani">'.form_error('opcao1').'</span>';
						echo "<br/><br/>";						
					?>
					
					<label class="titulo_checkbox">Como ficou sabendo sobre o empreendimento?</label>
					<br/><br/>
                    <span class="box_checkbox">
                    <?php 
                    	echo form_checkbox(array('id'=>'tv','name'=>'opcao2[]','value'=>'TV')),
                    		 form_label(" TV", "tv"),
                    		 "<br/><br/>";
                    	echo form_checkbox(array('id'=>'estandarte','name'=>'opcao2[]','value'=>'Estandarte')),
	                    	 form_label(" Estandarte", "estandarte"),
	                    	 "<br/><br/>";
                    	echo form_checkbox(array('id'=>'bandeiras','name'=>'opcao2[]','value'=>'Bandeiras')),
	                    	 form_label(" Bandeiras", "bandeiras"),
	                    	 "<br/><br/>";
	                    echo form_checkbox(array('id'=>'placas','name'=>'opcao2[]','value'=>'Placas')),
	                    	 form_label(" Placas", "placas"),
	                    	 "<br/><br/>";
                    ?>                    	
                    </span>
                    
                    <span class="box_checkbox">
                    <?php 
                    	echo form_checkbox(array('id'=>'jornal','name'=>'opcao2[]','value'=>'Jornal')),
                    		 form_label(" Jornal", "jornal"),
                    		 "<br/><br/>";
                    	echo form_checkbox(array('id'=>'cavalete','name'=>'opcao2[]','value'=>'Cavalete')),
                    		 form_label(" Cavalete", "cavalete"),
                    		 "<br/><br/>";
                    	echo form_checkbox(array('id'=>'folheto','name'=>'opcao2[]','value'=>'Folheto')),
                    		 form_label(" Folheto", "folheto"),
                    		 "<br/><br/>";
                    	echo form_checkbox(array('id'=>'indicacao','name'=>'opcao2[]','value'=>'Indicação')),
                    		 form_label(" Indicação", "indicacao"),
                    		 "<br/><br/>";
                    ?>
					</span>
					
					<span class="box_checkbox">
					<?php 
						echo form_checkbox(array('id'=>'revista','name'=>'opcao2[]','value'=>'Revista')),
							 form_label(" Revista", "revista"),
							 "<br/><br/>";
						echo form_checkbox(array('id'=>'homemSeta','name'=>'opcao2[]','value'=>'HomemSeta')),
							 form_label(" Homem Seta", "homemSeta"),
							 "<br/><br/>";
						echo form_checkbox(array('id'=>'internet','name'=>'opcao2[]','value'=>'Internet')),
							 form_label(" Internet", "internet"),
							 "<br/><br/>";
						echo form_checkbox(array('id'=>'corretor','name'=>'opcao2[]','value'=>'Corretor')),
							 form_label(" Corretor", "corretor"),
							 "<br/><br/>";
					?>
					</span>
				</span>
				
				<?php 
					echo form_label("Mensagem: ","mensagem",array('class'=>'mensagem'));
					$atributos = array(
						'name' => 'mensagem',
						'class' => 'statusMensagem',
						'id' => 'mensagem',
						'value' => set_value('mensagem')	
					);
					echo form_textarea($atributos);
					echo '<span class="txt_erro_patriani">'.form_error('mensagem').'</span>';
					echo '<br class="clear"/>';
					
					$atributos = array(
						'class' => 'enviar',
						'id' => 'save',
						'title' => 'Enviar',
						'name' => 'enviar',
						'value' => 'enviar',
						'type' => 'submit',
						'content' => 'Enviar'
					);
					echo form_button($atributos);
				?>
			</div>
			
			<figure id="atendimentonline">
				<img src="<?php echo base_url('assets'); ?>/img/ico_contato.png">
				<span class="texto_online">Atendimento online</span>
				<br/>
		        <span> 
		        	<a class="texto_online_hover" href="#" target="_blank" title="Atendimento Online" onclick="window.open('<?php echo $atendimento; ?>','Janela','toolbar=yes,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=700,height=480'); window.location.reload(); return false;">
		        		clique aqui
		        	</a> 
		        </span>
		    </figure>
		<?php echo form_close(); ?>
		
					
		<!-- <form method="post" action="#">
			<h4>Preencha o formulário abaixo ou ligue para (11) 2598.3730</h4>

			    <div id="container_01">
			        <span class="col_esquerda">
				    	<label for="nome">Nome:</label>
	                    <input class="statusNome" type="text" name="nome" id="nome" />
	                    <br />

	                    <label for="nome">Telefone:</label>
	                    <input class="statusTelefone" type="text" name="nome" id="nome" /> 
	                    <br />

	                    <label for="nome" class="EstadoCivil">Estado Civil:</label>
	                    <select>
							<option value="Solteiro(a)">Solteiro (a)</option>
							<option value="Casado(a)">Casado(a)</option>
							<option value="Divorciado(a)">Divorciado (a)</option>
							<option value="Viúvo(a)">Viúvo (a)</option>
	                    </select>
	                    <br />
                    </span>

                    <span class="col_direita">
				    	<label for="nome">Idade:</label>
	                    <input class="statusIdade" type="text" name="nome" id="nome" /> 
	                    <br />

	                    <label for="nome">E-mail:</label>
	                    <input class="statusEmail" type="text" name="nome" id="nome" /> 
	                    <br />

	                    <label for="nome">Filhos:</label>
	                    <input class="statusFilhos" type="text" name="nome" id="nome" /> 
	                    <br />
                    </span>

                    <span class="col_central">
                    	<label for="nome">Você conhece a incorporadora Patriani?</label>
                    	<input type="radio" name="opcao1" value="Sim"> Sim
                        <input type="radio" name="opcao1" valeu="Nao"> Não
                        <br /><br />

                        <label for="nome" class="titulo_checkbox">Como ficou sabendo sobre o empreendimento?</label>
                        <br /><br />
                        <span class="box_checkbox">
	                        <input type="checkbox" name="opcao2" value="tv"> TV
	                        <br /><br />
							<input type="checkbox" name="opcao2" value="Estandarte"> Estandarte
							<br /><br />
							<input type="checkbox" name="opcao2" value="Bandeiras"> Bandeiras
							<br /><br />
							<input type="checkbox" name="opcao2" value="Placas"> Placas
						</span>

						<span class="box_checkbox">
	                        <input type="checkbox" name="opcao2" value="Jornal"> Jornal
	                        <br /><br />
							<input type="checkbox" name="opcao2" value="Cavalete"> Cavalete
							<br /><br />
							<input type="checkbox" name="opcao2" value="Folheto"> Folheto
							<br /><br />
							<input type="checkbox" name="opcao2" value="Indicação"> Indicação
						</span>

						<span class="box_checkbox">
	                        <input type="checkbox" name="opcao2" value="Revista"> Revista
	                        <br /><br />
							<input type="checkbox" name="opcao2" value="HomemSeta"> Homem Seta
							<br /><br />
							<input type="checkbox" name="opcao2" value="Internet"> Internet
							<br /><br />
							<input type="checkbox" name="opcao2" value="Corretor"> Corretor
						</span>		

                    </span>


                    <label for="nome" class="mensagem">Mensagem:</label>
                    <textarea name="mensagem" class="statusMensagem"></textarea>
		            <br class="clear" />

		            <button type="button" class="enviar" title="Enviar" id="save">Enviar</button>

		        </div> 


	           <figure id="atendimentonline">
					<img src="<?php echo base_url('assets'); ?>/img/ico_contato.png">
						<span class="texto_online">Atendimento online</span>
						<br/>
			            <span>
			            	<a class="texto_online_hover" href="#" target="_blank" title="Atendimento Online">clique aqui</a>
			            </span>
			   </figure>
		                                     
	    </form> -->
	
	</section>
	
</section>