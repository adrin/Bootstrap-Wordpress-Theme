<!-- Header and Navigation files loading here >> Files: Header.php / inc/navigation.php -->
<?php get_header(); get_template_part('inc/navi'); ?>

<!-- Post part start -->
<article><div class="container">
	<div class="row justify-content-between">
		<!-- Post Content part Start -->
		<div class="col-lg-8 col-md-8 col-sm-12">
			<section>
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
			</section>
		</div>
		<!-- Post Content part End -->

		<!-- widget part Start -->
		<div class="col-lg-3 col-md-3 col-sm-12">
			<!-- Start customize widget for random posts show -->
			<div class="widegt">
				<h3>Random Posts</h3>
				<ul>
					<!-- Query to get random posts | showposts: how many posts should get -->
					<?php query_posts('showposts=5&offset=0&orderby=rand'); ?>
					<!-- Query to get posts -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li>
							<!-- link of the posts and titles -->
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<!-- litle bit of posts contents -->
							<p><?php the_content_rss('', TRUE, '', 30); ?></p>
						</li>
					<!-- End of the query -->
					<?php endwhile; endif; ?>
				</ul>
			</div>

			<!-- Start widget of the widget page in wordpress pannel that we set on the fucntion.php file -->
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?><?php endif; ?>
			<!-- End widget -->
		</div>
		<!-- widget part End -->
	</div>
	
</div></article>
<!-- Post part End -->

<!-- Footer Part >> File: Footer.php -->
<?php get_footer(); ?>