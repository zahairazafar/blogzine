<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogzine
 */
$default_image = array( '1' => '1.png', '2' => '2.png', '3' => '3.png', '4' => '4.png','5' => '5.png', '6' => '6.png', '7' => '1.png', '8' => '2.png' );
?>
				<div class="single-blog">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- Blog Head -->
						<div class="blog-head">
								<div class="heading">
									<?php if ( 'post' === get_post_type() ) : ?>
											<?php blogzine_posted_on(); ?>	
										<?php
										endif; ?>
									<?php if( is_single() ) : ?>
									    <h2><?php the_title(); ?></h2>
									<?php else : ?>
									    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<?php endif; ?>
									<?php blogzine_posted_by(); ?>
								</div>
								<?php if(has_post_thumbnail()): ?>
								<?php blogzine_post_thumbnail('blogzine-list-thumb'); ?>
								<?php else: 
									$j=rand(1, 8);
								?>
									
									<?php $image = get_template_directory_uri() . '/scorpionthemes/img/' .$default_image[$j]; ?>
									<a href="<?php the_permalink(); ?>" class="post-thumbnail">
            							<img src="<?php echo esc_url( $image ); ?>" alt="<?php the_title(); ?>">
        							</a>
								<?php endif; ?>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn primary"><i class="fa fa-plus"></i>
							<?php esc_html_e('Read More','blogzine'); ?></a>
						</div>
							<!-- Blog Bottom -->
							<div class="blog-bottom">
								<div class="bottom-inner">
									
									<?php blogzine_entry_footer(); ?>
									<?php blogzine_entry_comments(); ?>
								</div>
								
							</div>
						</article>	
					</div>
					


