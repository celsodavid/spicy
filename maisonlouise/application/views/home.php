<?php echo doctype('html5'); ?>
<html lang="pt-br">

	<head>
		<title><?php echo $titulo;?></title>
		<meta charset="utf-8">
		<?php
		$meta = array (
			array ('name' => 'robots', 'content' => 'index,follow'),
			array ('name' => 'description', 'content' => $descricao),
			array ('name' => 'keywords', 'content' => $keys),
			array ('name' => 'revisit-after', 'content' => '1 days')
		);
		echo meta ( $meta );
		echo link_tag ('assets/img/favicon.ico', 'shortcut icon', 'image/ico');
		echo link_tag ('assets/css/style.css');
		echo link_tag ('assets/css/jquery.scrollTop.css');
		echo "<!--[if IE]>", script_tag('assets/js/html5.js'), "<![endif] -->";
		echo script_tag('assets/js/jquery-1.10.1.js');
		echo script_tag('assets/js/jquery.maskedinput.js');
		echo script_tag('assets/js/jquery.scrollTop.js');
		echo script_tag('assets/js/site.js');
		?>
	</head>
	
	<body>
		<div id="geral">
		                <div id="box_conteudo">
							<div id="conteudo_menu">
								<div id="menu">
							      <nav>
									<ul class="menu_zabo">
										<li class="home"><a href="#home" class="setLocator" rel="0">Home</a></li>
										<li class="localizacao"><a href="#localizacao" class="setLocator" rel="780">Localização</a></li>

										<li class="projeto"><a href="#projeto" class="setLocator" rel="1597">Projeto</a></li>

										<li class="lazer"><a href="#lazer" class="setLocator" rel="2499">Lazer</a></li>

										<li class="seuapartamento"><a href="#apartamento" class="setLocator" rel="3375">Seu Apartamento</a></li>

										<li class="implantacao"><a href="#implantacao" class="setLocator" rel="4150">Implantação</a></li>

										<li class="contato"><a href="#contato" class="setLocator" rel="5020">Contato</a></li>

										<li class="zabo"><a href="#zabo" class="setLocator" rel="5688">Conheça a Zabo</a></li>

									</ul>
							       </nav>
								</div>		
							</div>
						</div>

			<div id="conteudo">
	
				<!--CONTEUDO HOME-->
				<div id="home">
					<div id="conteudo_header">
						<div id="logo_maison">
							<img class="logo" src="<?php echo base_url('assets'); ?>/img/logo_maison.png">
							<h1>MAISON LUISE</h1>
							<h2 class="titulo_home">A ESSÊNCIA DOS JARDINS</h2>
						</div>
					</div>

					<div id="conteudo_home_esquerdo">

						<img class="sss" src="<?php echo base_url('assets'); ?>/img/mulher.png">

					</div>
	
					<div id="conteudo_home_meio">
						<p class="txt_flor">Um bairro que tem em si todas as virtudes que uma<br/> grande metrópole possui. Sem dúvida, o mais nobre e<br/>  completo da cidade.
