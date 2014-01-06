<section id="contato">
	<figure>
		<img src="<?php echo base_url('assets');?>/img/home.jpg">
	</figure>

	<article class="faixa_amarela">
		  <figure id="endereco_localizacao">
		  	  <figcaption>Alameda São Bernardo, 143 - Santa Terezinha</figcaption>
		  	    <img src="<?php echo base_url('assets');?>/img/icone_localizacao.png">
		  	  <figcaption><span><a href="" title="Clique aqui para visualizar como chegar no local">Clique aqui</a></span> para visualizar como chegar no local</figcaption>
		  </figure>
	</article>

	<aside>		
	    <h4>Preencha o formulário abaixo ou ligue para (11) 2598.3730</h4>
	    <?php echo form_open('fale-conosco'); ?>
	    	<div id="campo_1">
	    		<figure>
					<img src="<?php echo base_url('assets');?>/img/contato_info.png">
				</figure>
				<span id="esquerda_form">
					<?php 
						echo form_label('Nome:','nome'),
							 form_input(array(
								'id'=>'nome', 
								'class'=>'statusNome', 
								'name'=>'nome', 
								'value'=>set_value('nome')
							 )),
							'<br>',
							'<span class="erro_form">'.form_error('nome').'</span>';

						echo form_label('E-mail:','email'),
							 form_input(array(
								'id'=>'email',
								'class'=>'statusEmail',
								'name'=>'email',
								'value'=>set_value('email')
							 )),
							'<br>',
							'<span class="erro_form">'.form_error('email').'</span>';

						echo form_label('Telefone:','telefone'),
							 form_input(array(
								'id'=>'telefone',
								'class'=>'statusTelefone',
								'name'=>'telefone',
								'value'=>set_value('telefone')
							 )),
							'<br>',
							'<span class="erro_form">'.form_error('telefone').'</span>';
					?>
				</span>
				
				<span id="direita_form">
					<?php 
						echo form_label('Estado Civil:','civil');
						$atrr = array('Solteiro(a)'=>'Solteiro (a)', 'Casado(a)'=>'Casado (a)', 'Divorciado(a)'=>'Divorciado (a)', 'Viuvo(a)'=>'Viúvo (a)');
						$sv_val = $this->input->post('civil');
						echo form_dropdown('civil', $atrr, set_value('civil',(!empty($sv_val)) ? $sv_val : 'Solteiro(a)'), 'class="EstadoCivil"'),
							 '<br>';
						
						echo form_label('Idade:','age'),
							 form_input(array(
								'id'=>'age',
								'class'=>'statusIdade',
								'name'=>'idade',
								'value'=>set_value('idade')
							 )),
						     '<br>';

						echo form_label('Filhos:','son'),
							 form_input(array(
								'id'=>'son',
								'class'=>'statusFilhos',
								'name'=>'filhos',
								'value'=>set_value('filhos')
							 )),
							 '<br>';
					?>
				</span>
	    	</div>

	    	<div id="campo_2">
	    		<figure>
					<img src="<?php echo base_url('assets');?>/img/contato_onde.png">
				</figure>
				<?php 
					echo form_label('Você conhece a incorporadora Patriani?', 'conhece', array('class'=>'titulo_campo_2')),
						 '<br/>',
						 form_radio(array(
							'id'=>'sim',
							'name'=>'opcao1',
							'value'=>'Sim',
							'checked' => $this->input->post('opcao1') == 'Sim' ? 'checked' : ''
						 )),
						 form_label('Sim', 'sim'),
						 form_radio(array(
							 'id'=>'nao',
							 'name'=>'opcao1',
							 'value'=>'Não',
							 'checked' => $this->input->post('opcao1') == 'Não' ? 'checked' : ''
						 )),
						 form_label('Não', 'nao'),
						 '<br>',
						 '<span class="erro_form_2">'.form_error('opcao1').'</span>',
					     '<br/>';
					
					echo form_label('Como ficou sabendo sobre o empreendimento?', 'info', array('class'=>'titulo_campo_2')),
						 '<br>';
				?>
				
				<span class="box_checkbox">
					<?php 
						echo form_checkbox(array('id'=>'tv', 'name'=>'opcao2[]', 'value'=>'Tv', 'checked'=>$this->input->post('opcao2[0]') == 'Tv' ? 'checked' : '')),
						     form_label('Tv', 'tv'),
						     '<br><br>';
						
						echo form_checkbox(array('id'=>'estandarte', 'name'=>'opcao2[]', 'value'=>'Estandarte', 'checked'=>$this->input->post('opcao2[1]') == 'Estandarte' ? 'checked' : '')),
							 form_label('Estandarte', 'estandarte'),
							 '<br><br>';

						echo form_checkbox(array('id'=>'bandeiras', 'name'=>'opcao2[]', 'value'=>'Bandeiras', 'checked'=>$this->input->post('opcao2[2]') == 'Bandeiras' ? 'checked' : '')),
							 form_label('Bandeiras', 'bandeiras'),
							 '<br><br>';

						echo form_checkbox(array('id'=>'placas', 'name'=>'opcao2[]', 'value'=>'Placas', 'checked'=>$this->input->post('opcao2[3]') == 'Placas' ? 'checked' : '')),
							 form_label('Placas', 'placas'),
							 '<br><br>';
					?>
				</span>
				
				<span class="box_checkbox">
					<?php 
					echo form_checkbox(array('id'=>'jornal', 'name'=>'opcao2[]', 'value'=>'Jornal', 'checked'=>$this->input->post('opcao2[4]') == 'Jornal' ? 'checked' : '')),
						 form_label('Jornal', 'jornal'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'cavalete', 'name'=>'opcao2[]', 'value'=>'Cavalete', 'checked'=>$this->input->post('opcao2[5]') == 'Cavalete' ? 'checked' : '')),
						 form_label('Cavalete', 'cavalete'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'folheto', 'name'=>'opcao2[]', 'value'=>'Folheto', 'checked'=>$this->input->post('opcao2[6]') == 'Folheto' ? 'checked' : '')),
						 form_label('Folheto', 'folheto'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'indicacao', 'name'=>'opcao2[]', 'value'=>'Indicação', 'checked'=>$this->input->post('opcao2[7]') == 'Indicação' ? 'checked' : '')),
						 form_label('Indicação', 'indicacao'),
						 '<br><br>';
					?>
				</span>
				
				<span class="box_checkbox">
					<?php 
					echo form_checkbox(array('id'=>'revista', 'name'=>'opcao2[]', 'value'=>'Revista', 'checked'=>$this->input->post('opcao2[8]') == 'Revista' ? 'checked' : '')),
						 form_label('Revista', 'revista'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'homemSeta', 'name'=>'opcao2[]', 'value'=>'Homem Seta', 'checked'=>$this->input->post('opcao2[9]') == 'Homem Seta' ? 'checked' : '')),
						 form_label('Homem Seta', 'homemSeta'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'internet', 'name'=>'opcao2[]', 'value'=>'Internet', 'checked'=>$this->input->post('opcao2[10]') == 'Internet' ? 'checked' : '')),
						 form_label('Internet', 'internet'),
						 '<br><br>';

					echo form_checkbox(array('id'=>'corretor', 'name'=>'opcao2[]', 'value'=>'Corretor', 'checked'=>$this->input->post('opcao2[11]') == 'Corretor' ? 'checked' : '')),
						 form_label('Corretor', 'corretor'),
						 '<br><br>';
					?>
				</span>
	    	</div>
	    	
	    	<div id="campo_3">
	    		<figure>
					<img src="<?php echo base_url('assets');?>/img/contato_msg.png">
				</figure>
				<?php 
				echo form_label('Mensagem:','mensagem'),
					 form_textarea(array('id'=>'mensagem', 'name'=>'mensagem', 'value'=>set_value('mensagem'))),
					 '<br class="clear" />',
					 '<span class="erro_form_2">'.form_error('mensagem').'</span>';
				
				echo form_button(array(
					 	'id'=>'save',
						'class'=>'enviar',
						'type'=>'submit',
						'name'=>'save',
						'title'=>'Enviar Mensagem',
						'value'=>true,
						'content'=>'Enviar Mensagem'
					 ));
				?>
	    	</div>
	    <?php echo form_close(); ?>
	    
	    
    </aside>


</section>