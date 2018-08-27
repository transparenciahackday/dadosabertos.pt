<?php
	include 'layout/_functions.php';

	$page_title = "Dados Abertos";
	$current_page = "homepage";

	include 'layout/_head.php';
?>
  <body>

	<?php
		include 'layout/_header.php';
	?>

	<main>

		<?php
			include 'layout/_intro_homepage.php';

			include 'layout/_repos_homepage.php';
		?>

	</main>

<?php
	include 'layout/_footer.php';
?>
