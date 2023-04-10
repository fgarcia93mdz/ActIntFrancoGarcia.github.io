<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TRABAJO MVC Franco Garcia</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Caveat&family=Righteous&display=swap');
	</style>


</head>

<body>

	<div class="container-fluid" style="width: 100%; display: flex;
    align-items: center;">

		<a href="" style="width:39%">
			<img src="../public/img/logo.png" alt="logoGestoDeViajes" style="width: 30%; margin-left: 50px;">
		</a>
		<h1 style="width:50%; font-family: 'Righteous', cursive;">Gestor de viajes</h1>


	</div>

	<div class="container-fluid  bg-light">

		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

				<?php if (isset($_GET["pagina"])) : ?>

					<?php if ($_GET["pagina"] == "registro") : ?>

						<li class="nav-item">
							<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
						</li>

					<?php else : ?>

						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=registro">Registro</a>
						</li>

					<?php endif ?>

					<?php if ($_GET["pagina"] == "ingreso") : ?>

						<li class="nav-item">
							<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
						</li>

					<?php else : ?>

						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
						</li>

					<?php endif ?>

					<?php if ($_GET["pagina"] == "inicio") : ?>

						<li class="nav-item">
							<a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
						</li>

					<?php else : ?>

						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
						</li>

					<?php endif ?>

				<?php else : ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registro">Registro</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
					</li>


				<?php endif ?>

			</ul>

		</div>

	</div>

	<div class="container-fluid">

		<div class="container py-5">

			<?php


			if (isset($_GET["pagina"])) {

				if (
					$_GET["pagina"] == "registro" ||
					$_GET["pagina"] == "ingreso" ||
					$_GET["pagina"] == "inicio"

				) {

					include "paginas/" . $_GET["pagina"] . ".php";
				} else {

					include "paginas/error404.php";
				}
			} else {

				include "paginas/registro.php";
			}


			?>

		</div>

	</div>

</body>

</html>