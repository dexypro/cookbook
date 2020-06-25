<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cookbook
 */

get_header();
?>

	<main id="primary" class="site-main wrapper">
		<div id="blog-section" class="row">
			<h3 class="container"><?php the_archive_title()?></h3>
		</div>
		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-5">
				
			</header>
		<div class="row">
			
		</div>
			<?php
			
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>

<?php

get_footer();
