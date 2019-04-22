<!-- Header Part >> File: Header.php -->
<?php get_header(); ?>
	  
<!-- Recent posts of special category -->
<div class="row">
<?php 
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
  if ( $q->have_posts() ) { 
	while ( $q->have_posts() ) {
	  $q->the_post();
	  ?>
		<div class="col-6">
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
</div>

<!-- Footer Part >> File: Footer.php -->
<?php get_footer(); ?>