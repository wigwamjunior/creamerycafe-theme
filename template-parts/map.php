<?php
/*
Template Name: Map
*/
?>

<?php get_header(); ?>

<?php list_child_pages(); ?>

	<div class="container" class="content-area">
		<main role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="main-content">
					<div class="row">
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
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
						<!-- END Supplement -->
					</div>
				
				
					
				</div>
				<!-- .entry-content -->

			</article><!-- #post-## -->
			
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div>
	<!-- END Container -->

<?php get_footer(); ?>
