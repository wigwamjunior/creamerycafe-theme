<?php
/*
Template Name: Menu
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
					</div>
					
					<!-- Menu Day -->
					<div>
						<h2>Day</h2>
						<hr>
						<?php 
						// check for rows
						if( have_rows('eggs_day') ): ?>
							<h3>Eggs</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('eggs_day') ): the_row();

									// display each item
									?>
									
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>

								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('grains_day') ): ?>
							<h3>Grains</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('grains_day') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('sandwiches_day') ): ?>
							<h3>Sandwiches</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('sandwiches_day') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('plates_day') ): ?>
							<h3>Plates</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('plates_day') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('desserts_day') ): ?>
							<h3>Desserts</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('desserts_day') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- END Menu Day -->
				
					<!-- Menu Evening -->
					<div>
						<h2>Evening</h2>
						<hr>
						<?php 
						// check for rows
						if( have_rows('salad_evening') ): ?>
							<h3>Salads</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('salad_evening') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('small_plates') ): ?>
							<h3>Small Plates</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('small_plates') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('plates_evening') ): ?>
							<h3>Plates</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('plates_evening') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						
						<?php 
						// check for rows
						if( have_rows('desserts_evening') ): ?>
							<h3>Desserts</h3>
							<div class="row">
								<?php 
								// loop through rows
								while( have_rows('desserts_evening') ): the_row();

									// display each item
									?>
									<div class="two columns">
										<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
										<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
										<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
					<!-- END Menu Evening -->
							<div>
							
							<?php if ( is_active_sidebar( 'dining-menu' ) ) { ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'dining-menu' ); ?>
	</ul>
<?php } ?>

			</div>
				
				</div>
				<!-- .entry-content -->

			</article><!-- #post-## -->

			
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		
	</div>
	<!-- END Container -->

<?php get_footer(); ?>
