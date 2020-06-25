<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cookbook
 */

?>

	<footer>
		<div class="wrapper">
			<div class="row wrapper">
			<div class="col span-1-of-3">
				<h1 class="logo-footer">Cookbook</h1>
			</div>
			<nav>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav>
		</div>
		<div class="line"></div>
		<div class="row wrapper">
			<div class="col span-1-of-3">
				<h3>&copy; 2020 COOKBOOK</h3>	
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  			crossorigin="anonymous">
  	</script>
</body>
</html>
