<?php
/**
 * attachment
 * custom post type
 * blog post
 *
 * @package Takeoff
 */

// get the section title in case this is a blog post
$posts_section_title = takeoff_get_posts_section_title();

get_header(); ?>

<header class="document-header">
    <div class="container">
        <div class="row">
            <div class="page-title col-sm-10 col-sm-offset-1">
                <h1><?php echo ($posts_section_title) ? $posts_section_title : get_the_title(); ?></h1>
            </div>
        </div>
    </div>
</header>

<main class="site-main container">

<div class="row">
    <div class="content col-sm-8 col-sm-offset-1" role="main">

        <?php
            while (have_posts()) {
                the_post();
                get_template_part('content');
            }
        ?>

        <?php if ('post' == get_post_type()) : ?>
            <footer class="article-footer">
                <?php get_template_part('nav', 'posts'); ?>
            </footer>
        <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
