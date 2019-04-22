<?php 
// Set two Navigation for your wordpress Site
function register_my_menus() {
  register_nav_menus(
    array(
      // it set on header
      'nav-menu' => __( 'Header Menu' ),
      // and this set on footer
      'fot-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Widget Part
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Sidebar Widgets',
    'id'   => 'sidebar-widgets',
    'description'   => 'These are widgets for the sidebar.',
    // Widget Start tag
    'before_widget' => '<div class="widegt">',
    // Widget end tag
    'after_widget'  => '</div>',
    // Widget Title Start tag // you can even add class to title like <h3 class="something">
    'before_title'  => '<h3>',
    // Widget Title End tag
    'after_title'   => '</h3>'
  ));
}

// Thumbnail
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' ); 
}
if (function_exists('add_image_size')){
add_image_size( 'project-thumb', 540, 300,true);
} 

?>