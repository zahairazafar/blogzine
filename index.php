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
 * @package Blogzine
 */

get_header(); ?>

   <!-- Main Area -->
	<section id="main-area" class="main-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-12">
					<div class="blog-area">	

								<?php
								if ( have_posts() ) :
									
									/* Start the Loop */

                  
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
									
										get_template_part( 'template-parts/content', get_post_format() );

									  endwhile;

									the_posts_pagination();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif; ?>

					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!--/ End Main Area -->
<?php get_footer(); ?>

