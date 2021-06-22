<?php get_header(); ?>
<section class="contact pt-5 pb-5">
	<div class="container pt-5 pb-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row pt-5 pb-5">
			<div class="col-lg-3 pt-5 pb-5">
				<h2 class="blue-text fw-bold h1"><?php the_title(); ?></h2>
			</div>
			<div class="col-lg-9 pt-5 pb-5">
				<?php the_content(); ?>

			</div>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>

	

