<?php
/**
 * The main template file.
 *
 * @package EVR_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="front-page-main" role="main">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && ! is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

           
        <section class="main-hero container-full">
            <div class="front-page-hero-content-container">
                <img class="evr-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evr-logo.svg" alt="East Van Roaster's logo">
                <div class="front-page-scroll">
                    <p>Scroll</p>
                    <p><i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></p>
                </div>
            </div>
        </section>

        <section class="content-one">
            <div class="content-one-div">
                <p>Non-profit initiative benefitting the women residents of Rainier Hotel</p>
            </div>
        </section>

        <section class="store-hero">
        </section>

        <section class="content-two">
            <div class="content-two-div">
                <span class="open-quote"></span>
                <p><span class="open-quote"></span>Trust me, if you stop by and have a cup of the intense Mayan Drinking Chocolate, you'll feel the clouds part and the angels sing.<span class="close-quote"></span></p>
                <p class="author">John Crawford,<span class="eat"> Eat Magazine</span></p>
                
            </div>
        </section>

        <section class="menu-hero">
            <div class="front-page-btn button-border">
                <a href="#">
                    <div class="border1">
                        <div class="border2">Menu</div>
                    </div>
                </a>   
            </div>
            <!-- <a class="front-page-btn button-border">Menu</a> -->
        </section>

        <section class="subscribe">
            <div class="subscribe-content">
                <h2>Subscribe</h2>
                <p>Sign up with your email address for exclusive events and products!</p>
            </div>
        <form class="subscribe-form" action="subscribe">
            <input class="email" type="email" name="usremail" placeholder="Enter Email">
            <button class="sign-up" type="submit">Sign Up</button>
        </form>
        </section>

        <section class="instagram">
        </section>

           

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>