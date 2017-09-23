<?php
/**
 * page
 * front page
 *
 * @package Takeoff
 */

get_header(); ?>

</header><!-- .site-header -->

<!-- Main -->
    <main class="main" role="main">
        <!-- Hero -->
        <div class="hero" style="background-image:url('<?php the_field('hero_background'); ?>');">
            <article>
                <img class="wow fadeInDown" src="<?php the_field('hero_logo'); ?>">
                <h1 class="wow fadeInDown"><?php the_field('hero_tagline'); ?></h1>
            </article>
        </div>
        <!-- //Hero -->
        
        <!-- Tab navigation -->
            <nav class="tabs four" role="navigation">
                <ul class="wrap">
                    <li><a href="<?php echo get_permalink(BREAKFAST_MENU); ?>">
                        <img src="<?php the_field('tab_breakfast_icon'); ?>" alt="" /><?php the_field('tab_breakfast_text'); ?>
                    </a></li>
                    <li><a href="<?php echo get_permalink(MAIN_MENU); ?>">
                        <img src="<?php the_field('tab_lunch_icon'); ?>" alt="" /><?php the_field('tab_lunch_text'); ?>
                    </a></li>
                    <li><a href="<?php echo get_permalink(DINNER_MENU); ?>">
                        <img src="<?php the_field('tab_dinner_icon'); ?>" alt="" /><?php the_field('tab_dinner_text'); ?>
                    </a></li>
                    <li><a href="<?php echo get_permalink(PIZZA_MENU); ?>">
                        <img src="<?php the_field('tab_pizza_icon'); ?>" alt="" /><?php the_field('tab_pizza_text'); ?>
                    </a></li>
                </ul>
            </nav>
            <!-- //Tab navigation -->
        
        
        <!-- Testimonials -->
        <section class="testimonials" style="background-image:url('<?php the_field('intro_background'); ?>');">
            <div class="wrap center">
                <h6><?php the_field('intro_header'); ?></h6>
                <?php the_field('intro_paragraph'); ?>
            </div>
        </section>
        <!-- //Testimonials -->
        
        <!-- App -->
        <section class="white plate">
            <div class="wrap center">
                <h2>Many Amazing Ammentities to Offer</h2>
                <p>We are open every day throughout the entire year.</p>
                <ol class="custom triplets">
                    <li class="wow fadeIn"><strong>Breakfast, Lunch & Dinner</strong><br />Stop by anytime for all-day Breakfast, Lunch & Dinner.</li>
                    <li class="wow fadeIn" data-wow-delay=".2s"><strong>Full Service Bar</strong><br />Enjoy a cocktail or two at our full service bar.</li>
                    <li class="wow fadeIn" data-wow-delay=".4s"><strong>Lake Inguadona</strong><br />Enjoy our beautiful patio overlooking Lake Inguadona</li>
                </ol>
            </div>
        </section>
        <!-- //App -->


<?php get_footer(); ?>
