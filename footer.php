<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AgenciaOpen
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'AgenciaOpen_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 p-0">

				<footer class="site-footer" id="colophon">

					<div class="site-info d-md-flex flex-md-row flex-column align-items-center">

							<div class="col-md-6 col-12">
                                <p class="m-0">Copyright © <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Todos os Direitos Reservados. </p>
				            </div>
				            
				            <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center">
				                <a href="https://www.agenciaopen.com" target="_blank">
				                    <img src="https://www.agenciaopen.com/wp-content/themes/Open/build/img/logo-open-footer.png" alt="Desenvolvido por: Agência AgenciaOpen" title="Desenvolvido por: Agência AgenciaOpen" />
				                </a>
				            </div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script async="" type="text/javascript">
var $ = jQuery.noConflict();
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > $('.site-header').outerHeight() + 250) {
					$('.site-header').addClass('main_fixed');
					$('body').css('padding-top', $('.site-header').outerHeight());
				} else {
					$('body').css('padding-top', '0');
					$('.site-header').removeClass('main_fixed');
				}
			});
		});

		$(function () {
			$(window).scroll(function () {
					$('.site-header').css('top', '100');
			});
		});
</script>

<script>
    $(document).ready(function() {
        $(".btn-menu").click(function() {
			 $(".site-header").toggleClass("open-nav");
        });
    });
</script>
    
<script>
	$(document).ready(function() {
        $(".close-menu").click(function() {
            $(".site-header").removeClass("open-nav");
        });
    });
</script>


<script type="text/javascript" src="<?php echo get_template_directory_uri().'/build/js/'.add_file_min().'.min.js'; ?>"></script>

</body>

</html>

