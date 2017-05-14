<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Resultados de busqueda para ', 'hinitWp' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('/template-parts/loop'); ?>

			<?php get_template_part('/template-parts/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
