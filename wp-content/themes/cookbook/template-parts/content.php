<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cookbook
 */

?>

<article class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-header m-2">
		<div class="p-3">
          	<?php cookbook_post_thumbnail();?>
        </div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title" style="color:orange!important">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title" tyle="color:orange!important"><a class="recipe-title" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
		<div class="author"><?php cookbook_posted_by();?></div>
	</section>
</article>
