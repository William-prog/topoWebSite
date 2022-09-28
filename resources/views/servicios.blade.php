<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FF781F" />
	<meta name="description" content="Servicios y equipos de mineria con más de 30 años de experiencia. Reparación y mantenimiento, contamos con cabina de pintura, shotblast, mano de obra minera.">
	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	<!-- Link tags -->
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/appCustomStyles.css">
	<link rel="stylesheet" href="css/Pruebas/styleOne.css">
	<link rel="stylesheet" href="css/accodion.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<title>Servicios - Servicios y Equipos Topo S.A. de C.V.</title>
</head>

<body>

	<!--    Nav-menu + IMG-Header    -->
	<header id="header">
		<nav id="mobile-nav" class="flex flex-jc-sb flex-ai-c hide-desktop">
			<a href="/">
				<img id="mobile-logo" src="img/logo.png" alt="Servicios y Equipos Topo S.A. de C.V." class="logo">
			</a>
			<a>
				<img id="mobile-menu" class="burger-menu" src="img/menu-white.png" onclick="openNav()" alt="menu" class="menu">
			</a>
		</nav>

		<!-- Desktop navigation -->
		<nav id="desktop-nav" class="col-4 flex-jc-sb flex-ai-c flex-jc-sa hide-mobile">
			<div class="logo-desktop">
				<a href="https://serviciosyequipostopo.com.mx/">
					<img src="img/topo.png" alt="" class="">
					<!--<img id="desktop-logo" src="img/logo.png" alt="" class="">-->
				</a>
			</div>
			<div>
				<a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/">Inicio</a>
			</div>
			<div>
				<a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/careers" target="_blank">Empleos</a>
			</div>
			<div>
				<a class="nav-anchor" href="https://serviciosyequipostopo.com.mx/contact" target="_blank">Contácto</a>
			</div>

		</nav>

		<div class="img-header">
			<div class="welcome">

				<h1>No tendrás que preocuparte, <br> <span class="orange-text">nuestro equipo</span> <br> se encarga de ello por ti.</h1>
				<hr>
			</div>
		</div>

		<!-- Skew-down -->
		<div class="skew-down"></div>

	</header>
	<!--    Nav-menu + IMG-header    -->


	<!--    About me     -->
	<main>
		<section class="about">
			<div class="info-container">
				<h1>Nuestros Servicios</h1>
				<p>Contamos con personal especializado, altamente capacitado para cumplir con las expectativas de nuestros clientes, de una manera rapida y eficiente.</p>
			</div>
			<div class="about-gallery">

				<div class="tabs">
					<div class="tab-header">
						<div class="active">
							Servicios
						</div>
						<div>
							Mantenimiento Preventivo/Correctivo
						</div>
						<div>
							Diagnostico de falla
						</div>
						<div>
							Reparacion Mecanica Hidraulica
						</div>
						<div>
							Reparacion Electrica/Electronica
						</div>
					</div>
					<div class="tab-indicator">

					</div>
					<div class="tab-content">
						<div class="text-black active" style="background-image: url(img/topo-interior-mina.webp); height: 100%; border-radius: 0px 20px 30px 0px;">
							<h3>Servicios</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Quisquam sed nam modi similique quas? Inventore labore asperiores exercitationem ducimus veniam?
								Quis ut delectus cum consequuntur deleniti veniam iste non temporibus!
							</p>
						</div>
						<div class="text-black">
							<h3>Mantenimiento</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Quisquam sed nam modi similique quas? Inventore labore asperiores exercitationem ducimus veniam?
								Quis ut delectus cum consequuntur deleniti veniam iste non temporibus!
							</p>
						</div>
						<div class="text-black">
							<h3>Deteccion</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Quisquam sed nam modi similique quas? Inventore labore asperiores exercitationem ducimus veniam?
								Quis ut delectus cum consequuntur deleniti veniam iste non temporibus!
							</p>
						</div>
						<div class="text-black">
							<h3>Mecanica Hidraulica</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Quisquam sed nam modi similique quas? Inventore labore asperiores exercitationem ducimus veniam?
								Quis ut delectus cum consequuntur deleniti veniam iste non temporibus!
							</p>
						</div>
						<div class="text-black">
							<h3>Electrica Electronica</h3>
							<p>
								Lorem ipsum dolor, sit amet consectetur adipisicing elit.
								Quisquam sed nam modi similique quas? Inventore labore asperiores exercitationem ducimus veniam?
								Quis ut delectus cum consequuntur deleniti veniam iste non temporibus!
							</p>
						</div>
					</div>
				</div>

				<script type="text/javascript">
					function _class(name) {
						return document.getElementsByClassName(name);
					}

					let tabPanes = _class("tab-header")[0].getElementsByTagName("div");

					for (let i = 0; i < tabPanes.length; i++) {
						tabPanes[i].addEventListener("click", function() {
							_class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
							tabPanes[i].classList.add("active");

							_class("tab-indicator")[0].style.top = `calc(80px + ${i*50}px)`;

							_class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
							_class("tab-content")[0].getElementsByTagName("div")[i].classList.add("active");

						});
					}
				</script>
			</div>
		</section>

		<!-- My proyects -->
		<section class="my-proyects">
			<!-- Skew-up -->
			<div class="skew-up"></div>
			<!-- Skew-up -->
			<div class="deg-background"></div>
			<div class="axisZproyect">
				<div class="container-proyect">
					<div class="proyect-title">
						<h2>Galeria</h2>
						<hr>
					</div>

					<div class="proyect-img">
						<img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="theme-1">
						<img src="https://images.unsplash.com/photo-1569098644584-210bcd375b59?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" alt="theme-2">
						<img src="https://images.unsplash.com/photo-1586281380923-93c9b0a7296e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" alt="theme-3">
						<img src="https://images.unsplash.com/photo-1569294684324-c8b78a3857e0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="theme-4">
						<img src="https://images.unsplash.com/photo-1600132806608-231446b2e7af?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=667&q=80" alt="theme-5">
						<img src="https://images.unsplash.com/photo-1475915170093-b21379ce2a3c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" alt="theme-6">
						<img src="https://images.unsplash.com/photo-1598970434795-0c54fe7c0648?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="theme-7">
						<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="theme-8">
						<img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" alt="theme-9">
						<img src="https://images.unsplash.com/photo-1454165205744-3b78555e5572?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="theme-10">
					</div>
				</div>
			</div>
			<!-- Skew-up -->
			<div class="skew-down"></div>
			<!-- Skew-up -->
		</section>
		<!-- My proyects -->

		<!-- Testimonials -->
		<section class="testimonials">
			<div class="testimonials-title">
				<h2>Clientes</h2>
				<hr>
			</div>
			<div class="box-testimonials">
				<div class="card-testimonials">
					<div class="card-img">
						<img src="img/topo.png" alt="">
						<!-- <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="people-1"> -->
					</div>
					<div class="testimony-text">
						<h4>Mina 1</h4>
						<p>Descripcion breve sobre el trabajo realizado, mantenimiento, soporte, asesoria... etc etc</p>
					</div>
				</div>
				<div class="card-testimonials">
					<div class="card-img">
						<img src="img/topo.png" alt="">
						<!-- <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="people-2"> -->
					</div>
					<div class="testimony-text">
						<h4>Mina 2</h4>
						<p>Descripcion breve sobre el trabajo realizado, mantenimiento, soporte, asesoria... etc etc</p>
					</div>
				</div>
				<div class="card-testimonials">
					<div class="card-img">
						<img src="img/topo.png" alt="">
						<!-- <img src="https://images.unsplash.com/photo-1499996860823-5214fcc65f8f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=402&q=80" alt="people-3"> -->
					</div>
					<div class="testimony-text">
						<h4>Mina 3</h4>
						<p>Descripcion breve sobre el trabajo realizado, mantenimiento, soporte, asesoria... etc etc</p>
					</div>
				</div>
				<div class="card-testimonials">
					<div class="card-img">
						<img src="img/topo.png" alt="">
						<!-- <img src="https://images.unsplash.com/photo-1440589473619-3cde28941638?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="people-4"> -->
					</div>
					<div class="testimony-text">
						<h4>Mina 4</h4>
						<p>Descripcion breve sobre el trabajo realizado, mantenimiento, soporte, asesoria... etc etc</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonials -->

	</main>
	<!--    About me     -->


	<!-- Footer -->
	<footer class="footer">
		<!-- Skew-up -->
		<div class="skew-up"></div>
		<!-- Skew-up -->
		<div class="deg-footer"></div>
		<div class="axisZfooter">
			<div class="footer-content">
				<div class="footer-title">
					<h2>¿Necesitas una cotizacion? <span class="orange-text">Contactanos</span></h2>
					<hr>
				</div>
				<div class="form-content">
					<style>
						.container_all {
							position: relative;
							right: 0;
							transition: all 300ms;
						}

						.container__card {
							max-width: 1200px;
							padding: 20px;
							padding-bottom: 40px;
							margin: auto;
							display: flex;
							flex-wrap: wrap;
							justify-content: center
						}
					</style>
					<div class="col-12">
						<div class="container_all">
							<style>
								.card__father {
									margin: 20px;
									perspective: 1000px;
								}

								.card__father:hover .card {
									transform: rotateY(180deg);
								}


								.card {
									width: 400px;
									height: 250px;
									position: relative;
									transform-style: preserve-3d;
									transition: all 600ms;
								}

								.card__front {
									background-size: cover;
									background-position: center;
								}


								.card__front,
								.card__back {
									width: 100%;
									height: 100%;
									position: absolute;
									top: 0;
									left: 0;
									backface-visibility: hidden;
									transform-style: preserve-3d;
									border-radius: 20px;
								}

								.card__back {
									transform: rotateY(180deg);
									background: white;
								}

								.body__card_front {
									width: 100%;
									height: 100%;
									text-align: center;
									padding-top: 30%;
									display: flex;
									justify-content: center;
									align-items: center;
									color: #fff;
									transform: translateZ(60px);
								}

								.bg {
									width: 100%;
									height: 100%;
									position: absolute;
									top: 0;
									left: 0;
									background: rgba(0, 0, 0, 0.4);
									border-radius: 20px;
								}

								.body__card_back {
									padding: 40px;
									text-align: center;
									transform: translateZ(60px);
								}

								.body__card_back p {
									margin-top: 30px;
									text-align: justify;
									font-size: 18px;
								}

								.body__card_back input {
									padding: 10px 40px;
									margin-top: 30px;
									font-size: 16px;
									cursor: pointer;
									border: none;
									color: white;
									background: #58B0F6;
									box-shadow: 1px 1px 30px -5px #58B0F6;
									border-radius: 10px;
									transition: box-shadow 600ms;
								}

								.body__card_back input:hover {
									box-shadow: 1px 1px 30px 0px #449de6;
								}
							</style>

							<div class="container__card">

								<div class="card__father">
									<div class="card">
										<div class="card__front" style="background-image: url(img/targetas/1.png);">
											<div class="bg"></div>
											<div class="body__card_front">
												<!-- <h1>Venta de refacciones</h1> -->
											</div>
										</div>
										<div class="card__back">
											<div class="body__card_back">
												<h1>Ing. Jersson Baez Vargas</h1>
												<p>Datos del Contacto</p>
											</div>
										</div>
									</div>
								</div>

								<div class="card__father">
									<div class="card">
										<div class="card__front" style="background-image: url(img/targetas/4.png);">
											<div class="bg"></div>
											<div class="body__card_front">
												<!-- <h1>Equipos Utilitarios</h1> -->
											</div>
										</div>
										<div class="card__back">
											<div class="body__card_back">
												<h1>Ing. Victor Hugo Ruiz Elizalde</h1>
												<p>Datos del contacto</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->




	<footer class="text-center">
		<div class="dirt-background">

		</div>
		<div class="footer-elements">
			<h3>Mapa del sitio</h3>
			<div class="site-map">
				<a href="#">Inicio</a>
				<a href="#">Servicios</a>
				<a href="#">Contácto</a>
				<a href="/careers">Empleos</a>
			</div>
			<h3>Mantente conectado</h3>
			<div class="social">
				<img src="img/facebook.svg" alt="facebook servicios y equipos topo">
				<img src="img/linkedin.svg" alt="linkedin servicios y equipos topo">
				<img src="img/whatsapp.svg" alt="whatsapp servicios y equipo topo">
			</div>
			<p>2020 Servicios y Equipos TOPO S.A. de C.V. Todos los derechos reservados</p>
		</div>
	</footer>
	<!-- Font awesome CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
	<!-- AOS fade animation library -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init(
			/*{
			        once: true
			    }*/
		);
	</script>
</body>

</html>
<!-- Change header style when scrolling -->
<script src="js/scroll.js"></script>