<style>
#preloader {position:fixed;top:0;left:0;right:0;bottom:0;background-color:#fff;z-index:999999;}
#status {width:207px;height:207px;position:absolute;left:50%;top:50%;background-image:url(img/loading.gif);background-repeat:no-repeat;background-position:center top;margin:-105px 0 0 -105px;}
</style>
<div id="preloader"><div id="status"></div></div>

<div class="hamburger">
	<div class="hamburger-inner">
		<div class="bar bar1"></div>
		<div class="bar bar2"></div>
		<div class="bar bar3"></div>
		<div class="bar bar4"></div>
	</div>
</div>
<header class="header">
	<div class="wrapper">
		<a href="home.php" class="logo" title="Scribe">
			<img src="img/global/scribe.png" alt="Scribe">
		</a>
		<nav class="menu-nav">
			<ul class="menu">
				<li><a href="home.php" <?php if ( $section == 'home') : ?> class="active" <?php endif; ?>>Inicio</a></li>
				<li><a href="cuadernos.php" <?php if ( $section == 'cuadernos') : ?> class="active" <?php endif; ?>>Cuadernos <span>y más...</span></a></li>
				<li><a href="papel.php" <?php if ( $section == 'papel') : ?> class="active" <?php endif; ?>>Papel</a></li>
				<li><a href="#" <?php if ( $section == 'noticias') : ?> class="active" <?php endif; ?>>Noticias <span>y más...</span></a></li>
			</ul>
		</nav>
	</div>
	

	
</header>


