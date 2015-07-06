<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Co-op Creamery Cafe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="main-content row">
		<div class="four columns">
			<header>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<section>
				<?php the_content(); ?>
			</section>
		</div>
		
		<!-- Supplement -->
		<div class="two columns">		
			<?php
				if (get_field('supplement'))
					{ 
					echo '<aside><div class="supplement" role="complementary">' . get_field('supplement') . '</div></aside>';
				}
			?>
		</div>
		<!-- END Supplement -->
		
	</div>
	<!-- .entry-content -->

</article><!-- #post-## -->

