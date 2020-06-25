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

	<main id="primary" class="site-main">
		<div id="blog-section" class="row">
			<h3 class="container">Recipes</h3>
		</div>
		<div class="wrapper">
			<div class="row">
					<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
					get_the_title('<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>

					<?php
				
					while ( have_posts() ) :
						the_post();

						
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>	
		</div>
			
		

	</main>

<?php

get_footer();
