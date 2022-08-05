<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Grupo 2</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/validar.js"></script>
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	   	<link rel="stylesheet" href="css/iconbar.css">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	    <link rel="stylesheet" href="css/main.css">
	    <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		  <!-- Template Main CSS File -->
		  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex" style="height: 40px">
		    <div class="container d-flex justify-content-between">
		      <nav id="navbar" class="navbar">
		        <ul>
		          <li><a class="nav-link scrollto active" href="#home">HOME</a></li>
		          <li><a class="nav-link scrollto" href="#cont">CONTENIDO</a></li>
		        </ul>
		        <i class="bi bi-list mobile-nav-toggle"></i>
		      </nav><!-- .navbar -->
		    </div>
		</header>

		<!-- HOME-->
		<section id="home">
			<div class="container-fluid center-block color1 centrar a " style="height:  60px" >
			</div>
			<div class="container-fluid  center-block color1 centrar a " style="height:  100px" >
				<img src="imagenes/logo_ESPE.png" style="width:400px;height:89px;">
			</div>
			<div class="container-fluid  center-block color1 centrar a " style="height:  60px" >
				<h1>NRC: 8496</h1>
			</div>
		</section>
        <!-- CONTENIDO -->
        <div id="cont" class="container">
		<h2><center>Grupo N.2</center></h2>
		<h2><center> Integrantes: JOEL CASTILLO Y DANILO JARRIN</center></h2>
		<table border="1"> 
		<?php
			include_once("include/class.figura.php");
			include_once("include/Interface.formulas.php");
			include_once("figuras/class.cuadrado.php");
			include_once("figuras/class.rectangulo.php");
			include_once("figuras/class.triangulo.php");
			echo figura::get_form();
			
			function mostrarContenido(formulas $fig){
				$fig->area();
				$fig->perimetro();
				echo "El área del " . $fig->getTipo() . " es: " . $fig->getArea();
				echo "<br>El perímetro del " . $fig->getTipo() . " es: " . $fig->getPerimetro();
			}
		?>
		</table>
        </div>
		<script type="text/javascript" src="js/vendor/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
	    <script src="js/vendor/main.js"></script>
	
	
</body>

</html>
