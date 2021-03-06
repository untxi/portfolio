<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
    <script src="js/script.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Librerías para Carrusel de Imagenes-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
	    <script src="js/script.js"></script>
    <title>Intereses - Samantha Arburola</title>
</head>

<body>
	<header>
		<h1>Portafolio Personal</h1>
		<h2>Samantha Arburola</h2>
	</header>

	<nav class="col-12">
		<ul>
			<li class="col-2"><a href="index.php">Inicio</a></li>
			<li class="col-2"><a href="formacion.php">Formación</a></li>
			<li class="col-2 active"><a href="intereses.php">Intereses Personales</a></li>
			<li class="col-2"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li class="col-2"><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles class="col-12">
			<section class="col-10 interes datas">
				<dl>
					<dt>Montañismo</dt>
					<dd>Caminata en montaña</dd>
					<br>
					<dt>Destrucción de Brecha Digital</dt>
					<dd>Trabajo en Plataforma TIC-as</dd>
				</dl>
			</section>

			<section class="col-12">
                <div class="container">
                  <br>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                      <div class="item active">
                        <img src="img/img1.jpg" alt="Chania" width="460" height="345">
                        <div class="carousel-caption">
                          <h3>2da Hackaton Femenina Costa Rica</h3>
                          <p>2016</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/img3.jpg" alt="DD">
                        <div class="carousel-caption">
                          <h3>NodeJS Day</h3>
                          <p>Celebración Mundial de NodeJS School Day</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/img4.jpg" alt="DiaMujer">
                        <div class="carousel-caption">
                          <h3>Girls in TICs</h3>
                          <p>28 de Abril, Día Internacional de las Nias en las TICs</p>
                        </div>
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
			</section>
		</articles>
	</main>
	<footer>
	<p>
		© 2017 by Samantha Arburola - Introducción al Desarrollo de Aplicaciones Web
    </p>
	</footer>
</body>
</html>