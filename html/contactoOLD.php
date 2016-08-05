<!DOCTYPE html>
<html>
	<head>
		<title>Axionlog</title>
		<?php require_once('includes/head.php'); ?>
		<!-- CSS -->  
	</head>
	<body>	
		<?php require_once('includes/nav.php'); ?>

        	
		  	

		  	


		  	
		<?php require_once('includes/footer.php'); ?>
		<?php require_once('includes/footer-links.php'); ?>>
	</body>	
</html>
<form id="contactForm" method="get" action="">
							<div class="col">
								<input id="name" name="name" minlength="2" type="text" placeholder="Nombre" required>
							</div>
							<div class="col">
								<input id="comp" name="comp" type="text" placeholder="Compañía" required>
							</div>
							<div class="col">
								<input id="pais" name="pais" type="text" placeholder="País" required>
							</div>
							<div class="col">
								<input id="ciudad" name="ciudad" type="text" placeholder="Ciudad" required>
							</div>
							<div class="col">
								<input id="email" name="email" type="email" placeholder="Email" required>
							</div>
							<div class="col">
								<input id="tel" name="tel" type="phone" placeholder="Teléfono">
							</div>
							<div class="col large">
								<textarea id="comment" name="comment" placeholder="Consulta"></textarea>
							</div>
							<button class="generic-btn">ENVIAR CONSULTA</button> 
							<!--input class="submit" type="submit" value="Submit"-->
						</form>