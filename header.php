<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Co-op Creamery Cafe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-background"></div>
<div class="page-wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'creamerycafe' ); ?></a>

	<!-- Page Header -->
	<header class="site-header" role="banner">
		
		<!-- Address | Hours -->
		<div class="pre-logo">
			<ul class="pre-logo__list">
				<li>2601 E. Franklin Ave., Minneapolis, MN 55406</li>
				<li>OPEN:  7 a.m. – 10 p.m. (8 a.m. Sat.-Sun.)</li>
			</ul>
		</div>
		<!-- End Address | Hours -->
		
		<!-- Logo -->
		<div class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Co-op Creamery Cafe" title="Co-op Creamery Cafe">
			</a>
		</div>
		<!-- End Logo -->

		<!-- Header Nav -->
		<div class="site-nav-bar clearfix">
			<nav role="navigation">
				<div class="site-nav__connect">
					<div class="contact">
						<a href="<?php echo get_permalink( 157 ); ?>">Contact</a>
					</div>
					<div class="social-links">
						<a href="https://www.facebook.com/coopcreamery">
							<svg role="img" aria-label="Facebook" version="1.1" id="Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="9.9 -12.8 640.2 638.5" enable-background="new 9.9 -12.8 640.2 638.5" xml:space="preserve"><title>Facebook</title><path class="social-links__backgrnd" fill="#248089" d="M650.1,545.9c0,44.1-35.9,79.8-80,79.8H89.9c-44.2,0-80-35.8-80-79.8V67c0-44.1,35.8-79.8,80-79.8H570c44.2,0,80,35.7,80,79.8L650.1,545.9L650.1,545.9z"/><path class="social-links__foregrnd" fill="#FFFFFF" d="M539.2,111.9c0,0-49.4,0-82.2,0c-48.8,0-103.1,20.5-103.1,91.1c0.3,24.6,0,48.2,0,74.7h-56.5v89.7h58.2v258.3h106.9v-260h70.6l6.4-88.2h-78.8c0,0,0.2-39.3,0-50.7c0-27.9,29.1-26.3,30.8-26.3c13.9,0,40.8,0,47.7,0V111.9L539.2,111.9L539.2,111.9z"/>
							</svg>
						</a>
					</div>
					<div class="social-links">
						<a href="https://twitter.com/coopcreamery">
							<svg role="img" aria-label="Twitter" version="1.1" id="Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="333 616 24 24" enable-background="new 333 616 24 24" xml:space="preserve"><title>Twitter</title><path class="social-links__backgrnd" fill="#248089" d="M357,637c0,1.7-1.3,3-3,3h-18c-1.7,0-3-1.3-3-3v-18c0-1.7,1.3-3,3-3h18c1.7,0,3,1.3,3,3V637z"/><path class="social-links__foregrnd" fill="#FFFFFF" d="M353.1,623.3c-0.6,0.2-1.2,0.4-1.8,0.5c0.6-0.4,1.1-1,1.4-1.7c-0.6,0.4-1.3,0.6-2,0.8c-0.6-0.6-1.4-1-2.3-1c-1.7,0-3.1,1.4-3.1,3.1c0,0.2,0,0.5,0.1,0.7c-2.6-0.1-4.9-1.4-6.4-3.3c-0.3,0.5-0.4,1-0.4,1.6c0,1.1,0.6,2,1.4,2.6c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.8,2.5,3.1c-0.3,0.1-0.5,0.1-0.8,0.1c-0.2,0-0.4,0-0.6-0.1c0.4,1.2,1.6,2.1,2.9,2.2c-1.1,0.8-2.4,1.3-3.9,1.3c-0.3,0-0.5,0-0.7,0c1.4,0.9,3,1.4,4.8,1.4c5.7,0,8.9-4.8,8.9-8.9c0-0.1,0-0.3,0-0.4C352.2,624.5,352.7,623.9,353.1,623.3z"/>
							</svg>
						</a>
					</div>
					<div class="social-links">
						<a href="https://instagram.com/coopcreamery/">
							<svg role="img" aria-label="Instagram" id="Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 122 122" enable-background="new 0 0 122 122" xml:space="preserve"><path class="social-links__backgrnd" fill="#258089" d="M115.3,0H6.7C3,0,0,3,0,6.7v108.5c0,3.7,3,6.7,6.7,6.7h108.5c3.7,0,6.7-3,6.7-6.7V6.7C122,3,119,0,115.3,0"/><path class="social-links__foregrnd" fill="#FFFFFF" d="M13.5,99.1c0-25.4,0-50.9,0-76.3c0.1-0.2,0.2-0.3,0.2-0.5c1.1-4.5,3.9-7.3,8.3-8.5c0.3-0.1,0.5-0.2,0.8-0.2 c25.5,0,51,0,76.5,0c0.2,0.1,0.4,0.2,0.6,0.2c4.1,1,6.9,3.5,8.2,7.5c0.2,0.6,0.3,1.2,0.5,1.8c0,25.4,0,50.8,0,76.1 c-0.1,0.2-0.1,0.5-0.2,0.7c-1,4.1-3.5,6.9-7.5,8.3c-0.6,0.2-1.2,0.3-1.8,0.5c-25.4,0-50.8,0-76.1,0c-0.2-0.1-0.3-0.1-0.5-0.2 c-4.2-0.9-7.1-3.4-8.5-7.5C13.8,100.3,13.6,99.7,13.5,99.1z M24.4,53.8c0,0.4,0,0.7,0,1c0,12.9,0,25.7,0,38.6 c0,2.7,1.5,4.2,4.2,4.2c21.6,0,43.1,0,64.7,0c2.8,0,4.2-1.5,4.2-4.2c0-12.8,0-25.7,0-38.5c0-0.3,0-0.7,0-1c-2.8,0-5.5,0-8.2,0 c1.4,5.9,1.2,11.6-0.8,17.2c-2,5.6-5.5,10.2-10.3,13.7c-4.8,3.5-10.3,5.4-16.2,5.6c-7.7,0.2-14.6-2.2-20.3-7.4 c-8.6-7.9-11.4-17.7-9-29.1C29.9,53.8,27.2,53.8,24.4,53.8z M79.2,61c0-10.1-8.1-18.2-18.2-18.3c-10.1,0-18.3,8.1-18.3,18.2 c0,10.1,8.1,18.2,18.2,18.3C71.1,79.3,79.2,71.1,79.2,61z M88.4,42.7c1.7,0,3.4,0,5.1,0c0.1,0,0.1,0,0.2,0c2.4,0,3.9-1.5,3.9-3.9 c0-3.5,0-7,0-10.5c0-2.3-1.5-3.9-3.8-3.9c-3.6,0-7.1,0-10.7,0c-2.3,0-3.8,1.5-3.8,3.8c0,3.6,0,7.1,0,10.7c0,2.3,1.5,3.7,3.8,3.8 C84.9,42.7,86.6,42.7,88.4,42.7z"/>
							</svg>
						</a>
					</div>
				</div>

					<?php 
					  wp_nav_menu(array(
						'menu' => 'Primary Menu', 
						'container_class' => 'site-nav',
					  )); 
					?>
			</nav>
		</div>

	</header><!-- #masthead -->

	<div class="content-wrapper" class="site-content">
