<?php
/*
Template Name: Has Children
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
		<header>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'sub_menu', 'container' => 'nav', 'container_class' => 'inner-nav',) ); ?>
		</header><!-- .entry-header -->
		<div class="main-content row">
		<div class="four columns">
			<section>
				<?php the_content(); ?>
			</section>
		</div>
		<div class="two columns">
				<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- .entry-content -->

</article><!-- #post-## -->

