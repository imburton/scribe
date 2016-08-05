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
			<section class="top" style="background-image:url(img/black/bg-top.jpg)">
				<div class="wrapper">
					<div class="slider-book animatedParent">
						<div class="book">
							<div class="swiper-book">
								<div class="swiper-wrapper">
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide01.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide02.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide03.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide04.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide05.png" class="imglimit imgb" /></div>
									<div class="swiper-slide limitheight"><img alt="black" src="img/black/slide06.png" class="imglimit imgb" /></div>
								</div>
									
							</div>
						</div>
						<article class="animated fadeInUp">
							<h1>Black</h1>
							<h2>Para ti que haces más que estudiar</h2>
							<p>Si eres de los que utilizan las últimas páginas de su cuaderno para escribir todo lo que hace ruido en tu cabeza, <span>Black es para ti.</span></p>			        
							<div class="butons">
								<div class="swiper-book-prev"><i class="icon-left-open-big"></i></div>
						        <div class="swiper-book-pagination"></div>
						        <div class="swiper-book-next"><i class="icon-right-open-big"></i></div>
							</div>
						</article>   
					</div>
				</div>
				<a href="#diapo1" class="next-diapo"><i class="icon-down-open-big"></i></a>
		    </section> 

		    <section id="diapo1" class="diapo">
		    	<div class="column50 limitheight animatedParent">
		    		<h1 class="animated fadeInLeft">LOREM IPSUM ornare nibh ultrices non</h1>
		    	</div>
		    	<div  class="column50 limitheight animatedParent">
		    		<img alt="black" src="img/black/black-front.png" class="imglimit animated fadeInRight"/>
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
		    		<img alt="black" src="img/black/black-back.png" class="imglimit animated fadeInRight fr"/>
		    	</div>
		    	<div class="column50 limitheight animatedParent">
		    		<h1 class="animated fadeInLeft">LOREM IPSUM ornare nibh ultrices non</h1>
		    	</div>
		    	<a href="#diapo4" class="next-diapo light"><i class="icon-down-open-big"></i></a>
		    </section>   

		    <section id="diapo4" class="bottomparalax animatedParent" style="background-image:url(img/black/bg-bottom.jpg)">
				<div class="info limitheight animated fadeInLeft"><img alt="black" src="img/black/estudiante.png" class="imglimit imgb" /></div>
		    </section> 
		</div>

		<?php require_once('includes/footer.php'); ?>


		<?php require_once('includes/footer-links.php'); ?>



	</body>	
</html>
