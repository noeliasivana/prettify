<?php
	session_start();
	include 'serv.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, links, icons" />
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/footer-distributed.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div  class="no-margin">
		<div class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner" id="cabecera_"></div>		
		<?php
			if(isset($_SESSION['user'])){
				include 'ofertas_usuario.php';
			}else{
				include 'form_login.php';
			}
		?>  
		<div id="footer"></div>	
	</div>
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