<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- complementos -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>

	<!--SCRIPT PROPIOS-->
	<script>		
	    $(document).ready(
	    	function() { 
	    		//INICIALIZAR NICESCROLL
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999" , cursorborder:"0px" , cursorborderradius:"0px" , cursorcolor:"#90A4AE", background:"#CFD8DC", autohidemode:false});

	    		//ACTIANDO RESPONSIVE SLIDER
	    		$(".rslides").responsiveSlides();

				//ICONO MOBILE
				$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
					$(this).toggleClass('open');
				});

			    //MENU MOBILE
			    $("#nav-icon3").click(function(){
					$("#menu").fadeToggle('medium')
				})

				//MOSTRAR GOOGLE MAPS
			    $("#btn-mapa").click(function(){
					$("#googlemaps").fadeToggle('medium')
				})

				//MOSTRAR CONTACTO
			    $("#toggleContact").click(function(){
					$("#form-contacto").fadeToggle('medium')
				})

				//DETALLES DEL PLAN PARA MOBILE
			    $(".btn-text").click(function(){
					$(this).parent().prev().css("height", "auto");
				})

				//GALERIA CUERPO
				$('.slider1').bxSlider({
				    slideWidth: 200,
				    minSlides: 2,
				    maxSlides: 3,
				    slideMargin: 10
				});

				//ir arriba
				$('.ir-arriba').click(function(){
					$('body, html').animate({
						scrollTop: '0px'
					}, 300);
				});

				$(window).scroll(function(){
					if( $(this).scrollTop() > 0 ){
						$('.ir-arriba').slideDown(300);
					} else {
						$('.ir-arriba').slideUp(300);
					}
				});


				//ANIMACION ENTRE ANCLAS
		    	$(function(){
					$('a[href*=#]').click(function() {
					 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
					     && location.hostname == this.hostname) {

					         var $target = $(this.hash);

					         $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

					         if ($target.length) {

					             var targetOffset = $target.offset().top;

					             $('html,body').animate({scrollTop: targetOffset}, 1000);

					             return false;

					        }
					   }
					});
				})



	    	}
	    );
	</script>