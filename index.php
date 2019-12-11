<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AgenciaOpen
 */

get_header();
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<section class="main home">
	<div>
		<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
			<main class="site-main" id="main">

			</main>
		<?php AgenciaOpen_pagination(); ?>
	</div>
	<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

</section>
<?php get_footer(); ?>
