<!-- Header and Navigation files loading here >> Files: Header.php / inc/navigation.php -->
<?php get_header(); get_template_part('inc/navi');?>

<article><div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-10 col-md-10 col-sm-12">
			<section class="content">
				<!-- This query get post data from server -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<header>
					<!-- Title of the page -->
					<h1><?php the_title(); ?></h1>
					<!-- date of the page -->
					<small><?php the_time('j F Y'); ?></small>
				</header>

				<!-- you can add your tumbnail here with delete "//" from under line -->
				<?php // the_post_thumbnail('post-thumbnails'); ?>

				<!-- Content part of the page -->
				<?php the_content(__('')); ?>
				<!-- End of the query -->
				<?php endwhile; else: ?><?php endif; ?>	
			</section>
		</div>
	</div>
</div></article>

<!-- Footer Part >> File: Footer.php -->
<?php get_footer(); ?>