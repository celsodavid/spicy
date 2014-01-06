<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".group1").colorbox({rel:'group1'});
		$('.main').animate({
			left: '0'
		},"fast", function() {
					$('.transparency').fadeOut('fast');
					$('.box').fadeIn('slow', function() {
									mapa("Rua Marina, 1454,São Caetano", "exibe_mapa");
						  });
			  });
		$(".group1").colorbox({rel:'group1'});	  
	});	

	function inicializarMapa(div){		
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var mapOptions = {
			scrollwheel: false,
          zoom: 16,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById(div), mapOptions);		
	}
	
	function mapa(address, div) {
         
			inicializarMapa(div);
        
			geocoder.geocode({ 'address': address}, function(results, status) {
		
          if (status == google.maps.GeocoderStatus.OK) 
		  {
            
			map.setCenter(results[0].geometry.location);
			
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          }
		  else 
		  {
           $(function(){
				$("#"+div).html("<h1><center>Mapa Indisponivel no momento.</center></h1>");
				
		   })
          }
        });
    }
</script>

<div class="box">

	<div class="title center">
	
		<h2 style="width:650px;">Vivere está localizado em<br/>
são caetano, muito próximo do<Br/>
bairro campestre em santo andré</h2>
	
	</div>
	<div class="conteudo_localizacao">
		
		<div class="localizacao_ampulheta"><img src="<?=base_url()?>assets/images/ampulheta.png" />clique na imagem para ampliá-la</div>
	
		<div class="localizacao_for_spaces">
			<a href="<?=base_url()?>assets/images/fotomontagemAereaRegiao_g.jpg" class="group1" title="Fotomontagem aérea da região">
				<img src="<?=base_url()?>assets/images/mapa_menor_06.jpg" />
			</a>
		</div>
		
		<span class="localiza_titulo_rua" style="font-size:15px;margin-bottom:10px;">
		São Caetano a melhor cidade do mundo para se viver<br/>
				<span ><a href="<?=base_url()?>assets/images/texto_loc.jpg" style="font-size:18px;color: #39797f;" class="group1">clique e saiba mais</a></span><br/><br/><br/>
		Rua Marina, 1454 - São Caetano</span>
		<div id="block_layout_map">
			<div id="exibe_mapa"></div>
		</div>
		
		
	</div><!-- fecha div.conteudo_localizacao -->
