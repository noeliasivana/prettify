<?php
	session_start();
	include 'serv.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
	<div class="no-margin">
			<div style="background-color:#eaeaea;text-align:center;" class="post col-lg-12">
			<?php
				if(isset($_SESSION['user'])){
			?>
					<a style="color:black; line-height:0; text-align:center; font-weight:900; font-size:9pt; margin-left:35px; padding-bottom:28px;" href="logout.php">Salir</a>
			<?php
				}else{?>
					<a style="color:#eaeaea; line-height:0; text-align:center; font-weight:900; font-size:9pt; margin-left:35px; padding-bottom:28px;" href="#">Delivery</a>
			<?php
				}
			?>
			</div>
			<div style="background-color:orange;text-align:center;" class="post col-lg-12">
				<div class="post col-lg-2">
					<img WIDTH=155 HEIGHT=100 src="images/logo.png" alt="">
				</div>
				<div class="post col-lg-2"><a  style="color:white; line-height:1; font-family:Impact; text-align:center; font-weight:9000; font-size:24pt; margin-left:30px; padding-bottom:28px;" href="bebidas.html">BEBIDAS</a></div>
				<div class="post col-lg-2"><a  style="color:white; line-height:1; font-family:Impact; text-align:center; font-weight:9000; font-size:24pt; margin-left:30px; padding-bottom:28px;" href="platos.html">PLATOS</a></div>				
				<div class="post col-lg-2"><a  style="color:white; line-height:1; font-family:Impact; text-align:center; font-weight:9000; font-size:24pt; margin-left:30px; padding-bottom:28px;" href="ofertas.php">OFERTAS</a></div>							
				<div class="post col-lg-2"><a  style="color:white; line-height:1; font-family:Impact; text-align:center; font-weight:9000; font-size:24pt; margin-left:30px; padding-bottom:28px;" href="contactanos.html">CONTACTANOS</a></div>
				<div class="post col-lg-2"><a  style="color:white; line-height:1; font-family:Impact; text-align:center; font-weight:9000; font-size:24pt; margin-left:30px; padding-bottom:28px;" href="index.php">HOME</a></div>

				</div>								
  
	<?php
	if(isset($_SESSION['user'])){?>
	USTED YA INICIO SESION
	<?php
	}else{?>
<div style="background-color:#2f2f3b" class="courses_banner">
  	<div class="container">
  		<h3 >Ofertas</h3>
  		<p class="description">
			Si quieres formar parte de las personas que se benefician con nuestras ofertas inicia sesión.
		</p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Inicio</a></li>
                <li class="current-page">Ofertas</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" method="post" action="validar_registro.php">
	    	<p class="lead">Registrate</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="user" class="required form-control" placeholder="Usuario">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Contraseña" name="pw">
		    </div>
		    <div class="form-group">
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="B1" value="Registrar">
		    </div>
		 </form>
	   </div>
	</div>	
	<?php
	}
	?>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
	<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</body>
</html>