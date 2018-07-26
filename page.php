<?php get_header(); ?>

<section>
	<div class="container">
		<h1> <?php the_title();?> </h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
				<?php the_content();?>
			</article>

		<?php endwhile;?>

		<?php else: ?>

			<article>
				<h2> Sorry, nothing to display. </h2>
			</article>

		<?php endif; ?>		
	</div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>