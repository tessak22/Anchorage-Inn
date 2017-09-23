<?php
/**
 * 404
 *
 * @package Takeoff
 */

get_header(); ?>

<header class="document-header">
	<div class="container">
	    <div class="row">
	        <div class="page-title col-md-12">
	            <h1>Page Not Found (404)</h1>
	        </div>
	    </div>
    </div>
</header>

<main class="site-main container">

<div class="container-columns row">
    <div class="content col-md-9" role="main">
        <p class="callout">We're sorry &ndash; we could not find the page you requested.</p>
        <p class="call-to-action"><a href="/">Visit Our Homepage</a></p>
        <?php get_search_form(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>