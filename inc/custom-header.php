<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Blogzine
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses blogzine_header_style()
 */
function blogzine_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'blogzine_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1440,
		'height'                 => 310,
		'flex-height'            => true,
		'wp-head-callback'       => 'blogzine_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'blogzine_custom_header_setup' );

if ( ! function_exists( 'blogzine_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see blogzine_custom_header_setup().
	 */
	function blogzine_header_style() {

		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
			.site-header .logo a,
			.site-header .logo p {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			
			.site-header .logo a,
			.site-header .logo p{
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
add_action('wp_head','blogzine_header_style');
endif;

/**
 * Blogzine Theme Custom CSS
 *
 * @package 
 */
if( !function_exists( 'blogzine_custom_css' ) ) :
	/*
	 * Function For Custom CSS
	 *
	 *
	 */
	function blogzine_custom_css() { ?>
					
						<style type="text/css">	
						<?php if(has_header_image()): ?>
							#site-header{
								background:url(<?php echo esc_url(get_header_image()); ?>);
							}
							<?php else: ?>
							#site-header{
								background:url('<?php echo esc_url(get_template_directory_uri());?>/scorpionthemes/img/header-image.png');
								background-size: cover;
							}
						<?php endif; ?>
						</style>
		<?php }
endif;
add_action( 'wp_head', 'blogzine_custom_css' );



