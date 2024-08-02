<!-- Footer -->
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<!-- Single Widget -->
					<div class="col-lg-4 col-md-4 col-12">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="col-lg-4 col-md-4 col-12">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="col-lg-4 col-md-4 col-12">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Copyright -->
						<div class="copyright">
							<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blogzine' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'blogzine' ), 'WordPress' );
						?></a>
						<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s', 'blogzine' ), 'Blogzine', '<a href="http://scorpionthemes.com">Scorpion Themes</a>' );
						?></p>
						</div>
						<!--/ End Copyright -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<?php if(get_theme_mod('blogzine_footer_social_enable')): ?>
						<!-- Social -->
						<?php blogzine_social_links(); ?>
						<!--/ End Social -->
						<?php endif; ?>
					</div>
				</div>
            </div>
		</div>	
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End footer -->