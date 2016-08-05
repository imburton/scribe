<!DOCTYPE html>
<html>
	<head>
		<title>Scribe</title>
		<?php require_once('includes/head.php'); ?>
		<!-- CSS -->  
	</head>
	<body>	
		<?php $section = "cuadernos"; ?>	
		<div class="fix"><?php require_once('includes/header.php'); ?></div>
        	
    	<div class="main">

			<div class="tit-page">
		    	<h1>Cuadernos y más</h1>
		    	<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
		    </div>

		    <div class="catalogo">		    
			    <article class="filtros">
		  			<p>
		  				<button class="filter" data-filter=".ninos">Niños</button>
		  				<button class="filter" data-filter=".jovenes">Jóvenes</button>
		  				<button class="filter" data-filter=".adultos">Adultos</button>
		  				<button class="filter active" data-filter="all">Ver todo</button>  				
		  			</p>
		  		</article>

		  		<section id="cuadernos-list" class="cuadernos-list">
			  		<div class="mix jovenes">
			  			<div class="image green">
			  				<img src="img/cuadernos/cuaderno01.png" alt="">
			  			</div>
			  			<h1><strong>GAMERS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
							<p><span class="ry blanco"></span> Blanco</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix ninos">
			  			<div class="image yelow">
			  				<img src="img/cuadernos/cuaderno02.png" alt="">
			  			</div>
			  			<h1><strong>MINIONS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix jovenes">
			  			<div class="image violet">
			  				<img src="img/cuadernos/cuaderno03.png" alt="">
			  			</div>
			  			<h1><strong>MAFALDA</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix jovenes">
			  			<div class="image red">
			  				<img src="img/cuadernos/cuaderno04.png" alt="">
			  			</div>
			  			<h1><strong>ECOLÓGICO</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix ninos">
			  			<div class="image black">
			  				<img src="img/cuadernos/cuaderno01.png" alt="">
			  			</div>
			  			<h1><strong>GAMERS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix ninos jovenes">
			  			<div class="image cyan">
			  				<img src="img/cuadernos/cuaderno03.png" alt="">
			  			</div>
			  			<h1><strong>MAFALDA</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix adultos">
			  			<div class="image orange">
			  				<img src="img/cuadernos/cuaderno04.png" alt="">
			  			</div>
			  			<h1><strong>ECOLÓGICO</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix ninos">
			  			<div class="image green">
			  				<img src="img/cuadernos/cuaderno01.png" alt="">
			  			</div>
			  			<h1><strong>GAMERS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
							<p><span class="ry blanco"></span> Blanco</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix jovenes ninos">
			  			<div class="image yelow">
			  				<img src="img/cuadernos/cuaderno02.png" alt="">
			  			</div>
			  			<h1><strong>MINIONS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix adultos">
			  			<div class="image violet">
			  				<img src="img/cuadernos/cuaderno03.png" alt="">
			  			</div>
			  			<h1><strong>MAFALDA</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix jovenes">
			  			<div class="image red">
			  				<img src="img/cuadernos/cuaderno04.png" alt="">
			  			</div>
			  			<h1><strong>ECOLÓGICO</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix adultos">
			  			<div class="image black">
			  				<img src="img/cuadernos/cuaderno01.png" alt="">
			  			</div>
			  			<h1><strong>GAMERS</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix ninos">
			  			<div class="image cyan">
			  				<img src="img/cuadernos/cuaderno03.png" alt="">
			  			</div>
			  			<h1><strong>MAFALDA</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry c5"></span> C5</p>
							<p><span class="ry c7"></span> C7</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>
			  		<div class="mix adultos">
			  			<div class="image orange">
			  				<img src="img/cuadernos/cuaderno04.png" alt="">
			  			</div>
			  			<h1><strong>ECOLÓGICO</strong> Profesional</h1>
			  			<h2>ESPIRAL DOBLE O SEMI RIGIDA</h2>
			  			<div class="raya">
			  				<p><span class="ry simple"></span> Raya</p>
							<p><span class="ry doble"></span> Doble</p>
							<p><span class="ry c5"></span> C5</p>
			  			</div>
			  			<a href="cuadernos-detalle.php" class="btn">ver cuaderno</a>
			  		</div>

			  		
			  	</section>
			  	<div class="clear"></div>
		  	</div>
 
		</div>


		<?php require_once('includes/footer.php'); ?>


		<?php require_once('includes/footer-links.php'); ?>



	</body>	
</html>
