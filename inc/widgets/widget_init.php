<?php


require_once trailingslashit( get_template_directory() ) . '/inc/widgets/slider-1.php';

if ( ! function_exists( 'blogzine_load_home_widgets' ) ) :

    /**
     * Load widgets.
     *
     * @since 1.0.2
     */
    function blogzine_load_home_widgets() {


        // Instagram Feeds Widget.
        register_widget( 'Blogzine_Slider_Widget_One' );

    }

endif;

add_action( 'widgets_init', 'blogzine_load_home_widgets' );
