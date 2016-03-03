<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, links, icons" />
    <title>Restaurant</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/footer-distributed.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<div style="background-color:#2f2f3b" class="no-margin">
		<div class="row">
			<div class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner" id="cabecera_"></div>		
		</div>
		<div style="background-color:#2f2f3b" id="carousel-1" class="carousel slide" data-ride="carousel">
			<!--Indicadores-->
			<ol  class="carousel-indicators">
				<li style="background-color:white;" data-target="#carousel-1" data-slide-to="0" class="active"></li>
				<li style="background-color:white;" data-target="#carousel-1" data-slide-to="1"></li>
				<li style="background-color:white;" data-target="#carousel-1" data-slide-to="2"></li>
			</ol>
			<!--contenedor de los slider-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/slider/1.jpg" class="adaptar" alt="">
					<div style="text-align:left;" class="carousel-caption">
						<h6></h6>
						<p></p>
					</div> 
				</div>
				<div class="item">
					<img src="images/slider/2.jpg" class="adaptar" alt="">
					<div class="carousel-caption">
						<h3></h3>
						<p></p>
					</div> 
				</div>
				<div class="item">
					<img src="images/slider/3.jpg" class="adaptar" alt="">
					<div class="carousel-caption">
						<h3></h3>
						<p></p>
					</div> 
				</div>
			</div>
			<!--controles-->
			<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
		<section>
		</section>
	<div id="footer"></div>		
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	$(function(){
		$("#cabecera_").load("cabecera.php"); 
		$("#footer").load("footer.html"); 
	});
	</script>	
</body>
</html>