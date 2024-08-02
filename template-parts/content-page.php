<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogzine
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-blog">
							<!-- Blog Head -->
						<div class="blog-head">
								<div class="heading">
									<?php the_title( '<h2>', '</h2>' ); ?>
								</div>
								<?php blogzine_post_thumbnail(); ?>
								<?php
									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogzine' ),
										'after'  => '</div>',
									) );
								?>
							</div>
							
		</div>
</article>	
