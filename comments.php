<h3>Comments</h3>
<?php if ( have_comments() ) : ?>
<ol class="comment-list">
	<?php wp_list_comments( array(
		'style'       => 'ol',
		'short_ping'  => true,
		'avatar_size' => 74,
	) ); ?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav class="comment-navigation" role="navigation">
		<div class="nav-previous">&larr; Older Comments></div>
		<div class="nav-next">Newer Comments &rarr;</div>
	</nav>
<?php endif; ?>
<?php endif; ?>

<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments">Comments are closed.</p>
<?php endif; ?>
<?php comment_form(); ?>