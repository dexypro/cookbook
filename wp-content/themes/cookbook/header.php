<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cookbook
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="Coookbook is a custom WordPress theme made as a task for job application">
	<title>Cookbook</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="style.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site navigation-bar">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cookbook' ); ?></a>

	<header>
		<div class="wrapper">
			<h1 class="logo">Cookbook</h1>
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
	</header>
</div>
<div id="content" class="site-content">