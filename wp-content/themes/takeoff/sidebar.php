<?php
/**
 * sidebar
 *
 * @package Takeoff
 */

if ($post->post_parent) {
    // if $post has parent than it is "Second level" and show its children.
    $children = wp_list_pages(array(
        'child_of' => $post->post_parent,
        'depth' => 1,
        'echo' => 0,
        'title_li' => '',
    ));

    $top_page_title = get_the_title($post->post_parent);
    $top_page_permalink = get_permalink($post->post_parent);
} else {
    // else it's a "Top level" so display children & grand children?
    $children = wp_list_pages(array(
        'child_of' => $post->ID,
        'depth' => 1,
        'echo' => 0,
        'title_li' => '',
    ));

    $top_page_title = get_the_title($post->ID);
    $top_page_permalink = get_permalink($post->ID);
}

?>

<aside class="col-md-4" role="complementary">
    <div class="sidebar">

    	Nothing Here.

    </div>
</aside>
