<?php
/**
 * Template part for displaying posts.
 *
 * @package Co-op Creamery Cafe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php creamerycafe_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
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
							<strong class="menu__item-name"><?php the_sub_field('item_name'); ?></strong>
							<p class="menu__item-copy"><?php the_sub_field('item_description'); ?></p>
							<span class="menu__item-price"><?php the_sub_field('item_price'); ?></span>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'creamerycafe' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php creamerycafe_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
