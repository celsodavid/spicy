<section class="conteudo">
	<header class="topo">

		<h2>Imagine um local onde todos são felizes.</h2>

		<figure>
			<img src="<?php echo base_url('assets'); ?>/img/lupa.png">
			<figcaption>
				<a class="openPopUp" href="#popup" title="Clique aqui para visualizar a planta da área de lazer.">
					<span>clique aqui</span>
				</a> 
				para visualizar a 
				<br /> 
				planta da área de lazer.
			</figcaption>
		</figure>

		<section id="popup">

				<div class="popup_estrura">

					<div class="close_popup">
						<a class="closePopUp" href="#popup">
						    <img src="<?php echo base_url('assets'); ?>/img/fechar_contato.png" alt="Fechar">
						</a>
					</div>
				  <img src="<?php echo base_url('assets'); ?>/img/popup_lazer.jpg" title="#" alt="#">
				</div>	
								
		</section>


	</header>

	<section id="lazer">

		<aside>
			<p>Aproveite o sol. Curta sua piscina. Sinta o bem-estar.</p>
			<br /> 
			<span>Piscina adulto e infantil com deck molhado e solarium. Quando o calor estiver forte, desça e aproveite.
			</span>
		</aside>

		<figure class="foto_destaque">
			<img src="<?php echo base_url('assets'); ?>/img/<?php echo $src;?>.jpg">
		</figure>

		<div id="box_carregando">
			<figure>
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/359.gif">
			</figure>
		</div>	
		
	</section>

	<section class="fotos_lazer">
		<figure class="imagens_lazer">
			<a id="active" title="Piscina" href="<?php echo base_url('lazer/perspectiva-ilustrada-da-piscina');?>" data-src="perspectiva-ilustrada-da-piscina" data-index="image1" rel="image1" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/piscina.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/piscina_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/piscina.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/piscina_hover.jpg">
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-do-fitness');?>" title="Fitness"  data-src="perspectiva-ilustrada-do-fitness" data-index="image2" rel="image2" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/fitness.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/fitness_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/fitness.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/fitness_hover.jpg"> 
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/pesrpectiva-do-salao-de-jogos');?>" title="Salão de Jogos" data-src="pesrpectiva-do-salao-de-jogos" data-index="image3" rel="image3" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/salaojogos_hover.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/salaojogos.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/salaojogos_hover.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/salaojogos.jpg">
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-da-brinquedoteca');?>" title="Brinquedoteca" data-src="perspectiva-ilustrada-da-brinquedoteca" data-index="image4" rel="image4" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/brinquedoteca_hover.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/brinquedoteca.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/brinquedoteca_hover.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/brinquedoteca.jpg">
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/pesrpectiva-do-playground');?>" title="Playground" data-src="pesrpectiva-do-playground" data-index="image5" rel="image5" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/play_hover.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/play.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/play_hover.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/play.jpg"> 
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-do-Agility-Dog');?>" title="Agility Dog" data-src="perspectiva-ilustrada-do-Agility-Dog" data-index="image6" rel="image6" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/agilitydog.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/agilitydog_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/agilitydog.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/agilitydog_hover.jpg"> 
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-do-salao-de-festas');?>" title="São de Festas" data-src="perspectiva-ilustrada-do-salao-de-festas" data-index="image7" rel="image7" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/salao_festa.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/salao_festa_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/salao_festa.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/salao_festa_hover.jpg"> 
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-da-churrasqueira');?>" title="Churrasqueira" data-src="perspectiva-ilustrada-da-churrasqueira" data-index="image8" rel="image8" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/churrasqueira.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/churrasqueira_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/churrasqueira.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/churrasqueira_hover.jpg"> 
			</a>
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-da-praça-de-convivência');?>" title="Praça de convivência" data-src="perspectiva-ilustrada-da-praça-de-convivência" data-index="image9" rel="image9" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/praca.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/praca_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/praca.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/praca_hover.jpg">
			</a>
		</figure>
		<figure class="imagens_lazer">
			<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/fitness2.jpg" title="Seja Happy" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/fitness2_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/fitness2.jpg'">
			<img class="outImg" src="<?php echo base_url('assets'); ?>/img/fitness2_hover.jpg" title="Seja Happy">
		</figure>
		<figure class="imagens_lazer">
			<a href="<?php echo base_url('lazer/perspectiva-ilustrada-do-bicicletario');?>" title="Bicicletário" data-src="perspectiva-ilustrada-do-bicicletario" data-index="image10" rel="image10" dir="300">
				<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/bicicletario.jpg" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/bicicletario_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/bicicletario.jpg'">
				<img class="outImg" src="<?php echo base_url('assets'); ?>/img/bicicletario_hover.jpg">
			</a>
		</figure>
		<figure class="imagens_lazer">
			<img class="activeImg" src="<?php echo base_url('assets'); ?>/img/game.jpg" title="Seja Happy" onmouseover="this.src='<?php echo base_url('assets'); ?>/img/game_hover.jpg'" onmouseout="this.src='<?php echo base_url('assets'); ?>/img/game.jpg'">
			<img class="outImg" src="<?php echo base_url('assets'); ?>/img/game_hover.jpg" title="Seja Happy">
		</figure>

		<figure class="imagens_lazer">
			<img src="<?php echo base_url('assets'); ?>/img/wallpaper_lazer01.jpg">
		</figure>
		<figure class="imagens_lazer">
			<img src="<?php echo base_url('assets'); ?>/img/wallpaper_lazer02.jpg">
		</figure>
		<figure class="imagens_lazer">
			<img src="<?php echo base_url('assets'); ?>/img/wallpaper_lazer03.jpg">
		</figure>
	</section>

</section>