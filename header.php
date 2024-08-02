<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogzine
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<?php 
	 	get_template_part('header-layouts/header','1'); 
	 ?>
	<!--/ End Header Area -->

	<?php if(!is_front_page() ): ?>
		<!-- Start Breadcrumbs -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if(is_archive()):
						the_archive_title( '<h2>', '</h2>' );
					else: ?>
					<h2><?php the_title(); ?></h2>
					<?php endif; ?>
					<ul>
						<?php breadcrumb_trail(); ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->
<?php endif; ?>

<?php if(is_front_page() ): ?>
	<?php if( is_active_sidebar('top')): dynamic_sidebar('top'); 
	 endif; ?>
<?php endif; ?>
