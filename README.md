# Bootstrap Wordpress Theme
> This is an empty and simple wordpress theme and it making with Bootstrap heart.So you can use feature of Bootstrap in here with this Theme.
[![HitCount](http://hits.dwyl.io/adrin/Bootstrap-Wordpress-Theme.svg)](http://hits.dwyl.io/adrin/Bootstrap-Wordpress-Theme) ![GitHub last commit](https://img.shields.io/github/last-commit/adrin/Bootstrap-Wordpress-Theme.svg)

It's run perfectly on Travis as you see [![Build Status](https://travis-ci.com/mahdixco/Bootstrap-Wordpress-Theme.svg?branch=master)](https://travis-ci.com/mahdixco/Bootstrap-Wordpress-Theme)

Matching and mading with <img src="https://img.shields.io/badge/Bootstrap-Match-blue.svg"> for Front-End and <img src="https://img.shields.io/badge/Wordpress-Match-green.svg"> Wordpress Codex.


`BWT / Bootstrap Wordpress Theme` provides a minimal and simple empty theme for your wordpress theme projects. you can read all this ReadMe and Find what way this Rep work.

## Usage / How to get site Title , Get Posts and Show Posts in wordpress

For get title of the pages like 404 , category, home page and blow blow :
```php
if (function_exists('is_tag') && is_tag()) { 
	echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
} elseif (is_archive()) { 
	wp_title(''); echo ' Archive - '; 
} elseif (is_search()) { 
	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
} elseif (!(is_404()) && (is_single()) || (is_page())) { 
	wp_title(''); echo ' - '; 
} elseif (is_404()) {
	echo 'Not Found - '; 
}
bloginfo('name');
```

Get recent posts of the special category in wordpress :
```php
$args = array(
  'post_type' => 'post' ,
  'orderby' => 'date' ,
  'order' => 'DESC' ,
  // how many post you want get and pushing here
  'posts_per_page' => 6,
  // wich category you want to showing it here
  'cat'         => '3',
  'paged' => get_query_var('paged'),
  'post_parent' => $parent
  ); 
$q = new WP_Query($args);
```
and for showing them you can use this query after that :
```php
if ( $q->have_posts() ) { 
while ( $q->have_posts() ) {
  $q->the_post();
  ?>
  <div>
    <!-- Post link in a tag -->
    <div><a href="<?php the_permalink() ?>">
    <!-- Thumbnail -->
    <?php the_post_thumbnail('project-thumb'); ?>
      <div>
        <!-- Title of the post -->
        <h3><?php the_title(); ?></h3>
        <!-- little bit of content -->
        <p><?php the_content_rss('', TRUE, '', 40); ?></p>
      </div>
  </a></div>
  </div>
<?php
}
} else {
	?>
  <!-- A massege if this query can't find any post on your category you set -->
  <p>We can't find any post there</p>
  <?php
}
?>
```
For get category name and discription for category page :
```php
Category Name :  <?php echo get_cat_name();?>
Category Discription : <?php echo category_description(); ?>
```
For get and showing Posts of the category use this code : 
```php
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div>
    <!-- Post link in Href Tag -->
    <div class="box"><a href="<?php the_permalink() ?>">
      <!-- Thumbnail -->
      <?php the_post_thumbnail('project-thumb'); ?>
      <!-- Title of the post -->
      <h3><?php the_title(); ?></h3>
      <!-- Litle bit of post content -->
      <p><?php the_content_rss('', TRUE, '', 40); ?></p>
    </a></div>
  </div>
<!-- End of our posts get query -->
<?php endwhile; else: ?><?php endif; ?>
```
For showing post all content on the single or page.php page :
```php
<!-- Query to get post content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <header>
    <!-- Title of the post -->
    <h1><?php the_title(); ?></h1>
    <!-- date of the post -->
    <small><?php the_time('j F Y'); ?></small>
  </header>
  <!-- orginal and full content of the post -->
  <?php the_content(__('')); ?>
  <!-- End of our query -->
<?php endwhile; else: ?><?php endif; ?>	
```

## How to add Navigation , Sidebar Widget and Thumbnail in Wordpress
for set wordpress navigation you should have functions.php file and put this codes in it with php format :
```php
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
```
how to show our navigation in wordpress theme parts :
```php
//nav-menu is name of the menu if you change it to "fot-menu" this could show footer menu to any where you want
<?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
```

and for adding widget part to your wordpress theme you should copy this code to your functions.php file :
```php
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
```
how we can show sidebar in our theme : 
```php
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?><?php endif; ?>
```

After all for Thumbnail you can use this code : 
```php
if ( function_exists( 'add_theme_support' ) ) {
  //post-thumbnail is name of our thumbnail for calling them from database
  add_theme_support( 'post-thumbnails' ); 
}
```
how we use thumbnail in theme :
```php
<?php the_post_thumbnail('post-thumbnails'); ?>
```

## Thank You 
after all thank you guys and i be glad to see your commits, pushs and blow blow. see my website: 
`https://adrin.me`
