<?php $arguments = array(
				'cat'	=> -1,
				'posts_per_page' => 5,
			); 

			$query = new WP_Query( $arguments );

			if( $query->have_posts() ) :
			?> 
					<!-- Big Slider -->
				    <section id="big-slider" class="big-slider">
				        <div class="slider-active">
                            	<?php
                            	$default_image = array( '1' => '1.png', '2' => '2.png', '3' => '3.png', '4' => '4.png','5' => '5.png', '6' => '6.png', '7' => '1.png', '8' => '2.png' );
                            		$i = 1;
                            		while( $query->have_posts() ) :
                            			$query->the_post();
                            			set_query_var( 'default_image', $default_image );
                                		set_query_var( 'i', $i );
                            	?>
                            	<!-- Single Slider -->
                            	<?php if( has_post_thumbnail() ):
                            	$featured_img_url = get_the_post_thumbnail_url();?>
								<div class="single-slider" style="background-image:url(<?php echo esc_url($featured_img_url); ?>);background-size: cover;">
								<?php else: ?>
								<?php $image = get_template_directory_uri() . '/scorpionthemes/img/' . $default_image[$i]; 
								 ?>
								<div class="single-slider" style="background-image:url('<?php echo esc_url( $image ); ?>');background-size: cover;">
								<?php endif; ?>

									<div class="container">
										<div class="row">
											<div class="col-lg-12 col-12">
												<div class="welcome-text">	
													<div class="inner-text">	
														<span class="base"><?php the_category( ', ' ); ?></span>
														<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
														<span class="date"><?php echo get_the_date(); ?></span>
														<a href="<?php the_permalink(); ?>" class="btn primary"><?php esc_html_e('Read More', 'blogzine'); ?></a>
													</div>
												</div>
											</div>
										</div>
									</div>
					            </div>
					            <!--/ End Single Slider -->
					            <?php
                                $i++; endwhile;
                                	wp_reset_postdata();
                                ?>
                    </div>
                </section>

<?php endif; ?>