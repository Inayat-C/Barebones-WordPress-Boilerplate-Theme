<?php get_header(); ?>

	<div class="container">
		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
		<?php endwhile; else : ?>
		<?php 
			_e( 'Nothing Found'); 
		 	_e( 'Sorry, nothing matched your search. Please try again.'); 
			get_search_form(); 
		endif; ?>
	</div>

<?php get_footer(); ?>