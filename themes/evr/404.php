<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="not-found-main" role="main">

			<section class="error-404 not-found">
				<div class="error-hero-banner">
					<div class="container-max800 container-padding error-content">
						<div class="error-hero-content-container text-center">
							<h1>404</h1>
							<p>Oops.</p>
							<p>We can't seem to find the page you're looking for.</p>
							
							<div class="home-btn button-border">
								<a href="<?php echo home_url() ?>">
									<div class="border1">
										<div class="border2">Home</div>
									</div>
								</a>   
							</div>

						</div>
					</div>
				</div>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
