<?php
/*
Template Name: Menu New
*/
?>

<?php get_header(); ?>
<div class="container" class="content-area">
	<nav class="inner-nav">
		<ul>
			<li><a href="#tab1">Day</a></li>
			<li><a href="#tab2">Evening</a></li>
		</ul>
	</nav>
	<div id="tab1">
		<?php if ( have_posts() ) : ?>
			
			<main role="main">
				<?php
					$loop = new WP_Query( array( 'post_type' => 'menu', 'posts_per_page' => 99, 'category_name' => 'day' ) );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<?php
						$format = get_post_format();
						echo ($format);
						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'menu' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			
		</main><!-- #main -->
	</div>
	
	<div id="tab2">
		<?php if ( have_posts() ) : ?>
		
			<main role="main">
				<?php
					$loop = new WP_Query( array( 'post_type' => 'menu', 'posts_per_page' => 10, 'category_name' => 'evening' ) );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<?php
						$format = get_post_format();
						echo ($format);
						
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'menu' );
					?>
					<!-- Restore original Post Data -->
					<?php wp_reset_postdata(); ?>
					
				<?php endwhile; ?>
		
				<?php the_posts_navigation(); ?>
			
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			
		</main><!-- #main -->
	</div>

		
</div>
	<!-- END Container -->

<?php get_footer(); ?>
