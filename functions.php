<?php
function uztransformator_scripts() {
    wp_enqueue_style('uztransformator-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'uztransformator_scripts');
