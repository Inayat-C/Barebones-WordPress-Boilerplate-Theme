<?php get_header(); ?>

	<div class="container">
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

			<section>
				<h1> <?php the_title(); ?> </h1>
				<?php the_excerpt(); ?>
				<button> <a href="<?php the_permalink(); ?>"> Read More </a> </button>
			</section>

			<section>
				<h3> Not found what you are looking for? </h3>
				<p> Try another search: </p>
				<?php get_search_form(); ?>
			</section>
			
		<?php endwhile; else : ?>

			<section>
				<h1> <?php _e( 'Nothing Found'); ?> </h1>
				<p> <?php _e( 'Sorry, nothing matched your search. Please try again.'); ?> </p>
				<?php get_search_form(); ?>
			</section>

		<?php endif; ?>
	</div>

<?php get_footer(); ?>