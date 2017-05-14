<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- Img miniatura -->
		<?php if ( has_post_thumbnail()) : // Revisa si la miniatura existe ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // tamaño de la miniatura ?>
			</a>
		<?php endif; ?>
		<!-- /Img miniatura -->

		<!-- Título de la entrada -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /Título de la entrada -->

		<!-- Detalles de la entrada -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Publicado por', 'hinitWP' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Deja tu comentario', 'hinitWP' ), __( '1 Comentario', 'hinitWP' ), __( '% Comentarios', 'hinitWP' )); ?></span>
		<!-- /Detalles de la entrada -->

		<?php hinitWp_excerpt('hinitWp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?> 

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Disculpa, no hay nada que ver.', 'hinitWP' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
