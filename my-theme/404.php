<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="e404">

				<h1><?php _e( 'No se encontro la página', 'hinitWp' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( '¿Vamos al inicio?', 'hinitWp' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
