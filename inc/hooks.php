<?php

if ( ! function_exists( 'blogzine_social_links' ) ) :

function blogzine_social_links() {

							echo'<ul class="social">';

							if(get_theme_mod('blogzine_facebook_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_facebook_link_url')); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_twitter_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_twitter_link_url')); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_linkedin_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_linkedin_link_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_pinterest_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_pinterest_link_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_google_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_google_link_url')); ?>"><i class="fa fa-google"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_youtube_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_youtube_link_url')); ?>"><i class="fa fa-youtube"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_whatsapp_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_whatsapp_link_url')); ?>"><i class="fa fa-whatsapp"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_wechat_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_wechat_link_url')); ?>"><i class="fa fa-wechat"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_youtube_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_youtube_link_url')); ?>"><i class="fa fa-youtube"></i></a></li>
							<?php endif;
							if(get_theme_mod('blogzine_skype_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('blogzine_skype_link_url')); ?>"><i class="fa fa-skype"></i></a></li>
							<?php endif;								


							echo '</ul>';
					}
							

endif;