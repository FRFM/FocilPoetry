<?php include 'header.php';?>

	  <!--Content-->
	
			
	<div class="container-fluid Main-Container" >

			<!--Section-->
		<div class="SectionBackground Primary-Background">
				<div class="container-fluid">
					<div class="Section row flex flex-row">
						<div class="col text-center Primary-Section">
							<div class="Section-Title">Focil Poetry</div>
							<div class="Section-Content">Un Lugar Donde La Poesía Que Forma Parte De Mi, Sea Parte De Ti</div>
						</div>
					</div>
				</div>
		</div>
			<!--Section-->

		<!--Carousel-->
		<div class="SectionBackground Secondary-Background">
			<div id="Main-Carousel" class="carousel slide " data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#Main-Carousel" data-slide-to="0" class="active"></li>
					<li data-target="#Main-Carousel" data-slide-to="1"></li>
					<li data-target="#Main-Carousel" data-slide-to="2"></li>
					
				</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
						<a href="Seleccion.php?opt=fav">
						<img src="Images/fav.jpg" alt="Poesía" class="img-fluid">
							<div class="carousel-caption  carousel-caption-ligth">
								<h1>Favoritos</h2>
								<p>Poemas Favoritas del Autor</p>
							</div>
						</a>
				</div>

					<div class="carousel-item ">
							<a href="Poema.php?spr=true" >
							<img  src="Images/ldr.jpg " alt="Declamacion" class="img-fluid" >
								<div class="carousel-caption carousel-caption-ligth">
								<h1>Sorprendeme</h2>
								<p>Poema Aleatorio</p>
								</div>
							</a>
					</div>

					<div class="carousel-item">
					<a href="Seleccion.php?opt=ldr" >
					<img src="Images/Notebook.jpg" alt="Autor" class="img-fluid">
						<div class="carousel-caption">
						<h1>Léelo del Revés</h2>
									<p>Poemas con diferente significado</p>
							
						</div>
					</a>
					</div>

					
			</div>

				<a class="carousel-control-prev" href="#Main-Carousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
				<a class="carousel-control-next" href="#Main-Carousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>
			</div>
			<div id="Section-Poesía"></div>
		</div>
		<!--Carousel-->

		<!--Section-->
		<div class="SectionBackground Primary-Background">
			<div class="container-fluid">
				
				
				<div class="Section row flex flex-row">
					
					<div class="col text-center Secondary-Section">
							
						<div class="Section-Title">Favoritos</div>
						<div class="Section-Content">
							Una colección de poemas seleccionados por el autor
						</div>
						<a type="button" class="btn btn-dark Redirection" href="Seleccion.php?opt=fav">Saber Más</a>

					</div>
					

				</div>
			</div>
			<div id="Section-Declamacion"></div>
		</div>
		<!--Section-->

		<!--Section-->
	
		<div class="SectionBackground Secondary-Background">
			<div class="container-fluid">
				<div class="Section row flex flex-row">
					<div class="col text-center Primary-Section">
							
						<div id="Declamacion" class="Section-Title">Léelo del Revés</div>
						<div class="Section-Content">Una colección de poemas que cambia su significado si lo lees del revés</div>
						<a type="button" href="Seleccion.php?opt=ldr" class="btn btn-dark Redirection">Saber Más</a>
					</div>
					

				</div>
			</div>
			<div id="Section-Autor"></div>
		</div>
	
		<!--Section-->

		<!--Section-->
		<div class="SectionBackground Primary-Background">
			<div class="container-fluid">
				<div class="Section row flex flex-row">
					<div class="col text-center Secondary-Section">
						<div class="Section-Title">¿No sabes por donde empezar?</div>
						<div class="Section-Content">
							Sorprendete con un poema al azar
						</div>
							<a type="button" href="Poema.php?spr=true" class="btn btn-dark Redirection">Sorprendeme</a>
					</div>
				</div>
			</div>
			
		</div>
		<!--Section-->

		<!--Section-->
	
		<div class="SectionBackground Secondary-Background">
			<div class="container-fluid">
				<div class="Section row flex flex-row">
					<div class="col text-center Primary-Section">
							
						<div id="Declamacion" class="Section-Title">Notas del Desarrollador</div>
						<div class="Section-Content">Versión 1.2</div>
						<a type="button" href="Dev.php" class="btn btn-dark Redirection">Saber Más</a>
					</div>
					

				</div>
			</div>
			<div id="Section-Dev"></div>
		</div>
	
		<!--Section-->
		

	</div>
	<!--Content-->
<?php include 'footer.php';?>