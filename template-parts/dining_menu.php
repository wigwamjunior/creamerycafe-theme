<?php
/*
Template Name: Menu
*/
?>

<?php get_header(); ?>
<div class="container" class="content-area">
	<main role="main">
		<?php while ( have_posts() ) : the_post(); ?>
					
			<header>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>
			
			<!-- LEAD content -->
			<div class="main-content row">
				<div class="six columns">
					<section>
						<?php the_content(); ?>
					</section>
				</div>
			</div>
			<!-- END LEAD content -->
		<?php endwhile; // End of the loop. ?>

		<nav class="inner-nav">
			<ul>
				<li><a href="#tab1">Day</a></li> <!-- Tabs correspond to categories that food group posts live in -->
				<li><a href="#tab2">In Between <span class="menu__hours">(3 to 5 p.m.)</span></a></li> <!-- Tabs correspond to categories that food group posts live in -->
				<li><a href="#tab3">Evening <span class="menu__hours">(5 to 7 p.m.)</span></a></li> <!-- Tabs correspond to categories that food group posts live in -->
			</ul>
		</nav>
		
		<div id="tab1">
			
			<!-- Find the posts associated with the 'Day' category and display -->
			<?php
				$loop = new WP_Query( array( 'post_type' => 'food_group', 'posts_per_page' => 20, 'category_name' => 'day' ) );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
					$format = get_post_format();
					echo ($format);
					/*
					 * Fetch the content-menu template for display the food group posts
					 */
					get_template_part( 'template-parts/content', 'menu' );
				?>
				
				<!-- Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
				
			<?php endwhile; ?>
			
		</div>
		
		<div id="tab2">
			
			<!-- Find the posts associated with the 'In Between' category and display -->
			<?php
				$loop = new WP_Query( array( 'post_type' => 'food_group', 'posts_per_page' => 20, 'category_name' => 'in-between' ) );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
					$format = get_post_format();
					echo ($format);
					/*
					 * Fetch the content-menu template for display the food group posts
					 */
					get_template_part( 'template-parts/content', 'menu' );
				?>
				
				<!-- Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
				
			<?php endwhile; ?>
			
		</div>
		
		<div id="tab3">
			
			<!-- Find the posts associated with the 'Evening' category and display -->
			<?php
				$loop = new WP_Query( array( 'post_type' => 'food_group', 'posts_per_page' => 20, 'category_name' => 'evening' ) );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php
					$format = get_post_format();
					echo ($format);
					/*
					 * Fetch the content-menu template for display the food group posts
					 */
					get_template_part( 'template-parts/content', 'menu' );
				?>
				
				<!-- Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
				
			<?php endwhile; ?>
			
		</div>
		
	</main><!-- #main -->
		
</div>
	<!-- END Container -->

<?php get_footer(); ?>
