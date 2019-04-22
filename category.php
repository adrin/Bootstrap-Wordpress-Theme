<!-- Header and Navigation files loading here >> Files: Header.php / inc/navigation.php -->
<?php get_header(); get_template_part('inc/navigaion'); ?>


<div class="container">
	<!-- Get category name and show it here -->
	<h1><?php echo get_cat_name();?></h1>
	<!-- Get category Discription and show it here -->
	<p><?php echo category_description(); ?></p>

	<div class="row">
		<!-- Get category posts from database and put it here / you can use it any where you want show posts or post content -->
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  		<div class="col-6">
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
	</div>

</div>

<!-- Footer Part >> File: Footer.php -->
<?php get_footer(); ?>