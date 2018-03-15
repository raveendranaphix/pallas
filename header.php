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
					<div class="logo"></div>
					<ul class="slimmenu">
						<li>
							<a class="active-menu" href="#">homepages</a>
							<ul class="submenu-back">
								<li> 
									<a class="active-menu animsition-link" href="index.html">background image</a>
								</li>
								<li>
									<a href="index2.html" class="animsition-link">background slider</a>
								</li>
								<li>
									<a href="index3.html" class="animsition-link">text slider</a>
								</li>
								<li>
									<a href="index4.html" class="animsition-link">html5 video</a>
								</li>
								<li>
									<a href="index5.html" class="animsition-link">youtube video</a>
								</li>
								<li>
									<a href="index6.html" class="animsition-link">moving image</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="about.html" class="animsition-link">about</a>
						</li>
						<li>
							<a href="#">portfolio</a>
							<ul class="submenu-back">
								<li> 
									<a href="work.html" class="animsition-link">Featured fourths</a>
								</li>
								<li>
									<a href="work1.html" class="animsition-link">No Spaced fourths</a>
								</li>
								<li>
									<a href="work2.html" class="animsition-link">Classic Grid</a>
								</li>
								<li>
									<a href="work3.html" class="animsition-link">Two Halfs</a>
								</li>
								<li>
									<a href="work4.html" class="animsition-link">Lightbox Gallery</a>
								</li>
							</ul>
						</li>
						<li> 
							<a href="blog.html" class="animsition-link">jurnal</a>
						</li>
						<li>
							<a href="#">hello</a>
							<ul class="submenu-back">
								<li> 
									<a href="contact.html" class="animsition-link">default</a>
								</li>
								<li>
									<a href="contact1.html" class="animsition-link">minimal</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="shortcodes.html" class="animsition-link">shortcodes</a>
						</li>
					</ul>
				</div>
			</div>
		</div>