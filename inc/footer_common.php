<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- complementos -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>

	<!--EFECTO SCROLL-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smoove/0.2.8/jquery.smoove.min.js"></script>
	<script type="text/javascript" src="js/jquery.smoove.js"></script>
	<script type="text/javascript" src="js/jquery-loader.js"></script>

	<!--THUMBNAIL-->
    <script src="js/jquery.swipebox.js"></script>

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

				//BOTON SOBRE NOSOTROS
			    $(".btn-text").click(function(){
					$(this).parent().prev().css("height", "auto");
				})

				//GALERIA CUERPO
				$('.slider1').bxSlider({
				    slideWidth: 320,
				    minSlides: 2,
				    maxSlides: 3,
				    slideMargin: 10,

				    prevSelector: '#slider-prev',
				    prevText: "<img id='theImg' src='img/left.png'/>",

				    nextSelector: '#slider-next',
				    nextText: "<img id='theImg' src='img/right.png'/>"
				});

				//GALERIA COMENTARIOS
				$('.slider2').bxSlider({
					slideWidth: 360,			    
				    minSlides: 2,
				    maxSlides: 2,				    
  					slideMargin: 10,

				    prevSelector: '#slider-prev2',
				    prevText: "<img id='theImg' src='img/left.png'/>",

				    nextSelector: '#slider-next2',
				    nextText: "<img id='theImg' src='img/right.png'/>"
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

				//ANIMACION SCROLL
			    $(".b-container-title, .textOurs, .galery, .b-container-news, .b-container-textContact").smoove({
			    	offset:'9%'
			    });

			    //THUMBNAIL
			    $( '.swipebox' ).swipebox();
			    $( '.swipebox2' ).swipebox();



	    	}
	    );
	</script>