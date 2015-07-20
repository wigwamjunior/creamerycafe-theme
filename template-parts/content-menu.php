<?php
/**
 * Template part for displaying posts.
 *
 * @package Co-op Creamery Cafe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<!-- get the food group name -->
		<?php the_title( sprintf( '<h4 class="entry-title">', esc_url( get_permalink() ) ), '</h4>' ); ?> 
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'creamerycafe' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
		<?php 
			// check for rows
			if( have_rows('items') ): ?>
				<div class="row">
					<?php 
					// loop through rows
					while( have_rows('items') ): the_row();

						// display each item
						?>
						<div class="two columns">
							<span class="food__item-name"><?php the_sub_field('item_name'); ?></span>
							<p class="food__item-copy"><?php the_sub_field('item_description'); ?></p>
							<span class="food__item-price"><?php the_sub_field('item_price'); ?></span>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php creamerycafe_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
