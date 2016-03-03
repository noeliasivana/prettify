<?php
	session_start();
?>
			<div style="background-color:white;text-align:center;" class="post col-lg-12">
			<?php
				if(isset($_SESSION['user'])){
			?>
					<a style="color:black; line-height:0; text-align:center; font-weight:900; font-size:9pt; margin-left:35px; padding-bottom:28px;" href="logout.php">Salir</a>
			<?php
				}else{?>
					<a style="color:#eaeaea; line-height:0; text-align:center; font-weight:900; font-size:9pt; margin-left:35px; padding-bottom:28px;" href="#"></a>
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
			