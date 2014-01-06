<script type="text/javascript">
	$(document).ready(function(){
		$('.transparency').fadeOut('fast');


		var cont = 0;
		var define = setInterval(function(){
			if(cont >= 10)
			{
				$(".popup_mob").slideUp();	
				clearInterval(define);									
			}
			else
			{
				$(".popup_mob").slideDown();												
				cont++;							
				return false;							
			}
		}, 2000);
					
		$(".closed").on("click",function(){
			$(".popup_mob").slideUp();
			clearInterval(define);
			return false;
		});
		
		
	});
</script>