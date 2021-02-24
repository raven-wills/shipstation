<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles');


function child_remove_parent_function() {
    remove_action( 'wp_body_open', 'twentytwenty_skip_link', 5);
}

add_action( 'wp_loaded', 'child_remove_parent_function' );


 /* Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function twentytwenty_skip_child_link() {
	echo '<a class="skip-link screen-reader-text" href="#main-content">' . __( 'Skip to the content', 'twentytwenty' ) . '</a>';
}

add_action( 'wp_body_open', 'twentytwenty_skip_child_link', 5);
