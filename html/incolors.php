<!DOCTYPE html>
<html>
	<head>
		<title>Scribe</title>
		<?php require_once('includes/head.php'); ?>
		<!-- CSS -->  
	</head>
	<body>	
		<?php $section = "home"; ?>	
		<div class="fix"><?php require_once('includes/header.php'); ?></div>
        	
    	<div class="prod-detail">
			<section class="top" style="background-image:url(img/incolors/bg-top.jpg); background-position: center top;">
				<div class="wrapper">
					<div class="slider-book animatedParent">
						<div class="book">
							<div class="swiper-book">
								<div class="swiper-wrapper">
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide01.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide02.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide03.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide04.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide05.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide06.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide07.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="incolors" src="img/incolors/slide08.png" class="imglimit imgb" /></div>
								</div>
									
							</div>
						</div>
						<article class="animated fadeInUp">
							<h1 class="inc">In<span>colors</span></h1>
							<h2 class="inc">Colores que definen tu historia</h2>
							<p class="inc">Lleva contigo un mood de diversión con cada portada de <span>Incolors para vibrar con su estilo</span>, feminidad, colores contrastantes y su toque de ternura sutil.</p>			        
							<div class="butons light">
								<div class="swiper-book-prev"><i class="icon-left-open-big"></i></div>
						        <div class="swiper-book-pagination"></div>
						        <div class="swiper-book-next"><i class="icon-right-open-big"></i></div>
							</div>
						</article>   
					</div>
				</div>
				<a href="#diapo1" class="next-diapo light"><i class="icon-down-open-big"></i></a>
		    </section> 

		    <section id="diapo1" class="diapo">
		    	<div class="column50 limitheight animatedParent">
		    		<h1 class="animated fadeInLeft">LOREM IPSUM ornare nibh ultrices non</h1>
		    	</div>
		    	<div  class="column50 limitheight animatedParent">
		    		<img alt="incolors" src="img/incolors/front.png" class="imglimit animated fadeInRight"/>
		    	</div>
		    	<a href="#diapo2" class="next-diapo"><i class="icon-down-open-big"></i></a>
		    </section>  

		    <section id="diapo2" class="diapo-custom">
		    	<div class="wrapper ov animatedParent">
		    		<div class="open-book">
						
						<div class="modelo limitheight">
							<div class="item formato animated fadeInLeft">
								<h2>Formato</h2>
								<p><strong>Francés</strong> (14.8cm x 20.5cm)</p>
								<p><strong>Profesional</strong> (20.0cm x 26.25cm)</p>
								<p><strong>Carpeta Carta</strong> (24.1cm x 29.5cm)</p>
								<div class="mira"><span></span></div>
							</div>
							<div class="item raya animated fadeInRight">
								<h2>Tipo de raya</h2>
								<p data-instance="img/black/raya.png" data-tipo="1"><span class="ry simple"></span> Raya</p>
								<!--p><span class="ry doble"></span> DobleRaya</p-->
								<p><span class="ry c5"></span> C5</p>
								<p><span class="ry c7"></span> C7</p>
								<!--p><span class="ry blanco"></span> Blanco</p-->
								<div class="mira"><span></span></div>
							</div>
							<div class="item hojas animated fadeInLeft">
								<h2>Número de hojas</h2>
								<p>100 hojas</p>
								<div class="mira"><span></span></div>
							</div>
							<div class="item separador animated fadeInDown">
								<h2 class="separator">Separador</h2>
								<div class="mira"><span></span></div>
							</div>
							<div class="item union animated fadeInUp">
								<h2>Tipo de unión</h2>
								<p>Espiral Doble O</p>
								<div class="mira"><span></span></div>
							</div>
							<div class="item pasta animated fadeInUp">
								<h2>Tipo de pasta</h2>
								<p>Sémi Rígida</p>
								<div class="mira"><span></span></div>
							</div>

							<div class="vista limitheight animated fadeIn">
								<img alt="" src="img/black/separador01.png" class="pos3"/>
								<img alt="" src="img/black/c5.png" class="pos2"/>
								<img alt="" src="img/black/formato01.png" class="pos1"/>
							</div>

						</div>
		    			
		    		</div>
		    	</div>

		    	<a href="#diapo3" class="next-diapo"><i class="icon-down-open-big"></i></a>
		    </section> 

		    <section id="diapo3" class="diapo last">
		    	<div  class="column50 limitheight animatedParent">
		    		<img alt="incolors" src="img/incolors/back.png" class="imglimit animated fadeInRight fr"/>
		    	</div>
		    	<div class="column50 limitheight animatedParent">
		    		<h1 class="animated fadeInLeft">LOREM IPSUM ornare nibh ultrices non</h1>
		    	</div>
		    	<a href="#diapo4" class="next-diapo light"><i class="icon-down-open-big"></i></a>
		    </section>   

		    <section id="diapo4" class="bottomparalax animatedParent" style="background-image:url(img/incolors/bg-bottom.jpg)">
				<div class="info limitheight animated fadeInLeft"><img alt="incolors" src="img/incolors/color.png" class="imglimit imgb" /></div>
		    </section> 
		</div>

		<?php require_once('includes/footer.php'); ?>


		<?php require_once('includes/footer-links.php'); ?>



	</body>	
</html>
