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
        	
    	<div class="main nopad">

			<section class="in-product">
				<div class="wrapper">
					<div class="slider-detail">
						<div class="swiper-detail">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img alt="black" src="img/cuadernos/slide01.png" class="" /></div>
								<div class="swiper-slide"><img alt="black" src="img/cuadernos/slide02.png" class="" /></div>
								<div class="swiper-slide"><img alt="black" src="img/cuadernos/slide01.png" class="" /></div>
								<div class="swiper-slide"><img alt="black" src="img/cuadernos/slide02.png" class="" /></div>
							</div>
							<div class="butons">
								<div class="swiper-book-prev"><i class="icon-left-open-big"></i></div>
						        <div class="swiper-book-pagination"></div>
						        <div class="swiper-book-next"><i class="icon-right-open-big"></i></div>
							</div>		
						</div>
					</div>
					<div class="info">
						<article>
							<h1>ANNIVERSARY</h1>
							<div class="mira"><span></span></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar ornare enim, at efficitur ipsum accumsan a.</p>
							<ul>
								<li>
									<h2>Formato</h2>
									<p>Profesional (20.0cm x 26.25cm)</p>
									<p>Profesional (20.0cm x 26.25cm)</p>
									<p>Profesional (20.0cm x 26.25cm)</p>
									<p>Profesional (20.0cm x 26.25cm)</p>
								</li>
								<li>
									<h2>Tipo de pasta</h2>
									<p>Semi rígida</p>
								</li>
							</ul>
							<ul>
								<li>
									<h2>Tipo de unión</h2>
									<p>Espiral Doble O</p>
								</li>
								<li>
									<h2>Número de hojas</h2>
									<p>100/200 hojas</p>
								</li>
							</ul>
							<div class="tipo">
								<p><span class="ry simple"></span> Raya</p>
								<p><span class="ry doble"></span> DobleRaya</p>
								<p><span class="ry c5"></span> C5</p>
								<p><span class="ry c7"></span> C7</p>
								<p><span class="ry blanco"></span> Blanco</p>
							</div>
						</article>
						
					</div>
				</div>
		    </section>

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

		<!--div id="easing_wrapper" data-10000="top:0%;">
			<div class="drop" data-0="left:65%;bottom[inverted]:100%;" data-500="bottom:0%;">inverted</div>
			<div class="drop" data-0="left:75%;bottom[bounce]:100%;" data-500="bottom:0%;">bounce</div>
		</div>
<script  src="js/require.js"></script>
		<script type="text/javascript">
			require.config({
				baseUrl: "js",
				paths: {
					'skrollr' : "skrollr.min"
				},
				waitSeconds: 15
			});

			require(['skrollr'], function(skrollr){
				var s = skrollr.init({
					edgeStrategy: 'set',
					easing: {
						WTF: Math.random,
						inverted: function(p) {
							return 1-p;
						}
					}
				});
			});
		</script-->

	</body>	
</html>
