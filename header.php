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
				<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Co-op Creamery Cafe">
			</a>
		</div>
		<!-- End Logo -->

		<!-- Header Nav -->
		<div class="site-nav">
			<nav role="navigation">
				<div class="site-nav__connect">
					<div class="contact">
						<a href="mailto:coopcreamery@seward.coop">Contact</a>
					</div>
					<div class="social-links">
						<a href="#"><svg role="img" aria-label="Twitter" version="1.1" id="Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
								 viewBox="333 616 24 24" enable-background="new 333 616 24 24" xml:space="preserve">
								<path class="social-links__backgrnd" fill="#248089" d="M357,637c0,1.7-1.3,3-3,3h-18c-1.7,0-3-1.3-3-3v-18c0-1.7,1.3-3,3-3h18c1.7,0,3,1.3,3,3V637z"/>
								<path class="social-links__foregrnd" fill="#FFFFFF" d="M353.1,623.3c-0.6,0.2-1.2,0.4-1.8,0.5c0.6-0.4,1.1-1,1.4-1.7c-0.6,0.4-1.3,0.6-2,0.8c-0.6-0.6-1.4-1-2.3-1c-1.7,0-3.1,1.4-3.1,3.1c0,0.2,0,0.5,0.1,0.7c-2.6-0.1-4.9-1.4-6.4-3.3c-0.3,0.5-0.4,1-0.4,1.6c0,1.1,0.6,2,1.4,2.6c-0.5,0-1-0.2-1.4-0.4c0,0,0,0,0,0c0,1.5,1.1,2.8,2.5,3.1c-0.3,0.1-0.5,0.1-0.8,0.1c-0.2,0-0.4,0-0.6-0.1c0.4,1.2,1.6,2.1,2.9,2.2c-1.1,0.8-2.4,1.3-3.9,1.3c-0.3,0-0.5,0-0.7,0c1.4,0.9,3,1.4,4.8,1.4c5.7,0,8.9-4.8,8.9-8.9c0-0.1,0-0.3,0-0.4C352.2,624.5,352.7,623.9,353.1,623.3z"/>
							</svg>
						</a>
					</div>
					<div class="social-links">
						<a href="#"><svg role="img" aria-label="Facebook" version="1.1" id="Icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="9.9 -12.8 640.2 638.5" enable-background="new 9.9 -12.8 640.2 638.5" xml:space="preserve"><path class="social-links__backgrnd" fill="#248089" d="M650.1,545.9c0,44.1-35.9,79.8-80,79.8H89.9c-44.2,0-80-35.8-80-79.8V67c0-44.1,35.8-79.8,80-79.8H570c44.2,0,80,35.7,80,79.8L650.1,545.9L650.1,545.9z"/><path class="social-links__foregrnd" fill="#FFFFFF" d="M539.2,111.9c0,0-49.4,0-82.2,0c-48.8,0-103.1,20.5-103.1,91.1c0.3,24.6,0,48.2,0,74.7h-56.5v89.7h58.2v258.3h106.9v-260h70.6l6.4-88.2h-78.8c0,0,0.2-39.3,0-50.7c0-27.9,29.1-26.3,30.8-26.3c13.9,0,40.8,0,47.7,0V111.9L539.2,111.9L539.2,111.9z"/>
							</svg></a>
						</ul>
					</div>
				</div>
				
					<?php wp_page_menu( array(
						'depth' => 1,
						'sort_column' => 'menu_order',
						'menu_class' => 'site-nav__links',
						'exclude' => 10) );
					?>

			</nav>
		</div>

	</header><!-- #masthead -->

	<div class="content-wrapper" class="site-content">
