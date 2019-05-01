<?php get_header(); ?>

<section>
	<div class="container">
		<h1> Sorry, page not found</h1>
		<p> Please use the search to find another page or <a href="<?php echo get_home_url(); ?>"> click here </a> to go back to the homepage. </p>
		<?php get_search_form(); ?>
	</div>
</section>

<?php get_footer(); ?>