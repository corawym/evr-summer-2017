<?php
/**
 * The template for displaying the footer.
 *
 * @package EVR_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-site-info">
					<div class="social-icons">
							<a href="https://twitter.com/Eastvanroasters" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/eastvanroasters/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.facebook.com/EastVanRoasters/" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
							<a href="https://www.pinterest.com/pin/544935623632016457/" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
					</div>
					<div class="footer-info">
						<div class="location-info">
							<div class="contact-desktop-only">
								<p><a href="#">Contact Us</a></p>
								<p><a href="#">Feedback</a></p>
							</div>
							<div class="address">
								<p class="info">319 Carrall Street</p>
								<p class="info">Vancouver, BC</p>
								<p class="info">(604) 629 7562</p>
							</div>
							<?php
							if ( !is_active_sidebar( 'footer-1' ) )
								return;
							else ( is_active_sidebar( 'footer-1' ) ) ?>
								<div class="business-hours">
									<?php dynamic_sidebar( 'footer-1' ); ?>
								</div>
						</div>
					</div>
					<div class="copyright">
						<p>copyright &copy; <?php echo date("Y"); ?> East Van Roasters all rights reserved</p>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
