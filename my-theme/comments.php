<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Esta entrada está protegida con contraseña. Introduce la contraseña para ver los comentarios.', 'hinitWP' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=hinitWpcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Los comentarios están cerrados por el momento.', 'hinitWP' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?> 

</div>