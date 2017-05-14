<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Entradas para ', 'hinitWP' ); single_cat_title(); ?></h1>

			<?php get_template_part('template-parts/loop'); ?>

			<?php get_template_part('template-parts/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>