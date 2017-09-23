<?php
/**
 * Template Name: Menu Page
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
                        <?php get_template_part('variant', 'after-content'); ?>
                    </div>
                    <!-- //FullWidth -->
                </div>
            </div>
            <!-- //Wrapper -->
        </div>
        <!-- //Content-->

<?php get_footer(); ?>