<!DOCTYPE html>
<html>
	<head>
		<title>Scribe</title>
		<?php require_once('includes/head.php'); ?>
		<!-- CSS -->  
	</head>
	<body class="ovhiden">	
		<?php $section = "home"; ?>	
		<div class="fix"><?php require_once('includes/header.php'); ?></div>

        	<section id="scene" class="homeslider">
		        <div class="swiper-wrapper">
		            <!--div class="swiper-slide" style="background-image:url(img/home/bg-black.jpg)">  
		            	<div  class="wrapper slide">
			            	<article class="caption">
			            		<h1>Black</h1>
			            		<p>La nueva generación del <span>cuaderno.</span></p>
			            		<a href="black.php" class="btn">Ver más</a>
			            	</article>
				      		<div class="book layer" data-depth="0.05"><img alt="black" src="img/home/black.png" /></div>	
				      		<div class="miss1 layer" data-depth="0.2" style="background-image:url(img/home/miss1.png)"></div>
				      		<div class="miss2 layer" data-depth="0.2" style="background-image:url(img/home/miss2.png)"></div>	
		            	</div>
		            </div-->
		            <div class="swiper-slide" style="background-image:url(img/home/bg-black.jpg)">
		            	<div class="wrapper slide">
			            	<article class="caption">
			            		<h1>Black</h1>
			            		<p>La nueva generación del <span>cuaderno.</span></p>
			            		<a href="black.php" class="btn">Ver más</a>
			            	</article>
				      		<div class="book"><img alt="black" src="img/home/black.png" /></div>	
		            	</div>
		            	<div class="overlay"></div>
		            </div>
		            <div class="swiper-slide" style="background-image:url(img/home/bg-incolors.jpg)">
		            	<div class="wrapper slide">
			            	<article class="caption">
			            		<h1 class="inc">In<span>colors</span></h1>
			            		<p>La nueva generación del <span>cuaderno.</span></p>
			            		<a href="incolors.php" class="btn">Ver más</a>
			            	</article>
				      		<div class="book"><img alt="incolors" src="img/home/incolors.png" /></div>	
		            	</div>
		            	<div class="overlay"></div>
		            </div>
		            <div class="swiper-slide" style="background-image:url(img/home/bg-comun.jpg)">
		            	<div class="wrapper slide">
			            	<article class="caption">
			            		<h1>Básico</h1>
			            		<p>La nueva generación del <span>cuaderno.</span></p>
			            		<a href="black.php" class="btn">Ver más</a>
			            	</article>
				      		<div class="book"><img alt="black" src="img/home/black.png" /></div>	
		            	</div>
		            	<div class="overlay"></div>
		            </div>
		        </div>
		        <div class="pagin"></div>
		    </section>


		<div class="fix"><?php require_once('includes/footer.php'); ?></div>


		<?php require_once('includes/footer-links.php'); ?>

		 <script>

  // Nothing new here...it's all in the CSS!
  var scene = document.getElementById('scene');
  var parallax = new Parallax(scene);

  </script>
	</body>	
</html>
