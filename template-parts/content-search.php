<?php
/**
 * Template part for displaying results in search pages
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
									<?php if ( 'post' === get_post_type() ) : ?>
											<?php blogzine_posted_on(); ?>	
										<?php
										endif; ?>
									<?php the_title( sprintf( '<h2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
									<?php blogzine_posted_by(); ?>
								</div>
								<?php
										the_excerpt();
									?>
							</div>
							<!-- Blog Bottom -->
							<div class="blog-bottom">
								<div class="bottom-inner">
									
									<?php blogzine_entry_footer(); ?>
									<?php blogzine_entry_comments(); ?>
								</div>
								
							</div>
						</div>
</article>						

