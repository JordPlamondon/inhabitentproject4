<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			<!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="contact">
						<h3>Contact Info</h3>
						<div class="contact-icons">
							<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:778-456-7891">778-456-7891</a></p>
						</div>
							<div class="footer-social">
								<p><i class="fa fa-facebook-official" aria-hidden="true" ></i>
									<i class="fa fa-twitter-square" aria-hidden="true"></i>
									<i class="fa fa-google-plus-square" aria-hidden="true"></i>	
								</p>
							</div>	
					</div>
				<div class="business">
					<h3>Business Hours</h3>
					<p><span>Monday-Friday:</span> 9am to 5pm</p>
					<p><span>Saturday:</span> 10am to 2pm</p>
					<p><span>Sunday:</span> Closed</p>
				</div>

				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/logos/inhabitent-logo-text.svg'; ?>" alt="Inhabitent Logo" />
					</a>
				</div>	
				<div class="site-info">
				<p>Copyright &copy; <?php echo date("Y"); ?> Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
