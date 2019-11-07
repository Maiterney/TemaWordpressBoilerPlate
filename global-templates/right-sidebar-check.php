<?php
/**
 * Right sidebar check.
 *
 * @package master12
 */
?>

<?php $sidebar_pos = get_theme_mod( 'master12_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <?php get_sidebar( 'right' ); ?>

<?php endif; ?>
