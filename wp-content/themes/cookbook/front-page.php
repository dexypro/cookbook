<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cookbook
 */

get_header();?>

	<main id="primary" class="site-main">
		<div id="main-banner">
			<img src="<?php echo(get_template_directory_uri()); ?>/images/banner.jpg" alt="Welcome to Cookbook">
		</div>

	<!-- Latest Recipies -->
		<section id="latest-recipes" class="wrapper">
			<h2>Latest Recipes</h2>
			<div class="container p-0">
				<div class="row mt-5">
					<?php 
						$args = array(
							'post_type' => 'recipes',
							'posts_per_page' => 7,
							'orderby'=>'date',
						);

						$loop = new WP_Query( $args ); ?>
						  
						<?php 
						if ( $loop->have_posts() ) :
							$i = 0;
							$not_in_next_one = array();
							while ($loop -> have_posts()) : $loop -> the_post(); 
								if($i == 1):
									$i++;
									?>
									<div class="col-xs-12 col-sm-6 col-lg-6 spec mb-4">
										<a href="<?php the_permalink() ?>"><?php cookbook_post_thumbnail();?></a>
										<h3 class="special-text">
								   			<a class="front-posts-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										</h3>
									</div>
						<?php 
								elseif($i==0): $i++; ?>
									<div class="col-xs-12 col-sm-6 col-lg-3">
										<a href="<?php the_permalink() ?>"><?php cookbook_post_thumbnail();?></a>
										<h3>
								   			<a class="front-posts-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										</h3>
										<?php cookbook_posted_by();?>
									</div>
						<?php 
								else : ?>
									<div class="col-xs-12 col-sm-6 col-lg-3">
										<a href="<?php the_permalink() ?>"><?php cookbook_post_thumbnail();?></a>
										<h3>
								   			<a class="front-posts-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										</h3>
										<?php cookbook_posted_by();?>
									</div>
							<?php 
								endif;
							endwhile;
						endif; ?>
					<?php wp_reset_postdata();?>
				</div>
			</div>
		</section>
		



	<!-- Meals Information -->
		<section id="meals-info">
			<div class="wrapper">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-sm-12 col-lg-6">
							<div class="row">
								<div class="col">
									<img src="<?php echo(get_template_directory_uri()); ?>/images/big_slika.jpg" alt="Hrana" class="shadowy">
								</div>
							</div>
							<div class="row justify-space-between">
								<div class="col-6">
									<img src="<?php echo(get_template_directory_uri()); ?>/images/mala_left.jpg" alt="mala slika" class="shadowy">
								</div>
								<div class="col-6">
									<img src="<?php echo(get_template_directory_uri()); ?>/images/mala_right.jpg" alt="mala slika" class="shadowy">
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6">
							<div class="row">
								<h2>Lorem ipsum dolor sit amet</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
							<div class="row">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Blog section -->
		<div class="wrapper container" id="posts">
			<h2>Blog</h2>
			<section id="blog" class="row">
			    <?php 
					$the_query = new WP_Query( 'posts_per_page=3' ); ?>
				<?php 
					while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
							<div>
								<a href="<?php the_permalink() ?>"><?php cookbook_post_thumbnail();?></a>
							</div>
						  	<h3>
						   		<a class="front-posts-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h3>
							<?php cookbook_posted_by();?>
						</div>
				<?php
					endwhile;
					wp_reset_postdata(); ?>
			</section>		
		</div>
	</main>
<?php get_footer(); ?>
