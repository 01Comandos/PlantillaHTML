<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>
	<?php include 'inc/header.php'; ?>

	<!--DETALLE DEL MEDICO-->
	<section class="filter">
		<article class="filter-container">
			<h3>Profesional Seleccionado</h3>

			<!--PERFIL-->
			<div class="filter-container-profile">
				<figure>
					<img src="img/comandos-avatar.jpg" alt="">
				</figure>
				<div class="dates">
					<h3>Comandos Underwood</h3>
					<h4>Traumatología</h4>
					<div class="dates-item">
						<p>CMP: 21 839</p>
						<p>RNE: 7 830</p>
					</div>
				</div>

				<!--CAMBIAR MEDICO-->
				<div class="return">
					<a href="medicos.php" class="btn-main">Cambiar Médico</a>
				</div>
			</div>

		</article>

		<!--PESTAÑA 2-->
		<section class="pestana2">
			<img src="img/pestana3.png" alt=""  class="img-1">
			<img src="img/pestana3-993.png" alt="" class="img-2">
		</section>
	</section>

	<!--LISTADO DE DOCTORES-->
	<section class="medicalContainer reserve">
		<section class="b-container">
			<article class="b-container-title">
				<h2>Disponibilidad en la <strong>Mañana</strong></h2>
				<h4>Seleccionaste el día <strong>29 de Agosto</strong> para tu cita</h4>
			</article>

			<!--HORAS DISPONIBLES-->
			<article class="b-container-medical">
				<!--HORARIO 1-->
				<div class="item">
					<a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>08:00AM</h3>
						<p>disponible</p>
					</a>
				</div>

				<!--HORARIO 2-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>08:30AM</h3>
						<p>disponible</p>
					</a>
				</div>	

				<!--HORARIO 3-->
				<div class="item reservado">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>09:00AM</h3>
						<p>reservado</p>
					</a>
				</div>	

				<!--HORARIO 4-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>09:30AM</h3>
						<p>disponible</p>
					</a>
				</div>	

				<!--HORARIO 5-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>10:00AM</h3>
						<p>disponible</p>
					</a>
				</div>	

				<!--HORARIO 6-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>10:30AM</h3>
						<p>disponible</p>
					</a>
				</div>	

				<!--HORARIO 7-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>11:00AM</h3>
						<p>disponible</p>
					</a>
				</div>	

				<!--HORARIO 8-->
				<div class="item">
					<a <a href="#modalCita" class="waves-effect waves-light modal-trigger">
						<h3>11:30AM</h3>
						<p>disponible</p>
					</a>
				</div>					
			</article>
		</section>

		<!--PESTAÑA 2-->
		<section class="pestana2">
			<img src="img/pestana4.png" alt=""  class="img-1">
			<img src="img/pestana4-993.png" alt="" class="img-2">
		</section>
	</section>

	<!--MODAL CITA-->
	<div id="modalCita" class="modal">
		<div class="modal-content">
			<p>Falta muy poco</p>
			<h4>¡Confirma tu Cita!</h4>
		</div>
		
		<!--DATOS DE LA CITA-->
		<div class="modal-body" id="datosCita">
			<!--PERFIL-->
			<div class="profile">
				<figure>
					<img src="img/comandos-avatar.jpg" alt="">
				</figure>
				<div class="dates">
					<h3>Comandos Underwood</h3>
					<h4>Traumatología</h4>
					<div class="dates-item">
						<p>CMP: 21 839</p>
						<p>RNE: 7 830</p>
					</div>
				</div>
			</div>

			<!--CITA-->
			<div class="day">
				<!--DIA-->
				<div class="item">
					<p>día</p>
					<h5>29 de Agosto de 2016</h5>
				</div>

				<!--HORA-->
				<div class="item">
					<p>hora</p>
					<h5>08:00 am</h5>
				</div>
			</div>

			<div class="modal-footer">
				<!--CANCELAR-->
				<div class="options">
					<a href="#!" class="modal-action modal-close btn-return">Cancelar</a>
				</div>

				<!--CONTINUAR-->
				<div class="options">
					<a href="#!" class="btn-main" id="nextModal">Continuar</a>
				</div>
			</div>
		</div>

		<!--DATOS DE REGISTRO-->
		<div class="modal-body" id="registroCita">
			<!--Mensaje-->
			<div class="message">
				<h3>¡Hey, Accede o Registrate!</h3>
				<p>Es muy rápido y en pocos pasos</p>
			</div>

			<!--REGISTRO/ACCEDER-->
			<div class="optionRegister">
				<!--ACCEDER-->
				<div class="item">
					<a href="#!">Acceder</a>
				</div>

				<!--REGISTRO-->
				<div class="item">
					<a href="#!">Registrarme</a>
				</div>
			</div>

			<div class="modal-footer">
				<!--CANCELAR-->
				<div class="options">
					<a href="#!" class="modal-action modal-close btn-return">Cancelar</a>
				</div>
			</div>
		</div>
	</div>


	<?php include 'inc/footer.php'; ?>
  	<?php include 'inc/footer_common.php'; ?>	
</body>
</html>