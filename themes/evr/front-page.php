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

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) :
                the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large' ); ?>
                        <?php endif; ?>

                        <?php 
                        // the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
                        ?>

                        <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php evr_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php evr_posted_by(); ?>
                        </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->

                <section class="main-hero">
                    <h1>East Van Logo</h1>
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
                <span class="quote1"></span><p>Trust me, if you stop by and have a cup of the intense Mayan Drinking Chocolate, you'll feel the clouds part and the angels sing.</p><span class="quote2"></span>
                <p>John Crawford,<span class="eat"> Eat Magazine</span></p>
            </div>
        </section>

        <section class="menu-hero">
            <button class="front-page-btn">Menu</button>
        </section>

        <section class="subscribe">
        <h2>Subscribe</h2>
        <p>Sign up with your email address for exclusive events and products!</p>
        <form class="subscribe-form" action="subscribe">
            <input class="email" type="email" name="usremail" placeholder="Enter Email">
            <button class="sign-up" type="submit">Sign Up</button>
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