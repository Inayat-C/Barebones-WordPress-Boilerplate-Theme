<?php get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section>
			<h1> <?php the_title(); ?> </h1>
			<?php the_excerpt(); ?>
			<button> <a href="<?php the_permalink(); ?>"> Read More </a> </button>
		</section>
	<?php endwhile; endif; ?>	
</div>

<?php get_footer(); ?>