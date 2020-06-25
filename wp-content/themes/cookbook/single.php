<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cookbook
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div id="blog-section" class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 front-posts">
				<h3 class="single-cpt wrapper capitalize" style="color: orange;"><?php the_title(); ?></h3>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bigger-img">
				<?php cookbook_post_thumbnail();?>
			</div>
		</div>
		<div class="wrapper">
			<?php
				while ( have_posts() ) :
					the_post();
				endwhile; // End of the loop.
			?>
			<div class="row mt-5 p-5">
				<p>	
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</main><!-- #main -->
<?php get_footer();
