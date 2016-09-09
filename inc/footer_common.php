<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <!-- complementos -->
	<script src="js/jquery.nicescroll.js"></script>

	<!--SCRIPT PROPIOS-->
	<script>		
	    $(document).ready(
	    	function() { 
	    		//INICIALIZAR NICESCROLL
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999" , cursorborder:"0px" , cursorborderradius:"0px" , cursorcolor:"#90A4AE", background:"#CFD8DC", autohidemode:false});

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

	    	}
	    );
	</script>