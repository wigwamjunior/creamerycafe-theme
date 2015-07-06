<?php
/*

*/
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="main-content row">
		<div class="four columns">
			<?php if( have_rows('menus') ): ?>

				<?php while( have_rows('menus') ): the_row(); 
					
					<h3><?php the_sub_field('menu_type'); ?></h3>
					<$php
					if( have_rows('menu_items') ): ?>
					
						while( have_rows('menu_items') ): the_row();
						// vars
						$name = get_sub_field('item_name');
						$description = get_sub_field('item_description');
						$price = get_sub_field('item_price');

					?>

					<div class="item">
						<strong class="menu__item-title"><?php echo $name; ?></strong>
						<p class="menu__item-copy"><?php echo $description; ?></p>
						<span class="menu__item-price"><?php echo $price; ?></span>
					</div>
		
				<?php endwhile; ?>

			<?php endif; ?>
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
			<!-- END Aside -->
	</div>
	<!-- .entry-content -->

</article><!-- #post-## -->

<?php get_footer(); ?>
