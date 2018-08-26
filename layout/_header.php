<header>
	<!-- Navigation -->
	<nav class="navbar navbar-default" role="navigation" id="nav_main">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="licencas.php"<?php active_page($current_page, "licenças") ?>>Licenças</a></li>
				<li><a href="perguntas.php"<?php active_page($current_page, "perguntas") ?>>Perguntas Frequentes</a></li>
				<li><a href="glossario.php"<?php active_page($current_page, "glossário") ?>>Glossário</a></li>
			</ul>
		</div>
	</nav>
	<!-- Title -->
	<div class="container" id="title">
		<div class="homepage">
			<img src="img/dd_flag.png" class="flag" />
			<a href="index.php">
				<h1><span>D</span>ados <span>A</span>bertos</h1>
				<?php if ($current_page == "homepage") : ?>
				<h2>em Portugal</h2>
				<?php endif; ?>
			</a>
			<?php if ($current_page == "homepage") : ?>
			  <?php echo html_from_markdown('homepage-slogan.md'); ?>
			<?php endif; ?>
		</div>
	</div>
</header>
