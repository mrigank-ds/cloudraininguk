<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

	<?php
endif;
?>

<?php if (is_active_sidebar('footer-menus-section-widget-area')): ?>
        <div class="footerMenus">
            <?php dynamic_sidebar('footer-menus-section-widget-area'); ?>
        </div>
    <?php endif; ?>
