<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?>

<footer class="footer-main text-center">
	<!--------------- Footer Top ---------------->
	<section class="footer-top">
		<div class="container">
			<div class="row">
				<!--------------- Footer Newsletter ---------------->
				<div class="col-md-12 col-sm-12 col-xs-12 ">
					<?php
                    if(get_theme_mod('bottom_footer_copyright_enable','1')) :
                        do_action('themetim_bottom_footer_copyright');
                    endif;
                    ?>
				</div>
			</div>
		</div>
	</section>
</footer>
</div>
<?php wp_footer(); ?>
<script>
	var $ = jQuery;
	$(function() {
		$(document).on("click", ".menu-item a", function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
</script>
</body>
</html>
