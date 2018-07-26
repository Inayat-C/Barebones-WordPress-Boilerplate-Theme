<?php get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Content --> 
	<?php endwhile; endif; ?>	
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>