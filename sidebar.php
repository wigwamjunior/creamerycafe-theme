<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Co-op Creamery Cafe
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<aside class="supplement">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
</div><!-- #secondary -->
