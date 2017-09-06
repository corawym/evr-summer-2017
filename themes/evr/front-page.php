<?php
/**
 * The main template file.
 *
 * @package EVR_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && ! is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) :
                the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

                <section class="main-hero">
                    <h1>East Van Logo</h1>
        </section>

        <section class="content-one">
            <p>Non-profit initiative benefitting the women residents of Rainier Hotel</p>
        </section>

        <section class="store-hero">
        </section>

        <section class="content-two">
            <p>Trust me, if you stop by and have a cup of the intense Mayan Drinking Chocolate, you'll feel the clouds part and the angels sing.</p>
            <p>John Crawford, Eat Magazine</p>
        </section>

        <section class="menu-hero">
        </section>

        <section class="subscribe">
        <h1>Subscribe</h1>
        <p>Sign up with your email address for exclusive events and products!</p>
        <form action="subscribe">
            <input type="email" name="usremail" placeholder="Enter Email">
            <button type="submit">Sign Up</button>
        </form>
        </section>

        <section class="instagram">
        </section>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>