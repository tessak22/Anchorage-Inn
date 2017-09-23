<?php

if (BREAKFAST_MENU == $post->ID) {
   get_template_part('inc', 'breakfast-menu');
}

if (MAIN_MENU == $post->ID) {
   get_template_part('inc', 'main-menu');
}

if (DINNER_MENU == $post->ID) {
   get_template_part('inc', 'dinner-menu');
}

if (PIZZA_MENU == $post->ID) {
   get_template_part('inc', 'pizza-menu');
}

?>