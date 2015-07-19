<?php
/*
Template Name: Front page
*/

/**
 * Bxslider
 */
function bxslider_load() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, null );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'creamerycafe-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'creamerycafe-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '', 'all' );
}
add_action( 'wp_enqueue_scripts', 'bxslider_load' );
?>

<?php get_header(); ?>

	<!-- Main Content Area -->
		<!-- Slideshow -->
		<script>$(document).ready(function(){
		$('.bxslider').bxSlider();});</script>
		<ul class="bxslider">
			<?php
				$rows = get_field('slideshow');
				if($rows) {

					foreach($rows as $row) {
						// retrieve size 'large' for background image
						$image = $row['image'];

						$output = "<li><img src=". $image .">\n";
						$output .= "</li>\r\n\n";

						echo $output;
					}
				}
			?>
		</ul>
		<div class="slideshow__caption-box clearfix">
			<h1 class="slideshow__title"><?php the_field('intro_headline'); ?></h1>
			<p class="slideshow__copy"><?php the_field('intro_paragraph'); ?></p>
		</div>
		<!-- End Slideshow -->
		

		<!-- Section Details -->
		<footer class="footer--details">
			<div class="container footer--details__box">
				
				<ul class="footer--details__list">
					<li>
						<h3 class="uppercase">Hours</h3>
						<?php the_field('hours'); ?>
					</li>
					<li>
						<h3 class="uppercase">Contact</h3>
						<?php the_field('contact'); ?>
					</li>
					<li>
						<h3 class="uppercase">Location</h3>
						<?php the_field('location'); ?>
					</li>
				</ul>
				
			</div>
		</footer>
		<!-- End Section Details -->

<?php get_footer(); ?>
