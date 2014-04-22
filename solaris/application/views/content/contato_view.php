<section id="contato">
	<aside>
		<h2>Contato</h2>
		<p class="tt_pequeno">ligue: (15) 3268.7618, (15) 99732.2730, (15) 99775.4313 <br/> ou se preferir preencha o formulário abaixo:</p>
		<article>
			<form id="formSolaris" method="post" action="<?php echo base_url('contato');?>">
				<div class="form_topo">
					<label for="nome">Nome:</label>
					<br /> 
					<input class="statusNome" type="text" name="nome" id="nome" value="" />					
					<br /> 
					<label for="estado_civil" class="EstadoCivil">Estado Civil:</label>
					<select id="estado_civil" name="estado_civil">
						<option value="">Selecione</option>
						<option value="Solteiro(a)">Solteiro (a)</option>
						<option value="Casado(a)">Casado(a)</option>
						<option value="Divorciado(a)">Divorciado (a)</option>
						<option value="Viúvo(a)">Viúvo (a)</option>
					</select> <br />
				</div>

				<div class="form_topo">
					<label for="email">E-mail:</label>
					<br /> 
					<input class="statusEmail" type="text" name="email" id="email" />					
					<br /> 
					<label for="idade">Idade:</label>
					<br /> 
					<input class="statusIdade" type="text" name="idade" id="idade" /> <br />
				</div>

				<div class="form_topo">
					<label for="tel">Telefone:</label>
					<br /> 
					<input class="statusTelefone" type="text" name="tel" id="tel" />
					<br /> 
					<label for="son">Filhos:</label>
					<br /> 
					<input class="statusFilhos" type="text" name="son" id="son" /> <br />
				</div>

				<div class="form_meio" style="margin-top:0px">
					<label for="opcao1">
						Você conhece o <strong>solaris - residencial e resort?</strong>
						<span class="form_meio_erro">*Este campo é obrigatório.</span>
					</label>
					<br /> 
					<input id="opcao1" class="opcao11" style="margin-left: -2px" type="radio" name="opcao1" value="Sim" /> Sim 
					<input type="radio" class="opcao12" name="opcao1" value="Nao" /> Não 
					<br />
				</div>

				<div class="form_meio">
					<label style="margin-left: -4px">Como ficou sabendo sobre o empreendimento?</label> 
					<br /> 
					<span style="margin-left: -25px" class="box_checkbox"> 
						<input type="checkbox" name="opcao2[]" value="tv"> TV 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Estandarte"> Estandarte 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Bandeiras"> Bandeiras 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Placas"> Placas 
					</span> 
					
					<span class="box_checkbox"> 
						<input type="checkbox" name="opcao2[]" value="Jornal"> Jornal 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Cavalete"> Cavalete 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Folheto"> Folheto 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Indicação"> Indicação
					</span> 
					
					<span class="box_checkbox"> 
						<input type="checkbox" name="opcao2[]" value="Revista"> Revista 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="HomemSeta"> Homem Seta 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Internet"> Internet 
						<br /> 
						<input type="checkbox" name="opcao2[]" value="Corretor"> Corretor
					</span>
				</div>

				<div class="form_fim">
					<label for="mensagem" class="mensagem">Mensagem: 
						<span class="form_meio_erro">*Este campo é obrigatório.</span> 
					</label>
					<br />
					<textarea id="mensagem" name="mensagem" class="statusMensagem"></textarea>
					<br class="clear" />
					<button type="submit" class="enviar" name="enviar" value="1" title="Enviar" id="save">Enviar mensagem</button>
				</div>
			</form>
		</article>
	</aside>
</section>
