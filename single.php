<?php get_header(); ?>
<div class="blog">  
	<?php while ( have_posts() ) : the_post(); ?>
		<h3><?php the_date(); ?></h3>
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?>
