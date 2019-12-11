<?php
/**
 * Right sidebar check.
 *
 * @package AgenciaOpen
 */
?>

<?php $sidebar_pos = get_theme_mod( 'AgenciaOpen_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <?php get_sidebar( 'right' ); ?>

<?php endif; ?>
