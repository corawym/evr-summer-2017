<?php
/**
 * The template for displaying volunteer page.
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-banner volunteer-hero-banner container-full">
        <div class="hero-content-container ">
          <div class="hero-content container-max1080 container-padding">
            <h1 class="hero-content-title">volunteer</h1>
            <a class="hero-button" href="#volunteer-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

      <div class="header-offset" id="volunteer-content"></div>

      <section class="volunteer-container container-full container-separator-top-bottom">
        <div class="container-white-bg-content">
          <div>
            <h3 class="text-center">How to be a volunteer?</h3>
            <p>We will be looking for volunteers to help us prepare for the holiday season.</p>
            <p>Hear about upcoming volunteer opportunities by signing up for our newsletter.</p>
          </div>

          <div class="subscribe">
            <div class="subscribe-content">
                <h2>Subscribe</h2>
                <p>Sign up with your email address for exclusive events and products!</p>
            </div>
            <form class="subscribe-form" action="https://eastvanroasters.us16.list-manage.com/subscribe/post" method="POST">
                <input type="hidden" name="u" value="97bc113ec28f7d8d5d890eaaa">
                <input type="hidden" name="id" value="7156395ad4">
                <input class="email" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Enter Email">
                <button class="sign-up" type="submit">Sign Up</button>
            </form>
          </div>

          <div>
            <h3>Any questions?</h3>

            <!--button orange border-->
            <div class="button-border">
              <a href="<?php echo get_page_link(23); ?>#location-content">
                <div class="border1">
                  <div class="border2">Contact Us</div>
                </div>
              </a>   
            </div>
            
           
          </div>
        </div>
      </section>



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>