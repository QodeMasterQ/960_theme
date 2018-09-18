<?php
// CODE HERE
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => 'Main Menu',
      'corp-menu' => 'Corp Menu',
      'serv-menu' => 'Serv Menu'
    )
  );
}
add_action( 'init', 'register_my_menus' );

function wp_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wp_custom_excerpt_length');