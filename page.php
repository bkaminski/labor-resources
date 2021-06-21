<?php get_header(); ?>
<section class="contact">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>








		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>

	

