<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'inc/head_common.php'; ?>	
</head>
<body>
	<?php include 'inc/header.php'; ?>

	<!--FILTRAR POR MEDICOS-->
	<section class="filter">
		<form action="" class="filter-container">
			<h3>Buscar un Médico por:</h3>

			<!--NOMBRES-->
			<div class="itemForm input-field">
				<input id="name" type="text" class="validate">
          		<label for="name">Nombre del Médico</label>
			</div>

			<!--ESPECIALIDAD MEDICA-->
			<div class="itemForm input-field">
				<select>
					<option value="" disabled selected>Especialidad Médica</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>
			</div>

			<!--CALENDARIO-->
			<div class="itemForm input-field">
				<input type="date" class="datepicker" id="calendario">
          		<label for="calendario">Elige el día de tu cita</label>
			</div>

			<!--HORARIO-->
			<div class="hours">
				<h4>¿En qué horario te gustaría?</h4>
				<div class="btn-check active">
					<button>Mañana</button>
				</div>
				<div class="btn-check">
					<button>Tarde</button>
				</div>
			</div>

			<!--BTN SUBMIT-->
			<div class="itemForm">
				<button class="btn-main" type="submit">Continuar</button>
			</div>
		</form>

		<!--PESTAÑA 2-->
		<section class="pestana2">
			<img src="img/pestana3.png" alt=""  class="img-1">
			<img src="img/pestana3-993.png" alt="" class="img-2">
		</section>
	</section>

	<!--LISTADO DE DOCTORES-->
	<section class="medicalContainer">
		<section class="b-container">
			<article class="b-container-title">
				<h2>Buscas <strong>Traumatólogos</strong>, con disponibilidad en la <strong>Mañana</strong></h2>
				<h4>Seleccionaste el día <strong>29 de Agosto</strong> para tu cita</h4>
			</article>

			<!--MEDICOS-->
			<article class="b-container-medical">
				<!--MEDICO 1-->
				<div class="item">
					<a href="medicos-detalle.php">
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
					</a>
				</div>

				<!--MEDICO 2-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico2.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Adrian Abanto</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 3-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico3.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Carlos Fermin</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 4-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico4.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Luis Arellano</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 5-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico5.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Fredy Arnao</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 6-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico6.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Fidel Bermudez</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 7-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico7.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Marcela Amaya</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 8-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico8.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Jesús Aguilar</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 9-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico9.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Pedro Pérez</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 10-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico10.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Gernan Arrollo</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 11-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico11.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Camilo Oropeza</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 12-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico12.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Andrea Quero</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 13-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico13.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Vladimir Amador</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 14-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico14.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Maximiliano Abreu</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--MEDICO 15-->
				<div class="item">
					<a href="medicos-detalle.php">
						<figure>
							<img src="img/medico15.jpg" alt="">
						</figure>
						<div class="dates">
							<h3>Julio Badillo</h3>
							<h4>Traumatología</h4>
							<div class="dates-item">
								<p>CMP: 21 839</p>
								<p>RNE: 7 830</p>
							</div>
						</div>
					</a>
				</div>

				<!--VER MAS-->
				<div class="viewMore">
					<a href="#!" class="btn-return">ver más</a>
				</div>
			</article>
		</section>

		<!--PESTAÑA 2-->
		<section class="pestana2">
			<img src="img/pestana4.png" alt=""  class="img-1">
			<img src="img/pestana4-993.png" alt="" class="img-2">
		</section>
	</section>
	


	<?php include 'inc/footer.php'; ?>
  	<?php include 'inc/footer_common.php'; ?>
</body>
</html>