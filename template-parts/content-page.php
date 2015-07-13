<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Co-op Creamery Cafe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php list_child_pages(); ?>
	</header><!-- .entry-header -->
	<div class="main-content row">
		<div class="four columns">
			<section>
				<?php the_content(); ?>
			</section>
		</div>
		<div class="two columns">
				<?php get_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
	<!-- .entry-content -->

</article><!-- #post-## -->

