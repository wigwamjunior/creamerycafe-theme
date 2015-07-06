
<?php get_header(); ?>

<?php list_child_pages(); ?>

	<div class="container" class="content-area">
		<main role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div>
	<!-- END Container -->
		

<?php get_footer(); ?>
