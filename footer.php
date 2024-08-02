<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogzine
 */

?>
<?php if(is_front_page() ): ?>
	<?php dynamic_sidebar('bottom'); ?>
<?php endif; ?>
	
	<?php 
	 	get_template_part('footer-layouts/footer','1'); 
	  ?>
	
<?php wp_footer(); ?>
</body>
</html>