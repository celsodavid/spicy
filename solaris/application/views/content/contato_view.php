<section id="contato">

	<aside>
		<h2>Contato</h2>
		<p class="tt_pequeno">ligue: 0800.770.7044, (11) 3066.1000, ou se preferir preencha o formulário abaixo:</p>

		<article>

		 <form method="post" action="<?php echo base_url('contato');?>">

		 			<div class="form_topo">		
				    	<label for="nome">Nome:</label><br />
	                    <!-- <input class="statusNome" type="text" name="nome" id="nome" /> -->
	                    <input class="statusErro" type="text" name="nome" id="nome" value="*Este campo é obrigatório." disabled="disabled"/>
	                    <br />

	                    <label for="nome" class="EstadoCivil">Estado Civil:</label>
	                    <select>
	                    	<option value="">Selecione</option>
							<option value="Solteiro(a)">Solteiro (a)</option>
							<option value="Casado(a)">Casado(a)</option>
							<option value="Divorciado(a)">Divorciado (a)</option>
							<option value="Viúvo(a)">Viúvo (a)</option>
	                    </select>
	                    <br />
	                </div>

	                <div class="form_topo">
	                	<label for="nome">E-mail:</label><br />
	                    	<!--<input class="statusEmail" type="text" name="nome" id="nome" />-->
		                    <!--<nput class="statusErro" type="text" name="nome" id="nome" value="Email invalido" disabled/>-->
		                    <input class="statusValido" type="text" name="nome" id="nome" value="celso@teste.com.br" disabled="disabled"/>
	                    <br />

	                	<label for="nome">Idade:</label><br />
	                    <input class="statusIdade" type="text" name="nome" id="nome"/> 
	                    <br />
	                </div> 

	                <div class="form_topo">

	                	<label for="nome">Telefone:</label><br />
	                    <!--<input class="statusTelefone" type="text" name="nome" id="nome" />-->
	                    <input class="statusErro" type="text" name="nome" id="nome" value="*Este campo é obrigatório." disabled="disabled"/> 
	                    <br />

	                    <label for="nome">Filhos:</label><br />
	                    <input class="statusFilhos" type="text" name="nome" id="nome" /> 
	                    <br />

	                </div>

	                <div class="form_meio">
	                	<label for="nome">Você conhece o <strong>solaris - residencial e resort?</strong><span class="form_meio_erro">*Este campo é obrigatório.</span></label><br/>
                    	<input style="margin-left:-2px" type="radio" name="opcao1" value="Sim"> Sim
                        <input type="radio" name="opcao1" valeu="Nao"> Não
                        <br />
	                </div>

	                <div class="form_meio">
	                	<label style="margin-left:-4px" for="nome">Como ficou sabendo sobre o empreendimento?</label>
                        <br />

                        <span style="margin-left:-25px" class="box_checkbox">
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
	                </div> 

	                <div class="form_fim">
		                <label for="nome" class="mensagem">Mensagem: <span class="form_meio_erro">*Este campo é obrigatório.</span></label><br/>
	                    <textarea name="mensagem" class="statusMensagem"></textarea>
			            <br class="clear" />

			            <button type="submit" class="enviar" name="enviar" value="1" title="Enviar" id="save">Enviar mensagem</button>
	                </div>   
                 	
	    </form>

	    </article>

	</aside>

</section>