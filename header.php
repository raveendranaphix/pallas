<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pallas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="animsition">
	
		<div id="menu-wrap" class="menu-back cbp-af-header">
			<div class="container">
				<div class="sixteen columns">
					<a href="<?php echo home_url( '/' ); ?>">
						<div class="logo" style="<?php echo 'background: url(' . pallas_get_logo_url() . ') no-repeat center center; background-size: cover;'; ?>"></div>
					</a>
						<?php
							wp_nav_menu( array(
   								'theme_location'  => 'menu-1',
   								'depth'			  => 3, 
								'container'		  => '',
								'container_class' => '',
								'container_id'	  => '',
								'menu_class'	  => 'slimmenu slimmenu-2',
    							'walker'		  => new Pallas_Nav_Walker(),
    							'items_wrap'	  => '<ul class="%2$s">%3$s</ul>'
							) );
						?>					
				</div>
			</div>
		</div>