E que recebe um empreendimento<br/>  de apurado bom gosto. 
Maison Louise, um alto padrão<br/>  que apenas a Zabo poderia oferecer.</p>

						<img class="aaa" src="<?php echo base_url('assets'); ?>/img/home_flor.png">


					</div>

					<div id="conteudo_home_direito">

						<img class="ddd" src="<?php echo base_url('assets'); ?>/img/joia.png">


					</div>

			</div>
                    <div id="legen">
						<p class="txt">Imagens ilustrativas</p>
					</div>

				<!--FIM DO CONTEUDO HOME-->
	
				<!--CONTEUDO LOCALIZAÇÃO-->
				<div id="localizacao">
	
					<div id="conteudo_localizacao">
						<h3 class="titulo_localizacao">Jardins Síntese de luxo e estilo.</h3>
						<img class="locali" src="<?php echo base_url('assets'); ?>/img/localizacao.png">
						<p class="legendas">Imagens ilustrativas</p>
						<div id="txt_locali">
							<p class="texto_localizacao">A beleza da região, as ruas arborizadas e a localização privilegiada são características que fazem dos Jardins o símbolo maior de luxo da cidade de São Paulo. Um polo de sofisticação e glamour, com restaurantes premiados e os endereços mais disputados e desejados. Isso sem falar nas lojas mais requintadas do país, na Oscar Freire.</p>
							<br /> 
							<img src="<?php echo base_url('assets'); ?>/img/linha_localizacao.png">
							<h3 class="endereco">rua josé maria lisboa, 154 - jardins</h3>
							<p class="loca_localizacao">Clique no ícone abaixo para visualizar<br/> como chegar no local<br/><br/>
                             <a href="https://maps.google.com.br/maps?q=Rua+Jose+Maria+Lisboa,+154+%E2%80%93+Jd.+Paulista&hl=pt-BR&ie=UTF8&sll=-22.909556,-47.085738&sspn=0.008331,0.013937&hnear=R.+Jos%C3%A9+Maria+Lisboa,+154+-+Jardim+Paulista,+S%C3%A3o+Paulo,+01423-000&t=m&z=17" target="_blank"><img class="img_loca_localizacao" src="<?php echo base_url('assets'); ?>/img/localizacao_footer.png" title="Clique no ícone para visualizar" alt="Clique no ícone abaixo para visualizar"></a></p>
						</div>
					</div>
					
				</div>
				<!--FIM DO CONTEUDO LOCALIZAÇÃO-->
	
				<!--CONTEUDO PROJETO-->
				<div id="projeto">
					<div id="conteudo_projeto">
						<div id="box_projeto">
							<h4 class="titulo_projeto">Lobby com pé direito duplo para você chegar e sair de casa em grande estilo.</h4>
	
							<a href="#popup_projeto" class="abrirPopUp"><img src="<?php echo base_url('assets'); ?>/img/faxada_lobby.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar"></a>
							<br />
							<p class="leg_projeto"><img src="<?php echo base_url('assets'); ?>/img/mini_lupa_preto.png"> Imagens ilustrativas</p>
	
							<img class="detalhe_logo" src="<?php echo base_url('assets'); ?>/img/detalhe_logo.png">
	
							 <p>O belíssimo projeto tem a assinatura do<br/> 
                                                 escritório de itamar Berezin,um dos maiores <br/>
                                                 e mais conceituados arquitetos do país.</p>
	
							<p class="projetoarquitetonico">Projeto arquitetônico:</p>
							<br /> 
							<img src="<?php echo base_url('assets'); ?>/img/itamarberezin.png" title="Itamar Berezin" alt="Itamar Berezin">
	
						</div>
	
						<div id="faxada_projeto">
							<img src="<?php echo base_url('assets'); ?>/img/faxada.png">
						</div>
	
					</div>
	
					<div id="rodape_projeto"></div>


					<!--CONTEUDO POPUP PROJETO-->
					<div id="popup_projeto">

						<div id="conteudo_popup_projeto">

								<div id="close">
									<a href="#popup_projeto" class="closePopUp">
										<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
									</a>
								</div>

								<img src="<?php echo base_url('assets'); ?>/img/poups/poup_lobby.png" title="Perpectiva artística do lobby" alt="Perpectiva artística do lobby">

						</div>	
								
					</div>
					<!--FIM DO CONTEUDO POPUP PROJETO-->



				</div>
				<!--FIM DO CONTEUDO PROJETO-->

				<!--CONTEUDO LAZER-->
				<div id="lazer">

					        <div id="conteudo_lazer">
								<h3 class="titulo_lazer">Curtir a vida é o mais nobre dos momentos.</h3>
								<img src="<?php echo base_url('assets'); ?>/img/modelo.png"> 
								<img class="linha_logo" src="<?php echo base_url('assets'); ?>/img/linha_localizacao.png">
								<h3 class="titulo_lazer2">Conviva com o requinte também das áreas de lazer.</h3>
			
						         <div id="perspectiva">
	
									<a href="#popup_perspectiva_piscina" class="abrirPopUp">
										<img class="perspectiva_lazer" src="<?php echo base_url('assets'); ?>/img/perspectiva_piscina.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
									</a>

									<a href="#popup_perspectiva_jardim" class="abrirPopUp">
										<img class="perspectiva_lazer" src="<?php echo base_url('assets'); ?>/img/perspectiva_jardim.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
									</a> 

									<a href="#popup_perspectiva_salaodefestas" class="abrirPopUp">
										<img class="perspectiva_lazer" src="<?php echo base_url('assets'); ?>/img/perspectiva_salaodefestas.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
									</a> 

									<a href="#popup_perspectiva_fitness" class="abrirPopUp">
										<img class="perspectiva_lazer" src="<?php echo base_url('assets'); ?>/img/perspectiva_fitness.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
									</a>

						         </div>

									<p class="txt_lazer">
										<img class="lupa" src="<?php echo base_url('assets'); ?>/img/lupa.png">Clique nas imagens para ampliar
									</p>

				            </div>
	
					<!--CONTEUDO POPUP LAZER-->

						<!-- POPUP PISCINA-->
					<div id="popup_perspectiva_piscina">
						<div id="conteudo_perspectiva_piscina">

							<div id="close">
								<a href="#popup_perspectiva_piscina" class="closePopUp">
									<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
								</a>
							</div>

								<img src="<?php echo base_url('assets'); ?>/img/poups/poup_piscina.png" title="Perpectiva artística da piscina" alt="Perpectiva artística da piscina">

						</div>
					</div>
							<!--FIM POPUP PISCINA-->

							<!--POPUP FITNESS-->
					<div id="popup_perspectiva_fitness">
						<div id="conteudo_perspectiva_fitness">

							<div id="close">
								<a href="#popup_perspectiva_fitness" class="closePopUp">
									<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
								</a>
							</div>

							<img src="<?php echo base_url('assets'); ?>/img/poups/poup_fitness.png" title="Perpectiva artística do fitness" alt="Perpectiva artística do fitness">

						</div>
					</div>
							<!--FIM POPUP FITNESS-->

							<!--POPUP JARDIM-->
					<div id="popup_perspectiva_jardim">
						<div id="conteudo_perspectiva_jardim">

							<div id="close">
								<a href="#popup_perspectiva_jardim" class="closePopUp">
									<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
								</a>
							</div>

							<img src="<?php echo base_url('assets'); ?>/img/poups/poup_jardim.png" title="Perpectiva artística do jardim" alt="Perpectiva artística do jardim">

						</div>
					</div>
							<!--FIM POPUP JARDIM-->

							<!--POPUP SAlÃO DE FESTAS-->
					<div id="popup_perspectiva_salaodefestas">
						<div id="conteudo_perspectiva_salaodefestas">

							<div id="close">
								<a href="#popup_perspectiva_salaodefestas" class="closePopUp">
									<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
								</a>
							</div>

							<img src="<?php echo base_url('assets'); ?>/img/poups/poup_salaodefestas.png" title="Perpectiva artística do salão de festas" alt="Perpectiva artística do salão de festas">

						</div>
					</div>
							<!--FIM POPUP SAlÃO DE FESTAS-->
								
								
				<!--FIM DO CONTEUDO POPUP LAZER-->

				</div>
				<!--FIM DO CONTEUDO LAZER-->
	
	
				<!--CONTEUDO SEU APARTAMENTO-->
				<div id="apartamento">
	
					<div id="conteudo_apartamento">
						<img class="logo_apartamento" src="<?php echo base_url('assets'); ?>/img/logo_apartamento.png">
						<h3 class="titulo_apartamento">Luxo. Espaço. Conforto. Privacidade. Nada menos do que você merece.</h3>
						<!--<img class="familia_apartamento" src="<?php echo base_url('assets'); ?>/img/familia_apartamento.png">

						<a href="#apartamento_itens" class="abrirVejaMais">

							<span id="seta_apartamento" title="Clique aqui e veja mais" alt="Clique aqui e veja mais">
							</span>
						</a>-->

					</div>
	
				</div>
	
				<div id="apartamento_itens">
	
					<div id="seu_apartamento">
						<!--<h3 style="margin-bottom: 40px" class="titulo_apartamento">Receba com conforto e elegância em qualquer ocasião</h3>-->
	
						<div id="col_ap_esquerdo">

							<a href="#popup_perspectiva_living" class="abrirPopUp">
								<img src="<?php echo base_url('assets'); ?>/img/perspectiva_living.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
							</a>

							<h5 class="sub_h5">Um amplo terraço para você dividir excelentes momentos com sua família</h5>

							<a href="#popup_perspectiva_terraco" class="abrirPopUp">
							<img src="<?php echo base_url('assets'); ?>/img/perspectiva_terraco.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
							</a>

						</div>
	
						<div id="col_ap_direito">

							<p class="txt_ap">
								<img class="lupa_ap" src="<?php echo base_url('assets'); ?>/img/lupa_preto.png">Clique nas imagens para ampliar
							</p>

							<a href="#popup_perspectiva_planta_tipo" class="abrirPopUp">
							<img src="<?php echo base_url('assets'); ?>/img/planta_ap.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
						    </a>

							<img class="logo_ap" src="<?php echo base_url('assets'); ?>/img/logo_ap.png">

							<h3 class="txt_h3_ap">
								215m² Privativos<br /> 4 dormitórios (2 suítes)<br /> 3 Vagas<br /> 1 Por Andar
							</h3>

						</div>	
					</div>


								<!-- POPUP LIVING-->
								<div id="popup_perspectiva_living">
									<div id="conteudo_perspectiva_living">

										<div id="close">
											<a href="#popup_perspectiva_living" class="closePopUp">
												<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
											</a>
										</div>

											<img src="<?php echo base_url('assets'); ?>/img/poups/poup_living.png" title="Perpectiva artística do living" alt="Perpectiva artística do living">

									</div>
								</div>
										<!--FIM POPUP LIVING-->

										<!-- POPUP TERRAÇO-->
								<div id="popup_perspectiva_terraco">
									<div id="conteudo_perspectiva_terraco">

										<div id="close">
											<a href="#popup_perspectiva_terraco" class="closePopUp">
												<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
											</a>
										</div>

											<img src="<?php echo base_url('assets'); ?>/img/poups/poup_terraco.png" title="Perpectiva artística do terraço" alt="Perpectiva artística do terraço">

									</div>
								</div>
										<!--FIM POPUP TERRAÇO-->

										<!-- POPUP PLANTA TIPO-->
								<div id="popup_perspectiva_planta_tipo">
									<div id="conteudo_perspectiva_planta_tipo">

										<div id="close">
											<a href="#popup_perspectiva_planta_tipo" class="closePopUp">
												<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
											</a>
										</div>

											<img src="<?php echo base_url('assets'); ?>/img/poups/poup_planta_tipo.png" title="Perpectiva artística da planta tipo" alt="Perpectiva artística da planta tipo">

									</div>
								</div>
										<!--FIM POPUP PLANTA TIPO-->
	

				</div>
				<!--FIM DO CONTEUDO SEU APARTAMENTO-->
	
	
				<!--CONTEUDO IMPLANTAÇÃO-->
				<div id="implantacao">
	
					<div id="conteudo_implantacao">
						<h3 class="titulo_implantacao">O espaço que você deseja com o bom gosto que você exige.</h3>

						<a href="#popup_perspectiva_implantacao" class="abrirPopUp">
						   <img src="<?php echo base_url('assets'); ?>/img/planta_implantacao.png" title="Clique na imagem para ampliar" alt="Clique na imagem para ampliar">
					    </a>

						<p class="txt_implantacao">
							<img class="lupa_ap" src="<?php echo base_url('assets'); ?>/img/lupa.png">Clique na imagem para ampliar
						</p>
						<p class="txt_itens_implantacao">
							1 - Piscina coberta | 2 - Fitness | 3 - Salão de festas | 4 - Apoio festas<br /> 5 - Jardim com área de descanso | 6 - Recreação infantil | 7 - Hall Social e de serviço
						</p>
						<p class="projetopaisagistico">Projeto paisagístico:</p>
						<br /> 
						<img src="<?php echo base_url('assets'); ?>/img/beneditoabbud.png" title="Benedito Abbud" alt="Benedito Abbud">
					</div>

					<!-- POPUP IMPLANTAÇÃO-->
								<div id="popup_perspectiva_implantacao">
									<div id="conteudo_perspectiva_implantacao">

										<div id="close">
											<a href="#popup_perspectiva_implantacao" class="closePopUp">
												<img src="<?php echo base_url('assets'); ?>/img/close.png" alt="Fechar" />
											</a>
										</div>

											<img src="<?php echo base_url('assets'); ?>/img/poups/poup_planta.png" title="Perpectiva artística da planta tipo" alt="Perpectiva artística da planta tipo">

									</div>
								</div>
										<!--FIM POPUP IMPLANTAÇÃO-->
	
				</div>
				<!--FIM DO CONTEUDO IMPLANTAÇÃO-->
	
	
				<!--CONTEUDO CONTATO-->
				<div id="contato">
					<div id="conteudo_contato">
					
						<?php if($this->session->flashdata('email_enviado')): ?>
						<div class="mensagemEmail">
							<p class="<?php echo $this->session->flashdata('class_mail');?>">
								<?php echo $this->session->flashdata('email_enviado');?>
							</p>
							<span class="x">
								<img src="<?php echo base_url('assets'); ?>/img/ico_x.png" alt="Fechar" title="Fechar"/>
							</span>
						</div>
						<?php endif; ?>
						
						<h3 class="titulo_contato">PARA MAIS INFORMAÇÕES PREENCHA O FORMULÁRIO QUE ENTRAREMOS EM CONTATO:</h3>
	
						<!--FORMULARIO-->
						<div id="form">
							<form id="form_contato" method="post" action="<?php echo base_url('contato/email'); ?>">
								<input type="text" class="statusNome" name="nome" placeholder="Nome" /> 
								<br class="clear" /> 
								
								<input type="email" class="statusEmail" name="email" placeholder="E-mail" /> 
								<br class="clear" /> 
								
								<input type="tel" class="statusTelefone" name="phone" placeholder="Telefone" /> 
								<br class="clear" />
								
								<textarea name="mensagem" id="mensagem" class="statusMensagem" placeholder="Mensagem"></textarea>
								<br class="clear" />
	
								<button id="btnEnviar" type="submit" class="enviar" title="Enviar">ENVIAR</button>
							</form>
						</div>
						<!--FIM DO FORMULARIO-->
	
					</div>
				</div>
				<!--FIM DO CONTEUDO CONTATO-->
	
	
				
                                    <!--CONTEUDO ZABO--> 

                                  <div id="zabo">

                                      <div id="conteudo_zabo">
                                          <img class="logo_zabo" src="<?php echo base_url('assets'); ?>/img/logo_zabo.png" title="Zabo Engenharia" alt="Zabo Engenharia">
                                          <h3 class="titulo_zabo">Conheça alguns empreendimentos diferenciados da Zabo.</h3>

                                      <div id="slider">
                                            <a href=""><span id="seta_esquerda"></span></a>
                                            <a href=""><span id="seta_direita"></span></a>

                                            <nav id="empreendimentos">
                                
                                              <ul class="ul_zabo" style="left:-877px;">

                                                <li class="li_zabo">
                                                   <img class="esquerda" src="<?php echo base_url('assets'); ?>/img/stephanie.png" title="Maison Stephanie" alt="Maison Stephanie">

                                                   <a href="http://www.zabo.com.br/portfolio/detalhe/maison-josephine" target="_blank">
                                                   	<img src="<?php echo base_url('assets'); ?>/img/josephine.png" title="Maison Josephine" alt="Maison Josephine">
                                                   </a>

                                                   <img class="direita" src="<?php echo base_url('assets'); ?>/img/daniele.png" title="Maison Daniele" alt="Maison Daniele">

                                                </li>

                                                <li class="li_zabo">

                                                   <a href="http://www.zabo.com.br/portfolio/detalhe/maison-sophie" target="_blank">
                                                   	<img class="esquerda" src="<?php echo base_url('assets'); ?>/img/sophie.png" title="Maison Sophie" alt="Maison Sophie">
                                                   </a>

                                                   <a href="http://www.zabo.com.br/portfolio/detalhe/ed-maison-jolie" target="_blank">
                                                   	<img src="<?php echo base_url('assets'); ?>/img/jolie.png" title="Maison Jolie" alt="Maison Jolie">
                                                   </a>

                                                   <a href="http://www.zabo.com.br/portfolio/detalhe/maison-catherine" target="_blank">
                                                   	<img class="direita" src="<?php echo base_url('assets'); ?>/img/catherine.png" title="Maison Catherine" alt="Maison Catherine">
                                                   </a>

                                                </li>
												
												
												
                                              </ul>  
                                                
                                            </nav>  
                                              
                                            
                                            
                                        </div>



                                    </div>
										
								                  </div>

                                       
                                  <!--FIM DO CONTEUDO ZABO-->
	
				<!--CONTEUDO FOOTER-->
				<div id="footer">
				  <div id="conteudo_footer">
					<ul class="conteudo_footer">
						<li id="info">Informações: (11) 3816.7614</li>
						<li id="solai">
							<p class="txt_solai">
								Vendas:</p>
								<a href="http://www.solai.com.br/" target="_blank">
									<img class="solai" src="<?php echo base_url('assets'); ?>/img/logo_solai.png" title="Solai Consultoria Imobilíaria" alt="Solai Consultoria Imobilíaria">
								</a>
							</p>
						</li>
						<li id="reali">
							<p class="txt_reali">Realização:</p>
								<a href="http://www.zabo.com.br/" target="_blank">
									<img class="reali" src="<?php echo base_url('assets'); ?>/img/logo_footer.png" title="Zabo Engenharia" alt="Zabo Engenharia">
								</a>
						</li>
						<li id="loca">
						  <p class="txt_loca">Localização:</p>
							<a href="https://maps.google.com.br/maps?q=Rua+Jose+Maria+Lisboa,+154+%E2%80%93+Jd.+Paulista&hl=pt-BR&ie=UTF8&sll=-22.909556,-47.085738&sspn=0.008331,0.013937&hnear=R.+Jos%C3%A9+Maria+Lisboa,+154+-+Jardim+Paulista,+S%C3%A3o+Paulo,+01423-000&t=m&z=17" target="_blank">
								<img class="loca"src="<?php echo base_url('assets'); ?>/img/localizacao_footer.png" title="Clique no ícone para visualizar" alt="Clique no ícone abaixo para visualizar">
							</a>
						</li>
						<li id="spicy">
							<a href="http://www.spicyweb.com.br/" target="_blank"><img class="spicy" src="<?php echo base_url('assets'); ?>/img/spicy.png" title="Spicy Web" alt="Spicy Web"></a>
						</li>
					</ul>
				  </div>
			    </div>
				<!--FIM DO CONTEUDO FOOTER-->
	
			</div>
		</div>
		
		
		
		<a href='#' id='toTop'><img src="<?php echo base_url('assets');?>/img/icon-to-top.png" title="Voltar ao Topo" alt="Voltar ao Topo"/></a>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-9169569-2', 'maisonlouise.com.br');
		  ga('send', 'pageview');
		
		</script>
	
	</body>

</html>