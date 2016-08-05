<!DOCTYPE html>
<html>
	<head>
		<title>Scribe</title>
		<?php require_once('includes/head.php'); ?>
		<!-- CSS -->  
	</head>
	<body>	
		<?php $section = "contacto"; ?>	
		<div class="fix"><?php require_once('includes/header.php'); ?></div>
        	
    	<div class="main contacto">
    		<div class="wrapper" >
    			<div class="row">
    				<div class="col-md-6">
    					<article>	
    						<h1>QUEREMOS SABER DE TI</h1>	    
							<p>¿Tienes dudas o comentarios sobre Scribe®?<br>
							Llena el formulario con tus datos y déjanos saber lo que piensas.</p>		
					  	</article>
    				</div>
    				<div class="col-md-6">
    					<form id="contactForm" method="get" action="">
							<div class="col">
								<input id="name" name="name" minlength="2" type="text" placeholder="Nombre*" required>
							</div>
							<div class="col">
								<input id="email" name="email" type="email" placeholder="Email*" required>
							</div>
							<div class="col">
								<input id="tel" name="tel" type="phone" placeholder="Teléfono">
							</div>
							<div class="col">
								<input id="comp" name="comp" type="text" placeholder="Asunto*" required>
							</div>
							<div class="col large">
								<textarea id="comment" name="comment" placeholder="Comentarios..."></textarea>
							</div>
							<p class="ob">Los campos marcados con (*) son obligatorios</p>
							<button class="btn">ENVIAR</button> 
						</form>
    				</div>
    			</div>
			    

			  	
 			</div>
		</div>


		<?php require_once('includes/footer.php'); ?>


		<?php require_once('includes/footer-links.php'); ?>

		<script type="text/javascript">
	skrollr.init({
		forceHeight: false
	});
	</script>

	</body>	
</html>
