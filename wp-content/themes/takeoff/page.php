<?php
/**
 * page
 * front page
 *
 * @package Takeoff
 */

get_header(); ?>

<!-- Main -->
    <main class="main" role="main">
        <!-- Intro -->
        <header class="intro">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
            </div>
        </header>
        <!-- //Intro -->
        
        <!-- Content -->
        <div class="content static">
            <!-- Wrapper -->
            <div class="wrap">
                <div class="row">
                    <!-- FullWidth -->
                    <div class="full-width">
                        <div class="box-white">
                            <?php
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('content');
                                }
                            ?>
                            <?php get_template_part('variant', 'after-content'); ?>
                        </div>
                    </div>
                    <!-- //FullWidth -->
                </div>
            </div>
            <!-- //Wrapper -->
        </div>
        <!-- //Content-->

<?php get_footer(); ?>
